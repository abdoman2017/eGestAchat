@extends('layouts.side_navbar')
@section('ajouter_fournisseur')
<div class="container-fluid">
    <header>
        <center>
            <h4>Nouveau Fournisseur</h4>
        </center>
    </header>




    <div id="form_frs_ajout">
        <div class="row">
            <form id="form_ajout_frs" class="col s12" action="{{ url('fournisseur') }}" method="post">
                @CSRF

                <div class="input-field col s6 hauteurINPUT">
                    <input id="nom_frs" type="text" class="validate" name="nom_frs" value="{{ old('nom_frs') }}">
                    <label for="nom_frs">Nom Fournisseur *</label>

                    @if ($errors->get('nom_frs'))
                    @foreach($errors->get('nom_frs') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>


                <div class="input-field col s6">
                    <input id="abv_frs" type="text" class="validate" name="abv_frs" value="{{ old('abv_frs') }}">
                    <label for=" abv_frs">Abréviation Fournisseur</label>
                </div>


                <div class="input-field col s6 hauteurINPUT">
                    <input id="adr_frs" type="text" class="validate" name="adr_frs" value="{{ old('adr_frs') }}">
                    <label for=" adr_frs">Adresse Fournisseur *</label>
                    @if ($errors->get('adr_frs'))
                    @foreach($errors->get('adr_frs') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>

                <div class="input-field col s6">
                    <input id="cpt_frs" type="text" class="validate" name="cpt_frs" value="{{ old('cpt_frs') }}">
                    <label for=" cpt_frs">N° Compte</label>
                </div>

                <div class="input-field col s6 hauteurINPUT">
                    <input id="tel_frs" type="text" class="validate" name="tel_frs" value="{{ old('tel_frs') }}">
                    <label for=" tel_frs">N° Téléphone *</label>
                    @if ($errors->get('tel_frs'))
                    @foreach($errors->get('tel_frs') as $message)
                    <span style="color: red;" class="helper-text" data-error="wrong">{{ $message }}</span>
                    @endforeach
                    @endif
                </div>

                <div class="input-field col s6">
                    <input id="fax_frs" type="text" class="validate" name="fax_frs" value="{{ old('fax_frs') }}">
                    <label for=" fax_frs">N° Fax</label>
                </div>

                <div class="input-field col s12">
                    <input id="mail_frs" type="email" class="validate" name="mail_frs" value="{{ old('mail_frs') }}">
                    <label for=" mail_frs">Mail</label>
                </div>

                <div id="btn_frs_ajout">

                    <div id="enrg_frs_ajout">

                        <a class="waves-effect waves-light btn"
                            onclick="document.getElementById('form_ajout_frs').submit();">Enregistrer</a>

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