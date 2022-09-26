<?php

namespace App\Http\Controllers;

use App\Models\Popup;
use App\Models\PopupGroup;
use App\Models\Site;
use Illuminate\Http\Request;

class PopupController extends Controller
{
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
        return  view("back.popup.create");
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
            'popup_content' => 'required|string',
            'popop_group' => 'required',
        ]);


        $popup = Popup::create([
            'name' => $request->name,
            'popup_content' => $request->popup_content,
            'popupgroup_id' => $request->popop_group,
            'default' => $request->boolean('default'),
            'enable' => $request->boolean('enable'),

        ]);
        return redirect(route('popup.index',$popup->id))->with(['success' => "Popup create successfully"]);
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
     * @return \Illuminate\Http\Response
     */
    public function edit(Popup $popup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Popup $popup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popup $popup)
    {
        //
    }
}
