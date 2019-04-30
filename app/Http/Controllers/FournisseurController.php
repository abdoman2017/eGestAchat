<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index()
    {
        return view('Fournisseurs.Frs_Ajouter');
    }

    public function create()
    {

    }

    public function store(Request $request)
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
    }

    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }

}
