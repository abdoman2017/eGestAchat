<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Http\Controllers\Controller;
use App\Http\Requests\FournisseurRequest;
use Illuminate\Http\Request;
use Session;

class FournisseurController extends Controller
{
    public function index()
    {
        $recherche = request('recherche');
        $listeFrs = Fournisseur::rechercher($recherche)->paginate(6);
        return view('Fournisseurs.Frs_listes', ['fournisseurs' => $listeFrs]);
    }

    public function create()
    {
        return view('Fournisseurs.Frs_Ajouter');
    }

    public function store(FournisseurRequest $request)
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
        Session::flash('success', 'le fournisseur a été ajouté avec succès!');
        return redirect()->route('fournisseurs.index');
    }

    public function edit($id)
    {
        $fournisseur = Fournisseur::find($id);
        return view('Fournisseurs.Frs_Modifier', ['fournisseur' => $fournisseur]);
    }
    public function update(FournisseurRequest $request, $id)
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
        Session::flash('success', 'le fournisseur a été modifié avec succès!');
        return redirect()->route('fournisseurs.index');
    }
    public function destroy(Request $request, $id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();
        Session::flash('success', 'le fournisseur a été supprimé avec succès!');
        return redirect()->route('fournisseurs.index');
    }
}