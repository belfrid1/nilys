<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
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
            'domain' => ['bail', 'required', 'max:255'],
            'url' => ['bail', 'required', 'max:255'],
            'popup_guid' => ['bail', 'required', 'max:255'],
            'group_guid' => ['bail', 'required', 'max:255']
        ];

        $validated = Validator::make($request->all(), $checkRules);

        if (!$validated->fails()) {
            $popup = Contact::create([
                'firstname' => $request->firstname,
                'email' => $request->email,
                'domain' => $request->domain,
                'url' => $request->url,
                'popup_guid' => $request->popup_guid,
                'popupgroup_guid' => $request->group_guid
            ]);

            if ($popup) {
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
}
