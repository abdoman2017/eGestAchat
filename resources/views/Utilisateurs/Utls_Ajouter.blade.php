@extends('layouts.side_navbar')
@section('ajouter_utilisateur')
<div class="container-fluid">
    <header>
        <center>
            <h4>Nouveau Utilisateur</h4>
        </center>
    </header>
    <div id="form_utl_ajout">
        <div class="row">
            <form id="form_ajout_utl" class="col s12" action="{{ url('utilisateur') }}" method="post">
                @CSRF

                <div class="input-field col s6">
                    <input id="code_utilisateur" type="text" class="validate" name="code_utilisateur"
                        value="{{ old('code_utilisateur') }}">
                    <label for="code_utilisateur">Code Utilisateur *</label>
                    @if ($errors->get('code_utilisateur'))
                    @foreach($errors->get('code_utilisateur') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6">
                    <input id="nom_utilisateur" type="text" class="validate" name="nom_utilisateur"
                        value="{{ old('nom_utilisateur') }}">
                    <label for=" nom_utilisateur">Nom Utilisateur *</label>
                    @if ($errors->get('nom_utilisateur'))
                    @foreach($errors->get('nom_utilisateur') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6">
                    <input id="prenom_utilisateur" type="text" class="validate" name="prenom_utilisateur"
                        value="{{ old('prenom_utilisateur') }}">
                    <label for=" prenom_utilisateur">Prénom Utilisateur *</label>
                    @if ($errors->get('prenom_utilisateur'))
                    @foreach($errors->get('prenom_utilisateur') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6">
                    <select id="directions" name="directions">
                        <option value="" disabled selected>Choisissez une Direction</option>
                        @foreach($liste_directions as $direction)
                        <option value="{{ $direction->code_dr }}">{{ $direction->libelle_dr }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-field col s6">
                    <select id="structures" name="structures">
                        <option value="" disabled selected>Choisissez une Structure</option>
                        @foreach($liste_structures as $structure)
                        <option value="{{ $structure->code_str }}">{{ $structure->libelle_str }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="input-field col s6">
                    <select name="profils">
                        <option value="" disabled selected>Choisissez un Profil</option>
                        @foreach($liste_profils as $profil)
                        <option value="{{ $profil->code_prf }}">{{ $profil->libelle_prf }}</option>
                        @endforeach
                    </select>

                </div>
                <div id="switch_tous">
                    <div id="option_privilege" class="input-field col s6">
                        <select name="privileges">
                            <option value="" disabled selected>Choisissez un Privilège</option>
                            @foreach($liste_privileges as $privilege)
                            <option value="{{ $privilege->code_prv }}">{{ $privilege->libelle_prv }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div id="switch_div">
                        <div id="switch_label">
                            <label>Etat Compte:</label>
                        </div>
                        <div id="switch_etat">
                            <div class="switch">
                                <label>
                                    Désactivé
                                    <input id="etat_compte" type="checkbox" name="etat_compte" checked value="1">

                                    <span class="lever"></span>
                                    Activé
                                </label>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="btn_frs_ajout">

                    <div id="enrg_frs_ajout">

                        <a class="waves-effect waves-light btn"
                            onclick="document.getElementById('form_ajout_utl').submit();">Enregistrer</a>

                    </div>
                    <div id="anl_frs_ajout">

                        <a href="{{route('utilisateurs.index')}}" class="waves-effect waves-light btn">Annuler</a>

                    </div>

                </div>


            </form>
        </div>

    </div>
    <footer>
        <center>

            <sub>Les champs suivis d'une étoile sont obligatoires</sub>

        </center>
    </footer>
</div>
@endsection