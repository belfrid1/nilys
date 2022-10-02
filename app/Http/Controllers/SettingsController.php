<?php

namespace App\Http\Controllers;

use App\Models\Popup;
use App\Models\PopupGroup;
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
        $popups = Popup::all();

        $popupgroups = PopupGroup::all();


        return view('back.setting.index', compact('popups','popupgroups'));
    }
}
