<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Popup;
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
        $this->reponseApi = ["statut" => false, "error" => ''];

        // Check input
        $checkRules = [
            'firstname' => ['bail', 'required', 'max:255'],
            'email' => ['bail', 'required', 'max:255', 'email'],
            'url' => ['bail', 'required', 'max:255']
        ];

        $validated = Validator::make($request->all(), $checkRules);

        if (!$validated->fails()) {
            // check if user has allready suscribe to the newletter of this page
            $checkSubscribe = Contact::where(
                [
                    "email" => $request->email,
                    "url" => $request->url
                ]
            );
            if ($checkSubscribe->count() == 0) {
                // getting popup & group uuid détail
                $popupCondition = PopupGroupCondition::where(['url' => $request->url]);
                $domain = str_replace(["http://", "https://", "www."], "", $request->url);
                if ($popupCondition->count() > 0) {
                    $popup =  Popup::where(["id" => $popupCondition->first()->popup_id]);
                    $contact = Contact::create([
                        'firstname' => $request->firstname,
                        'email' => $request->email,
                        'domain' => $domain,
                        'url' => $request->url,
                        'status' => 0,
                        'popup_guid' => $popup->first()->id,
                        'popupgroup_guid' => $popup->first()->popupgroup_id
                    ]);

                    if ($contact) {
                        $this->reponseApi["statut"] = true;
                    }
                }
            } else {
                $this->reponseApi["statut"] = true;
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
