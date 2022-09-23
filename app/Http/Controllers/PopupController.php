<?php

namespace App\Http\Controllers;

use App\Models\Popup;
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

        return view('back.popup.index', compact('popups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
