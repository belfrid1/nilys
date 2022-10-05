<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Popup;
use App\Models\PopupGroup;
use App\Models\PopupGroupCondition;
use Illuminate\Http\Request;
use Nette\Utils\ArrayList;

class PopupGroupController extends Controller
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
        $popupGroups = PopupGroup::all();

        return view('back.popup-group.index', compact('popupGroups'))
            //            ->with('i',(request()->input('page',1) -1) * 5)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return  view("back.popup-group.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        //        $check = checkdnsrr($request->name , "A");
        //        dd($check);

        $request->validate([
            'name' => 'required|unique:popup_groups',
        ]);

        $guid = bin2hex(random_bytes(32));

        PopupGroup::create(
            [
                'name' => $request->name,
                'guid' => $guid
            ]
        );
        return redirect()->route('groups.index')
            ->with(['success' => "Popup Group created successfully."]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function show(PopupGroup $group)
    {
        //
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopupGroup  $group

     */
    public function edit($slug)
    {

        //get group id with slug
        $groupId = PopupGroup::firstwhere('slug', $slug)->id;

        //get all popups of group
        $popups = Popup::where('popupgroup_id', $groupId)->get();
        $group = PopupGroup::firstWhere('slug', $slug);

        return view('back.popup-group.edit', compact('group', 'popups'));
    }

    /**, specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopupGroup  $group
     */
    public function update(Request $request, $id)
    {

        request()->validate([
            'name' => 'required|string|max:255'
        ]);
        $group = PopupGroup::where(["guid" => $id]);

        $group->update([
            'name' => $request->name
        ]);
        if ($request->selects) {
            for ($i = 0; $i < count($request->selects); $i++) {

                if ($request->selects[$i] == null) {
                    return redirect()->route('groups.edit')->with(['error' => "Please select the popup"]);
                } else {
                    // $urls = explode("\n", $request->textareas[$i]);
                    $conditions = array($request->selects[$i] => '' . $request->textareas[$i]);

                    $popup_id = Popup::where('slug', $request->selects[$i])->first()->id;
                    /*request()->validate([
                        'url' => 'required|url'
                    ]);*/

                    PopupGroupCondition::create(
                        [
                            'popup_id' => $popup_id,
                            'url' => $request->textareas[$i]
                        ]
                    );
                }
            }
        }

        return redirect()->route('groups.index')->with(['success' => "Update successfully completed"]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopupGroup  $domain

     */
    public function destroy($slug)
    {
        $popupGroup = PopupGroup::where('slug', $slug);
        try {
            $popupGroup->delete();
        } catch (\Exception $exceptione) {
            return redirect()->back()->with(['error' => $exceptione->getMessage()]);
        }

        // Redirection route "posts.index"
        return redirect()->back()->with(['success' => "Deletion successfully completed"]);
    }
}
