<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Popup;
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
        $this->responseApi = ["statut" => false, "error" => '',"data" => 'i'];

        $popupId = PopupGroupCondition::where('url',$request->url)->first()->popup_id;


        if($popupId){
            $popupContent = Popup::where('id',$popupId)->first()->popup_content;
            $this->responseApi["data"] = $popupContent;
            $this->responseApi["statut"] = true;
            return response()->json($this->responseApi, 200);
        }else{
            $this->responseApi["status"] = $request->url;
            $this->responseApi["error"] = "This url does not match any Popup ";
            return response()->json($this->responseApi, 500);
        }


    }
}
