<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Models\Client;
use App\Models\Produit;
use Illuminate\Http\Request;
use DB;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Achat::latest()->paginate(5);

        return view('achats.index', compact('data'))
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
        $produit = Produit::all();

        return view('achats.create', compact('client', 'produit'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('achats')->where('IdAchat','like','%'.$search.'%')->paginate(50);

        return view('achats.index', compact('data', 'search'))
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
            'IdAchat',
            'IdCli',
            'IdProd',
            'Qte',
        ]);

        Achat::create($request->all());

        return redirect()->route('achats.index')
                        ->with('success','Achat ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function show(Achat $achat)
    {
        $client = Client::all();
        $produit = Produit::all();

        return view('achats.show', compact('achat', 'client', 'produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function edit(Achat $achat)
    {
        $client = Client::all();
        $produit = Produit::all();

        return view('achats.edit', compact('achat', 'client', 'produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achat $achat)
    {
        $request->validate([
            'IdAchat',
            'IdCli',
            'IdProd',
            'Qte',
        ]);


        $achat->update($request->all());

        return redirect()->route('achats.index')
                        ->with('success','Achat modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achat $achat)
    {
        $achat->delete();

        return redirect()->route('achats.index')
                        ->with('success','Achat supprimé avec succès');
    }
}
