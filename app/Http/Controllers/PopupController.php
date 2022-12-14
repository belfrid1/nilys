<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Popup;
use App\Models\PopupGroup;
use App\Models\SettingEmail;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PopupController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $popups = Popup::all();

        $popupgroups = PopupGroup::all();

        return view('back.popup.index', compact('popups','popupgroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $setting_mail = SettingEmail::latest()->first();
        $popupgroups = PopupGroup::all();
        return  view("back.popup.create", compact('popupgroups','setting_mail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:255|unique:popups',
            'email_subject' => 'required|string',
            'email_content' => 'required|string',
            'popup_content' => 'required|string',
            'popup_group' => 'required',
        ]);


        if($request->default){

           $old_default_popups =  Popup::where(['default'=>true, 'popupgroup_id'=> $request->popup_group])->get();
           foreach ($old_default_popups as $old_default_popup ){
               $old_default_popup->update([
                   'default' => false
               ]);
           }
        }else{

            $old_default_popupsNB = Popup::where(['default'=>true, 'popupgroup_id'=> $request->popup_group])->count();
            if($old_default_popupsNB == 0 ) {
                return back()
                    ->withInput($request->input())
                    ->with(['error' => "Please define a default popup for the selected group"]);
            }
        }
        $popup_content = $request->popup_content;
        $email_content = $request->email_content;
        $popup = Popup::create([
            'name' => $request->name,
            'popup_content' => $popup_content,
            'email_subject' => $request->email_subject,
            'email_content' => $email_content,
            'popupgroup_id' => $request->popup_group,
            'default' => $request->boolean('default'),
            'enable' => $request->boolean('enable'),

        ]);
        return redirect(route('popup.index'))->with('success', "Popup create successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function show(Popup $popup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Popup  $popup
     */
    public function edit(Popup $popup)
    {
        $popupgroups = PopupGroup::all();
        return  view("back.popup.edit", compact('popupgroups','popup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Popup  $popup
     */
    public function update(Request $request,$id)
    {

        request()->validate([
            'name' => 'required|string|max:255',
            'email_subject' => 'required|string',
            'email_content' => 'required|string',
            'popup_content' => 'required|string',
            'popup_group' => 'required',
        ]);


        if($request->default){
            $old_default_popups =  Popup::where(['default'=>true, 'popupgroup_id'=> $request->popup_group])->get();
            foreach ($old_default_popups as $old_default_popup ){
                $old_default_popup->update([
                    'default' => false
                ]);
            }
        }else{

            $old_default_popupsNB = Popup::where(['default'=>true, 'popupgroup_id'=> $request->popup_group])->count();
            if($old_default_popupsNB == 0 ) {
                return back()
                    ->withInput($request->input())
                    ->with(['error' => "Please define a default popup for the selected group"]);
            }
        }
        $popup_content = $request->popup_content;
        $email_content =  $request->email_content;
        $popup = Popup::find($id);
        $popup->update([
            'name' => $request->name,
            'popup_content' => $popup_content,
            'email_subject' => $request->email_subject,
            'email_content' => $email_content,
            'popupgroup_id' => $request->popup_group,
            'default' => $request->boolean('default'),
            'enable' => $request->boolean('enable'),
        ]);
        return redirect()->route('popup.index')->with(['success' => "Popup Update successfully completed"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Popup  $popup
     */
    public function destroy($id)
    {
        $popuptodelete = Popup::find($id);
        $popuptodelete->delete();
        // Redirection route "posts.index"
        return redirect()->back()->with(['success' => "Deletion successfully completed"]);
    }
}
