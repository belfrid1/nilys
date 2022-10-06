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

        //get condtions
        $allConditions = [];
        $cdtions = [];
        $popupsCondtions = [];


        foreach ($popups as $popup){

            // for find condition popup
//            $allConditions = PopupGroupCondition::where('popup_id',$popup->id)->get();
            $condition = PopupGroupCondition::where('popup_id',$popup->id)->first();



            //get group popup conditions
            if($condition){
                $popupsCondtions[] =  $popup;

                    if($popup->id == $condition->popup->id ){
                        $cdtions[$popup->slug] =  json_decode($condition->url);
                    }
            }
        }

        // get groups  with slig
        $group = PopupGroup::firstWhere('slug', $slug);

        return view('back.popup-group.edit', compact('group', 'popups','cdtions','popupsCondtions'));
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
//                    str_replace(' ', '', $request->textareas[$i]);

                     $urls = explode("\n", trim(str_replace(' ', '', trim(preg_replace('/\r/', '', trim(preg_replace('/\t+/', '', $request->textareas[$i])))))));
//                    dd($request->textareas[$i],);

                    //check il url is valid

                    foreach ($urls as $url){
                        $regex = "((https?|ftp)\:\/\/)?"; // SCHEME
                        $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass
                        $regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP
                        $regex .= "(\:[0-9]{2,5})?"; // Port
                        $regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path
                        $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query
                        $regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor

                        if(!preg_match("/^$regex$/i", $url)) // `i` flag for case-insensitive
                        {
                            return redirect()->back()->with(['error' => "Please check urls, you have enter a unvalid url"]);
                        }
                    }

                    $popup = Popup::where('slug', $request->selects[$i])->first();

                    if($popup){
                        $popupGroupCondition = PopupGroupCondition::where('popup_id',$popup->id)->first();

                       if($popupGroupCondition){
                           $popupGroupCondition->update([
                               'popup_id' => $popup->id,
                               'url' => json_encode($urls)
                           ]);
                       }else{
                           PopupGroupCondition::create([
                               'popup_id' => $popup->id,
                               'url' => json_encode($urls)
                           ]);
                       }

                    }else{
                        return redirect()->route('groups.index')->with(['error' => "Can't edit Popup Group , Popup does not exist"]);
                    }

                }
            }
        }

        return redirect()->route('groups.index')->with(['success' => "Popup group Update successfully completed"]);
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


    public function destroyCdtion($slug)
    {

        $popup = Popup::where('slug',$slug)->first();
        $popupGroupConditions = PopupGroupCondition::where('popup_id', $popup->id)->first();

        try {
            $popupGroupConditions->delete();
        } catch (\Exception $exceptione) {
            return redirect()->back()->with(['error' => $exceptione->getMessage()]);
        }

        // Redirection route "posts.index"
        return redirect()->back()->with(['success' => "Conditions Deletion successfully completed"]);
    }
}
