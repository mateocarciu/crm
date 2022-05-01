<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use Illuminate\Http\Request;
use DB;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Prospect::latest()->paginate(5);

        return view('prospects.index', compact('data'))
            ->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prospects.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('prospects')->where('IdPro','like','%'.$search.'%')->paginate(50);

        return view('prospects.index', compact('data', 'search'))
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
            'IdPro',
            'NomPro',
            'PrePro',
            'AdrPro',
            'CpPro',
            'VillePro',
            'MailPro',
            'TelPro',
        ]);

        Prospect::create($request->all());

        return redirect()->route('prospects.index')
                        ->with('success','Prospect ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function show(Prospect $prospect)
    {
        return view('prospects.show', compact('prospect'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospect $prospect)
    {
        return view('prospects.edit', compact('prospect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospect $prospect)
    {
        $request->validate([
            'IdPro',
            'NomPro',
            'PrePro',
            'AdrPro',
            'CpPro',
            'VillePro',
            'MailPro',
            'TelPro',
        ]);


        $prospect->update($request->all());

        return redirect()->route('prospects.index')
                        ->with('success','Prospect modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospect $prospect)
    {
        $prospect->delete();

        return redirect()->route('prospects.index')
                        ->with('success','Prospect supprimé avec succès');
    }
}
