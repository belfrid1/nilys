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

    public function getPopupcontent($groupuid, $url)
    {
        $this->reponseApi = ["statut" => false, "error" => '',"data" => ''];

        $popupId = PopupGroupCondition::where('url',$url)->get('popup_id');
        if($popupId){
            $this->response["data"] = Popup::find($popupId)->get('popup_content');
            $this->response["statut"] = true;
        }else{
            $this->response["status"] = false;
            $this->response["error"] = "This url does not match any Popup ";
        }
        $this->response["data"] = Popup::find($popupId)->get('popup_content');

        return response()->json($this->reponseApi, 200);
    }
}
