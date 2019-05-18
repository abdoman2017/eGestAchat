@extends('layouts.side_navbar')
@section('modifier_utilisateur')
<div class="container-fluid">
    <header>
        <center>
            <h4>Modifier Utilisateur</h4>
        </center>
    </header>
    <div id="form_utl_ajout">
        <div class="row">
            <form id="form_ajout_utl" class="col s12" action="{{ url('utilisateur/'.$utilisateur->id) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                @CSRF

                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="code_utilisateur" type="text" class="validate" name="code_utilisateur"
                        value="{{ $utilisateur->code_Utl }}">
                    <label for="code_utilisateur">Code Utilisateur *</label>
                    @if ($errors->get('code_utilisateur'))
                    @foreach($errors->get('code_utilisateur') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="nom_utilisateur" type="text" class="validate" name="nom_utilisateur"
                        value="{{ $utilisateur->nom_Utl }}">
                    <label for=" nom_utilisateur">Nom Utilisateur *</label>
                    @if ($errors->get('nom_utilisateur'))
                    @foreach($errors->get('nom_utilisateur') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="prenom_utilisateur" type="text" class="validate" name="prenom_utilisateur"
                        value="{{ $utilisateur->prenom_Utl }}">
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
                        @if (old('structures') == $utilisateur->code_dr)
                        <option value="{{ $utilisateur->code_dr }}" selected>{{ $utilisateur->libelle_dr }}</option>
                        @else
                        <option value="{{ $utilisateur->code_dr }}">{{ $utilisateur->libelle_dr }}</option>
                        @endif
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
                        @if (old('structures') == $utilisateur->code_prf)
                        <option value="{{ $utilisateur->code_prf }}" selected>{{ $utilisateur->libelle_str }}
                        </option>
                        @else
                        <option value="{{ $utilisateur->code_prf }}">{{ $utilisateur->libelle_str }}</option>
                        @endif
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
                        @if (old('profils') == $utilisateur->code_prf)
                        <option value="{{ $utilisateur->code_prf  }}" selected>{{ $utilisateur->libelle_prf }}</option>
                        @else
                        <option value="{{ $utilisateur->code_prf  }}">{{ $utilisateur->libelle_prf }}</option>
                        @endif
                    </select>
                    @if ($errors->get('profils'))
                    @foreach($errors->get('profils') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif

                </div>
                <div id="switch_tous">
                    <div id="option_privilege" class="input-field col s6 hauteurINPUTuser">
                        <select name="privileges">
                            <option value="" disabled selected>Choisissez un Privilège</option>
                            @if (old('privileges') == $utilisateur->code_prv)
                            <option value="{{ $utilisateur->code_prv }}" selected>{{ $utilisateur->libelle_prv }}
                            </option>
                            @else
                            <option value="{{ $utilisateur->code_prv }}">{{ $utilisateur->libelle_prv }}</option>
                            @endif
                        </select>
                        @if ($errors->get('privileges'))
                        @foreach($errors->get('privileges') as $message)
                        <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                        @endforeach
                        @endif
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