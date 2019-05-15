<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use DB;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {}

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
        $utilisateur->code_Utl = $request->input('code_utilisateur');
        $utilisateur->nom_Utl = $request->input('nom_utilisateur');
        $utilisateur->prenom_Utl = $request->input('prenom_utilisateur');
        $utilisateur->etat_Utl = $request->input('etat_compte');
        $utilisateur->direction_code_dr = $request->get('directions');
        $utilisateur->structure_code_str = $request->get('structures');
        $utilisateur->privilege_code_prv = $request->get('privileges');
        $utilisateur->profil_code_prf = $request->get('profils');
        $utilisateur->save();
        return redirect()->route('utilisateurs.index');
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