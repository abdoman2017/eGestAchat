<?php

namespace App\Http\Controllers;

use App\Http\Requests\UtilisateurRequest;
use App\Utilisateur;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Session;

class UtilisateurController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recherche = request('recherche');
        $listeUtls = Utilisateur::rechercher($recherche)->paginate(6);
        return view('Utilisateurs.Utls_Listes', ['utilisateurs' => $listeUtls]);
    }

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
        $liste_etat = DB::table('etats')->get();
        return view('Utilisateurs.Utls_Ajouter', ['liste_directions' => $liste_direction, 'liste_structures' => $liste_structure, 'liste_profils' => $liste_profil, 'liste_privileges' => $liste_privilege, 'liste_etats' => $liste_etat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UtilisateurRequest $request)
    {
        $request->validate([
            'password' => 'required|min:5|confirmed',
        ]);
        $utilisateur = new Utilisateur();
        $utilisateur->code_Utl = $request->input('code_utilisateur');
        $utilisateur->nom_Utl = $request->input('nom_utilisateur');
        $utilisateur->prenom_Utl = $request->input('prenom_utilisateur');
        $utilisateur->mot_passe = Hash::make($request->input('password'));
        $utilisateur->etat_id = $request->get('etats');
        $utilisateur->direction_id = $request->get('directions');
        $utilisateur->structure_id = $request->get('structures');
        $utilisateur->privilege_id = $request->get('privileges');
        $utilisateur->profil_id = $request->get('profils');
        $utilisateur->save();
        Session::flash('success', 'le compte a été crée avec succès!');
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
    public function edit($id)
    {
        $utilisateur = Utilisateur::trouver($id)->first();
        $liste_direction = DB::table('directions')->get();
        $liste_structure = DB::table('structures')->get();
        $liste_profil = DB::table('profils')->get();
        $liste_privilege = DB::table('privileges')->get();
        $liste_etat = DB::table('etats')->get();
        return view('Utilisateurs.Utls_Modifier', ['utilisateur' => $utilisateur, 'liste_directions' => $liste_direction, 'liste_structures' => $liste_structure, 'liste_profils' => $liste_profil, 'liste_privileges' => $liste_privilege, 'liste_etats' => $liste_etat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(UtilisateurRequest $request, $id)
    {

        $utilisateur = Utilisateur::find($id);

        $utilisateur->code_Utl = $request->input('code_utilisateur');
        $utilisateur->nom_Utl = $request->input('nom_utilisateur');
        $utilisateur->prenom_Utl = $request->input('prenom_utilisateur');
        $utilisateur->etat_id = $request->get('etats');
        $utilisateur->direction_id = $request->get('directions');
        $utilisateur->structure_id = $request->get('structures');
        $utilisateur->privilege_id = $request->get('privileges');
        $utilisateur->profil_id = $request->get('profils');
        $utilisateur->save();
        Session::flash('success', 'le compte a été modifié avec succès!');
        return redirect()->route('utilisateurs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->delete();
        Session::flash('success', 'le compte a été supprimé avec succès!');
        return redirect()->route('utilisateurs.index');
    }
    public function reset($id)
    {
        $utilisateur = Utilisateur::trouver($id)->first();
        return view('Utilisateurs.Utls_Reinitialiser_MP', ['utilisateur' => $utilisateur]);
    }
    public function reset_save(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:5|confirmed',
        ]);
        $utilisateur = Utilisateur::find($id);
        $utilisateur->mot_passe = Hash::make($request->input('password'));
        $utilisateur->save();
        Session::flash('success', 'le mot de passe a été réinitialisé avec succès!');
        return redirect()->route('utilisateurs.index');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:utilisateurs,code_Utl',
        ]);
        $current_password = $request->input('password');
        $codeuser = $request->input('username');
        $pass = Utilisateur::verifie($codeuser)->first();
        if (Hash::check($current_password, $pass->mot_passe)) {

            return redirect()->route('accueil');
        } else {

            $errors = new MessageBag;
            $errors->add(
                'password',
                'Le mot de passe est incorrecte'
            );

            return view('login.login', ['codeuser' => $codeuser])->withErrors($errors);
        }
    }
    public function accueil()
    {
        return view('layouts.side_navbar');
    }
    public function identification()
    {
        return view('login.login');
    }
}