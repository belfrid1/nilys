<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DomainesController extends Controller {

    public function index()
    {
        return view('back.domaines.index');
    }

    public function show()
    {
        return view('back.domaines.show');
    }

    public function add()
    {
        return view('back.domaines.add');
    }

    public function edit()
    {
        return view('back.domaines.edit');
    }

}
