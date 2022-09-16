<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use Illuminate\Http\Request;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return *\Illuminate\Http\Response*
     */
    public function index()
    {
        $domaines = Domaine::all();

        return view('back.domaines.index', compact('domaines'))
//            ->with('i',(request()->input('page',1) -1) * 5)
            ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.domaines.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return *\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'apikey' => 'required',
        ]);

        Domaine::create($request->all());
        return redirect()->route('domain.list')
            ->with('success','Domaine created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function show(Domaine $domaine)
    {
        return view('back.domaines.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function edit(Domaine $domaine)
    {
        return view('back.domaines.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domaine $domaine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domaine $domaine)
    {
        //
    }
}
