<?php

namespace App\Http\Controllers;

use App\Models\Popup;
use App\Models\PopupGroup;
use App\Models\SettingApi;
use App\Models\SettingEmail;
use Illuminate\Http\Request;

class SettingsController extends Controller
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

        $setting_mail = SettingEmail::where('id',1)->first();
        $setting_api = SettingApi::where('id',1)->first();

        return view('back.setting.index', compact('setting_mail','setting_api'));
    }

//    public function editSettingMail()
//    {
//
//        return view('back.setting.index', compact());
//    }
//    public function editSettingApi()
//    {
//
//        return view('back.setting.index', compact());
//    }
}
