<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $domains = Domain::all();

        return view('back.domains.index', compact('domains'))
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
//        $check = checkdnsrr($request->name , "A");
//        dd($check);

        $request->validate([
            'name' => 'required|regex:"^[a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9](?:\.[a-zA-Z]{2,})+$"|unique:domains'
        ]);

        $key = bin2hex(random_bytes(32));

        Domain::create([
                'name' => $request->name,
                'apikey' => $key
            ]
        );
        return redirect()->route('domain.index')
            ->with(['success' => "Domain created successfully."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Domain $domain)
    {
        dd('show');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domain  $domain

     */
    public function edit(Domain $domain)
    {
        return view('back.domains.edit',compact('domain'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domain  $domain
     */
    public function update(Request $request, $id)
    {


        request()->validate([
            'name' => 'required|regex:"^[a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9](?:\.[a-zA-Z]{2,})+$"|unique:domains'
        ]);
        $domain = Domain::find($id);
        $domain->update([
            'name' => $request->name,
        ]);

        return redirect()->route('domain.index')->with(['success' => "Update successfully completed"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domain  $domain

     */
    public function destroy($id)
    {
        $domain = Domain::find($id);
        $domain->delete();
        // Redirection route "posts.index"
        return redirect()->back()->with(['success' => "Deletion successfully completed"]);
    }
}
