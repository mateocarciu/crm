<?php

namespace App\Http\Controllers;

use App\Models\Commercial;
use Illuminate\Http\Request;
use DB;

class CommercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Commercial::latest()->paginate(5);

        return view('commercials.index', compact('data'))
            ->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commercials.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('commercials')->where('IdCom','like','%'.$search.'%')->paginate(50);

        return view('commercials.index', compact('data', 'search'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'IdCom',
            'NomCom',
            'PreCom',
            'MailCom',
            'TelCom',
        ]);

        Commercial::create($request->all());

        return redirect()->route('commercials.index')
                        ->with('success','Commercial ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function show(Commercial $commercial)
    {
        return view('commercials.show', compact('commercial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function edit(Commercial $commercial)
    {
        return view('commercials.edit', compact('commercial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commercial $commercial)
    {
        $request->validate([
            'IdCom',
            'NomCom',
            'PreCom',
            'MailCom',
            'TelCom',
        ]);


        $commercial->update($request->all());

        return redirect()->route('commercials.index')
                        ->with('success','Commercial modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commercial $commercial)
    {
        $commercial->delete();

        return redirect()->route('commercials.index')
                        ->with('success','Commercial supprimé avec succès');
    }
}
