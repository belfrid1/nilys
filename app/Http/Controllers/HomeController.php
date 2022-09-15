<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class HomeController extends Controller{

    public function index()
    {
        return view('back.dashboard');
    }

}
