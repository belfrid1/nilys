<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::get();

        return view('back.contact.index', compact('contacts'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
