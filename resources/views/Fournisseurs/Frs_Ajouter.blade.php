@extends('layouts.biblio_materialize')
@extends('layouts.navbar_menu_responsive')

<div class="container-fluid">

    <header>

        <center>
            <h4> NOUVEAU FOURNISSEUR </h4>
        </center>

    </header>


    <div id="form_frs_ajout">
        <div class="row">
            <form class="col s12">


                <div class="input-field col s6">
                    <input id="nom_frs" type="text" class="validate" name="nom_frs">
                    <label for="nom_frs">Nom Fournisseur</label>
                </div>



                <div class="input-field col s6">
                    <input id="abv_frs" type="text" class="validate" name="abv_frs">
                    <label for="abv_frs">Abréviation Fournisseur</label>
                </div>


                <div class="input-field col s6">
                    <input id="adr_frs" type="text" class="validate" name="adr_frs">
                    <label for="adr_frs">Adresse Fournisseur</label>
                </div>

                <div class="input-field col s6">
                    <input id="cpt_frs" type="text" class="validate" name="cpt_frs">
                    <label for="cpt_frs">N° Compte</label>
                </div>

                <div class="input-field col s6">
                    <input id="tel_frs" type="text" class="validate" name="tel_frs">
                    <label for="tel_frs">N° Téléphone</label>
                </div>

                <div class="input-field col s6">
                    <input id="fax_frs" type="text" class="validate" name="fax_frs">
                    <label for="fax_frs">N° Fax</label>
                </div>

                <div class="input-field col s12">
                    <input id="mail_frs" type="text" class="validate" name="mail_frs">
                    <label for="mail_frs">Mail</label>
                </div>

                <div id="btn_frs_ajout">

                    <div id="enrg_frs_ajout">

                        <a class="waves-effect waves-light btn">Enregistrer</a>

                    </div>
                    <div id="anl_frs_ajout">

                        <a class="waves-effect waves-light btn">Annuler</a>

                    </div>

                </div>


            </form>
        </div>

    </div>
</div>