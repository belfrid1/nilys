<?php

namespace App\Http\Controllers;

use App\Models\PopupGroup;
use Illuminate\Http\Request;

class PopupGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $popupGroups = PopupGroup::all();

        return view('back.popup-group.index', compact('popupGroups'))
            //            ->with('i',(request()->input('page',1) -1) * 5)
        ;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function create(Request $request)
    {
        //        $check = checkdnsrr($request->name , "A");
        //        dd($check);

        $request->validate([
            'name' => 'required|unique:popup_groups',
            'guid' => 'required|unique:popup_groups'
        ]);


        PopupGroup::create(
            [
                'name' => $request->name,
                'guid' => $request->guid
            ]
        );
        return redirect()->route('popup-groups.index')
            ->with(['success' => "Popup Group created successfully."]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopupGroup  $group

     */
    public function edit(PopupGroup $group)
    {

        return view('back.popup-group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopupGroup  $group
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|unique:popup_groups',
            'guid' => 'required|unique:popup_groups'
        ]);
        $group = PopupGroup::find($id);
        $group->update([
            'name' => $request->name,
            'guid' => $request->guid
        ]);

        return redirect()->route('popup-groups.index')->with(['success' => "Update successfully completed"]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopupGroup  $domain

     */
    public function destroy($id)
    {
        $popupGroup = PopupGroup::find($id);
        $popupGroup->delete();
        // Redirection route "posts.index"
        return redirect()->back()->with(['success' => "Deletion successfully completed"]);
    }
}
