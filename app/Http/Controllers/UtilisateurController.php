<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use Illuminate\Http\Request;
use DB;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $liste_direction = DB::table('directions')->get();
        $liste_structure = DB::table('structures')->get();
        $liste_profil = DB::table('profils')->get();
        $liste_privilege = DB::table('privileges')->get();
        return view('Utilisateurs.Utls_Ajouter', ['liste_directions' => $liste_direction, 'liste_structures' => $liste_structure, 'liste_profils' => $liste_profil, 'liste_privileges' => $liste_privilege]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utilisateur = new Utilisateur();
        $utilisateur->code_Utl = $request->input('nom_frs');
        $utilisateur->nom_Utl = $request->input('abv_frs');
        $utilisateur->prenom_Utl = $request->input('adr_frs');
        $utilisateur->etat_Utl = $request->input('cpt_frs');
        $utilisateur->numero_tel = $request->input('tel_frs');
        $utilisateur->numero_fax = $request->input('fax_frs');
        $utilisateur->email = $request->input('mail_frs');
        $utilisateur->save();
        return redirect()->route('fournisseurs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $utilisateur)
    {
        //
    }
}