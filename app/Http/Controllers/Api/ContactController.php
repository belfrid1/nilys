<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Popup;
use App\Models\PopupGroup;
use App\Models\PopupGroupCondition;
use App\Models\SettingEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        return response()->json([
            "success" => true,
            "message" => "Product List",
            "data" => []
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $guid = $request->guid;
        $this->reponseApi = ["statut" => false,   "error" => '', "message"=> ''];

        // Check input
        $checkRules = [
            'firstname' => ['bail', 'required', 'max:255'],
            'email' => ['bail', 'required', 'max:255', 'email'],
            'url' => ['bail', 'required', 'max:255']
        ];

        $validated = Validator::make($request->all(), $checkRules);
        if (!$validated->fails()) {

            // get group to get popup
            // groupe help us to make the research on one part of conditions table
            $group = PopupGroup::where('guid',$guid)->first();

            // get all popup related to the group to reduce the search of url
            // we need poppup id to get conditons , check if conditions url is request url and save popup id
            $allPopup = Popup::where('popupgroup_id',$group->id)->get();

            $domain = str_replace(["http://", "https://", "www."], "", $request->url);

            $urls = [];
            foreach ($allPopup as $popup){
                //check
                $popupCondition = PopupGroupCondition::where(['popup_id' => $popup->id])->first();

                if ($popupCondition) {
                    $popup =  Popup::where(["id" => $popupCondition->popup_id])->first();
                    $urls = $popupCondition->url;
                    $arrayUrl = json_decode($urls);
                    foreach ($arrayUrl as $url){

                        if($url == $request->url ){

                            // check if user has allready suscribe to the newletter of this page
                            $checkSubscribe = Contact::where(
                                [
                                    "email" => $request->email,
                                    "url" => $request->url
                                ]
                            );


                            if ($checkSubscribe->count() == 0) {
//                                dd($checkSubscribe,$request->url,$popupCondition,$arrayUrl,$popup,$popupCondition->popup_id);
                                $contact = Contact::create([
                                    'firstname' => $request->firstname,
                                    'email' => $request->email,
                                    'domain' => $domain,
                                    'url' => $request->url,
                                    'status' => 0,
                                    'popup_guid' => $popup->slug,
                                    'popupgroup_guid' => $group->guid
                                ]);

                                if ($contact) {
                                    $this->reponseApi["statut"] = true;
                                    $this->reponseApi["error"] = "";
                                    $this->reponseApi["message"] = "Contact created";
                                }else{
                                    $this->reponseApi["statut"] = false;
                                    $this->reponseApi["error"] = "Unable to create contact";
                                }

                            } else {
                                // to edit
//                                dd($group->guid,'edit',$checkSubscribe,$request->url,$popupCondition,$arrayUrl,$popup,$popupCondition->popup_id);
                                    $popup =  Popup::where(["id" => $popupCondition->popup_id])->first();
                                    $checkSubscribe->update([
                                        'firstname' => $request->firstname,
                                        'email' => $request->email,
                                        'domain' => $domain,
                                        'url' => $request->url,
                                        'status' => 0,
                                        'popup_guid' => $popup->slug,
                                        'popupgroup_guid' => $group->guid
                                    ]);
                                    $this->reponseApi["statut"] = true;
                                    $this->reponseApi["error"] = "";
                                    $this->reponseApi["message"] = "Contact edited";
                            }

                        }
                    }
                }
                else{
                    $defaultPopup = Popup::where('popupgroup_id','=',$group->id)->where('default','=' ,true) ->first();
                   if($defaultPopup){
                       $checkSubscribe = Contact::where(
                           [
                               "email" => $request->email,
                               "url" => $request->url
                           ]
                       );
                       if ($checkSubscribe->count() == 0){
                           $contact = Contact::create([
                               'firstname' => $request->firstname,
                               'email' => $request->email,
                               'domain' => $domain,
                               'url' => $request->url,
                               'status' => 0,
                               'popup_guid' => $defaultPopup->slug,
                               'popupgroup_guid' => $group->guid
                           ]);
                           if($contact){
                               $this->reponseApi["statut"] = true;
                               $this->reponseApi["error"] = "Contact created";
                               $this->reponseApi["message"] = "Contact created default popup";
                           }
                       }else{
                           $checkSubscribe->update([
                               'firstname' => $request->firstname,
                               'email' => $request->email,
                               'domain' => $domain,
                               'url' => $request->url,
                               'status' => 0,
                               'popup_guid' => $defaultPopup->slug,
                               'popupgroup_guid' => $group->guid
                           ]);
                           $this->reponseApi["statut"] = true;
                           $this->reponseApi["error"] = "";
                           $this->reponseApi["message"] = "Contact edited with default popup";
                       }
                   }else{
                       $this->reponseApi["error"] = "Default popup does not existe !";
                   }
                }
            }
        } else {
            if (!empty($validated->messages()->get('firstname'))) {
                $this->reponseApi["error"] = "Please insert a valid username";
            } else if (!empty($validated->messages()->get('email'))) {
                $this->reponseApi["error"] = "Please insert a valid email address";
            }
        }

        return response()->json($this->reponseApi, 200);
    }



    public function getCreate()
    {
        return response()->json(["job" => "listen"], 200);
    }
}
