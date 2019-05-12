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
            <form id="form_ajout_utl" class="col s12" action="{{ url('fournisseur') }}" method="post">
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
                    <select>
                        <option value="" disabled selected>Choisissez une Direction</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>

                </div>
                <div class="input-field col s6">
                    <select>
                        <option value="" disabled selected>Choisissez une Structure</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>

                </div>
                <div class="input-field col s6">
                    <select>
                        <option value="" disabled selected>Choisissez un Profil</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>

                </div>
                <div id="switch_tous">
                    <div id="option_privilege" class="input-field col s6">
                        <select>
                            <option value="" disabled selected>Choisissez un Privilège</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
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
                                    <input type="checkbox" checked>
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

                        <a href="{{route('fournisseurs.index')}}" class="waves-effect waves-light btn">Annuler</a>

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