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

        $guid = "1234e5678-eazerty57-47mp-23kn";
        $this->responseApi = ["statut" => false, "error" => '', "data" => 'i'];


        $allPopup = Popup::where('guid',$guid)->get();
        $urls = [];
        foreach ($allPopup as $popup){
            $conditions  = PopupGroupCondition::where('popup_id', $popup->id)->first();

                $urls = $conditions->url;

                foreach ($urls as $url){
                    if($url === $request->url ){
                        $this->responseApi["data"] = $popup->popup_content;
                        $this->responseApi["statut"] = true;
                    }
                }
        }

        return response()->json($this->responseApi, 200);
    }
}
