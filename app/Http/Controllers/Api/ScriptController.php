<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Popup;
use App\Models\PopupGroup;
use App\Models\PopupGroupCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ScriptController extends Controller
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

    public function getPopupContent(Request $request)
    {

        $guid = $request->guid;
        $this->responseApi = ["statut" => false, "error" => '', "data" => 'i'];

        $group = PopupGroup::where('guid',$guid)->first();


        $allPopup = Popup::where('popupgroup_id',$group->id)->get();

        $urls = [];
        foreach ($allPopup as $popup){

            $condition  = PopupGroupCondition::where('popup_id', $popup->id)->first();
            if($condition){
                $urls = $condition->url;
                $arrayUrl = json_decode($urls);
                foreach ($arrayUrl as $url){

                    if($url == $request->url ){

                        $this->responseApi["data"] = $popup->popup_content;
                        $this->responseApi["statut"] = true;
                    }else{
                        // get the default content
                        $defaultPopup = Popup::where(['popupgroup_id'=>$guid,'default'=> true ])->first();
                        $this->responseApi["data"] = $defaultPopup->popup_content;
                        $this->responseApi["statut"] = true;
                    }
                }
            }
        }
        return response()->json($this->responseApi, 200);
    }
}
