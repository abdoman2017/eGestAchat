@extends('layouts.side_navbar')
@section('reinitialiser_mp_utilisateur')
<div class="container-fluid">
    <header>
        <center>
            <h4>Réinitialiser Mot de Passe</h4>
        </center>
    </header>
    <div id="form_utl_reinitialiser">
        <div class="row">
            <form id="form_reinitialiser_utl" class="col s12" action="{{ url('utilisateur_r/'.$utilisateur->id) }}"
                method="post">
                <input type="hidden" name="_method" value="PUT">
                @CSRF
                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="reset_utl_nom" type="text" class="validate" name="reset_utl_nom"
                        value="{{ $utilisateur->nom_Utl }}" disabled>
                    <label for="reset_utl_nom">Nom Utilisateur</label>
                    @if ($errors->get('reset_utl_nom'))
                    @foreach($errors->get('reset_utl_nom') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="reset_utl_prenom" type="text" class="validate" name="reset_utl_prenom"
                        value="{{ $utilisateur->prenom_Utl }}" disabled>
                    <label for="reset_utl_prenom">Prénom Utilisateur</label>
                    @if ($errors->get('reset_utl_prenom'))
                    @foreach($errors->get('reset_utl_prenom') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="password" type="password" class="validate" name="password" value="">
                    <label for="password">Nouveau Mot de Passe</label>
                    @if ($errors->get('password'))
                    @foreach($errors->get('password') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="input-field col s6 hauteurINPUTuser">
                    <input id="password_confirmation" type="password" class="validate" name="password_confirmation"
                        value="">
                    <label for="password_confirmation">Confirmer le Mot de Passe</label>
                    @if ($errors->get('password_confirmation'))
                    @foreach($errors->get('password_confirmation') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>
                <div id="btn_frs_ajout">

                    <div id="enrg_frs_ajout">

                        <a class="waves-effect waves-light btn"
                            onclick="document.getElementById('form_reinitialiser_utl').submit();">Enregistrer</a>

                    </div>
                    <div id="anl_frs_ajout">

                        <a href="{{route('utilisateurs.index')}}" class="waves-effect waves-light btn">Annuler</a>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection