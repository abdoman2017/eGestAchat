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
            <form id="form_ajout_utl" class="col s12" action="{{ route('utilisateur.store') }}" method="post">
                @CSRF
                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="code_utilisateur" type="text" class="validate" name="code_utilisateur"
                        value="{{ old('code_utilisateur') }}">
                    <label for="code_utilisateur">Code Utilisateur *</label>
                    @if ($errors->get('code_utilisateur'))
                    @foreach($errors->get('code_utilisateur') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="nom_utilisateur" type="text" class="validate" name="nom_utilisateur"
                        value="{{ old('nom_utilisateur') }}">
                    <label for=" nom_utilisateur">Nom Utilisateur *</label>
                    @if ($errors->get('nom_utilisateur'))
                    @foreach($errors->get('nom_utilisateur') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="prenom_utilisateur" type="text" class="validate" name="prenom_utilisateur"
                        value="{{ old('prenom_utilisateur') }}">
                    <label for=" prenom_utilisateur">Prénom Utilisateur *</label>
                    @if ($errors->get('prenom_utilisateur'))
                    @foreach($errors->get('prenom_utilisateur') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <select id="directions" name="directions">
                        <option value="" disabled selected>Choisissez une Direction</option>
                        @foreach($liste_directions as $direction)
                        @if (old('directions') == $direction->id)
                        <option value="{{ $direction->id }}" selected>{{ $direction->libelle_dr }}</option>
                        @else
                        <option value="{{ $direction->id }}">{{ $direction->libelle_dr }}</option>
                        @endif
                        @endforeach
                    </select>
                    @if ($errors->get('directions'))
                    @foreach($errors->get('directions') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <select id="structures" name="structures">
                        <option value="" disabled selected>Choisissez une Structure</option>
                        @foreach($liste_structures as $structure)
                        @if (old('structures') == $structure->id)
                        <option value="{{ $structure->id }}" selected>{{ $structure->libelle_str }}</option>
                        @else
                        <option value="{{ $structure->id }}">{{ $structure->libelle_str }}</option>
                        @endif
                        @endforeach
                    </select>
                    @if ($errors->get('structures'))
                    @foreach($errors->get('structures') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <select name="profils">
                        <option value="" disabled selected>Choisissez un Profil</option>
                        @foreach($liste_profils as $profil)
                        @if (old('profils') == $profil->id)
                        <option value="{{ $profil->id }}" selected>{{ $profil->libelle_prf }}</option>
                        @else
                        <option value="{{ $profil->id }}">{{ $profil->libelle_prf }}</option>
                        @endif
                        @endforeach
                    </select>
                    @if ($errors->get('profils'))
                    @foreach($errors->get('profils') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif

                </div>

                <div id="option_privilege" class="input-field col s6 hauteurINPUTuser">
                    <select name="privileges">
                        <option value="" disabled selected>Choisissez un Privilège</option>
                        @foreach($liste_privileges as $privilege)
                        @if (old('privileges') == $privilege->id)
                        <option value="{{ $privilege->id }}" selected>{{ $privilege->libelle_prv }}</option>
                        @else
                        <option value="{{ $privilege->id }}">{{ $privilege->libelle_prv }}</option>
                        @endif
                        @endforeach
                    </select>
                    @if ($errors->get('privileges'))
                    @foreach($errors->get('privileges') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>

                <div id="option_etat" class="input-field col s6 hauteurINPUTuser">
                    <select name="etats">
                        <option value="" disabled selected>Choisissez un Etat Compte</option>
                        @foreach($liste_etats as $etat)
                        @if (old('etats') == $etat->id)
                        <option value="{{ $etat->id }}" selected>{{ $etat->libelle_etat }}</option>
                        @else
                        <option value="{{ $etat->id }}">{{ $etat->libelle_etat }}</option>
                        @endif
                        @endforeach
                    </select>
                    @if ($errors->get('etats'))
                    @foreach($errors->get('etats') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
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