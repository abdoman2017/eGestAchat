@extends('layouts.side_navbar')
@section('modifier_fournisseur')
<div class="container-fluid">
    <header>
        <center>
            <h4>Modifier Fournisseur</h4>
        </center>
    </header>

    @if ($errors->any())
    <div class="msg msg-error z-depth-3 scale-transition">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
    @endif

    <div id="form_frs_ajout">
        <div class="row">
            <form id="form_ajout_frs" class="col s12" action="{{url('fournisseur/'.$fournisseur->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                @CSRF

                <div class="input-field col s6">
                    <input id="nom_frs" type="text" class="validate" name="nom_frs" value="{{ $fournisseur->nom }}">
                    <label for="nom_frs">Nom Fournisseur *</label>
                </div>


                <div class="input-field col s6">
                    <input id="abv_frs" type="text" class="validate" name="abv_frs"
                        value="{{ $fournisseur->abreviation }}">
                    <label for=" abv_frs">Abréviation Fournisseur</label>
                </div>


                <div class="input-field col s6">
                    <input id="adr_frs" type="text" class="validate" name="adr_frs" value="{{ $fournisseur->adresse }}">
                    <label for="adr_frs">Adresse Fournisseur *</label>
                </div>

                <div class="input-field col s6">
                    <input id="cpt_frs" type="text" class="validate" name="cpt_frs"
                        value="{{ $fournisseur->numero_compte }}">
                    <label for=" cpt_frs">N° Compte</label>
                </div>

                <div class="input-field col s6">
                    <input id="tel_frs" type="text" class="validate" name="tel_frs"
                        value="{{ $fournisseur->numero_tel }}">
                    <label for=" tel_frs">N° Téléphone *</label>
                </div>

                <div class="input-field col s6">
                    <input id="fax_frs" type="text" class="validate" name="fax_frs"
                        value="{{ $fournisseur->numero_fax }}">
                    <label for=" fax_frs">N° Fax</label>
                </div>

                <div class="input-field col s12">
                    <input id="mail_frs" type="email" class="validate" name="mail_frs"
                        value="{{ $fournisseur->email }}">
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