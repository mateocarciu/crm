<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Prospect;
use App\Models\Commercial;
use App\Models\Rendez_vous;
use Illuminate\Http\Request;
use DB;

class Rendez_vousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rendez_vous::latest()->paginate(5);

        return view('rendezvous.index', compact('data'))
            ->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        $prospect = Prospect::all();
        $commercial = Commercial::all();

        return view('rendezvous.create', compact('client', 'prospect', 'commercial'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('rendez_vous')->where('IdRdv','like','%'.$search.'%')->paginate(50);

        return view('rendezvous.index', compact('data', 'search'))
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
            'IdRdv',
            'DateRdv',
            'IdCli',
            'IdPro',
            'IdCom',
        ]);

        Rendez_vous::create($request->all());

        return redirect()->route('rendezvous.index')
                        ->with('success','Rendez-vous ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rendez_vous  $rendez_vous
     * @return \Illuminate\Http\Response
     */
    public function show(Rendez_vous $rendez_vous)
    {
        $client = Client::all();
        $prospect = Prospect::all();
        $commercial = Commercial::all();

        return view('rendezvous.show', compact('rendez_vous', 'client', 'prospect', 'commercial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rendez_vous  $rendez_vous
     * @return \Illuminate\Http\Response
     */
    public function edit(Rendez_vous $rendez_vous)
    {
        $rendez_vous = Rendez_vous::all();
        $client = Client::all();
        $prospect = Prospect::all();
        $commercial = Commercial::all();

        return view('rendezvous.edit', compact('rendez_vous', 'client', 'prospect', 'commercial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rendez_vous  $rendez_vous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rendez_vous $rendez_vous)
    {
        $request->validate([
            'IdRdv',
            'DateRdv',
            'IdCli',
            'IdPro',
            'IdCom',
        ]);


        $rendez_vous->update($request->all());

        return redirect()->route('rendezvous.index')
                        ->with('success','Rendez-vous modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rendez_vous  $rendez_vous
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rendez_vous $rendez_vous)
    {
        
        $rendez_vous->delete();

        return redirect()->route('rendezvous.index')
                        ->with('success','Rendez-vous supprimé avec succès');
    }
}
