<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Http\Controllers\Controller;
use App\Http\Requests\fournisseurRequest;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index()
    {
        $listeFrs = Fournisseur::all();
        return view('Fournisseurs.Frs_listes', ['fournisseurs' => $listeFrs]);

    }

    public function create()
    {
        return view('Fournisseurs.Frs_Ajouter');
    }

    public function store(fournisseurRequest $request)
    {
        $fournisseur = new Fournisseur();
        $fournisseur->nom = $request->input('nom_frs');
        $fournisseur->abreviation = $request->input('abv_frs');
        $fournisseur->adresse = $request->input('adr_frs');
        $fournisseur->numero_compte = $request->input('cpt_frs');
        $fournisseur->numero_tel = $request->input('tel_frs');
        $fournisseur->numero_fax = $request->input('fax_frs');
        $fournisseur->email = $request->input('mail_frs');
        $fournisseur->save();
        return redirect()->route('fournisseurs.index');
    }

    public function edit($id)
    {
        $fournisseur = Fournisseur::find($id);
        return view('Fournisseurs.Frs_Modifier', ['fournisseur' => $fournisseur]);
    }
    public function update(fournisseurRequest $request, $id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->nom = $request->input('nom_frs');
        $fournisseur->abreviation = $request->input('abv_frs');
        $fournisseur->adresse = $request->input('adr_frs');
        $fournisseur->numero_compte = $request->input('cpt_frs');
        $fournisseur->numero_tel = $request->input('tel_frs');
        $fournisseur->numero_fax = $request->input('fax_frs');
        $fournisseur->email = $request->input('mail_frs');
        $fournisseur->save();
        return redirect()->route('fournisseurs.index');
    }
    public function destroy(Request $request, $id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();
        return redirect()->route('fournisseurs.index');
    }

}