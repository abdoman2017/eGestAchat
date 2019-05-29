<!DOCTYPE html>
<html lang="en" id="html_login">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar_menu_responsive/navbar_menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar_menu_responsive/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">
    <script src="{{ asset('js/materialize_0.100/materialize.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
</head>

<body id="body_login">
    <div class="container-fluid" id="login">
        <div id="sous_login">
            <div class="row">
                <div class="col s12 m4 offset-m4" id="frm_login">
                    <div class="card">
                        <div class="card-action teal lighten-2 white-text">
                            <center>
                                <h3>Authentification</h3>
                            </center>
                        </div>
                        <div class="card-content">
                            <form action="{{ route('utilisateur.store') }}" method="post">

                                <div class="input-field">
                                    <i class="fas fa-user-circle prefix"></i>
                                    <input id="username" type="text" class="validate">
                                    <label for="username">Nom Utilisateur</label>
                                </div><br>


                                <div class="input-field">
                                    <i class="fas fa-unlock-alt prefix"></i>
                                    <input type="password" id="password" class="validate">
                                    <label for="password">Mot de Passe</label>
                                </div><br>


                                <div class="form-field">
                                    <p>
                                        <label>
                                            <input type="checkbox" />
                                            <span>Garder ma session ouverte</span>
                                        </label>
                                    </p>
                                </div><br>
                                <div class="form-field">
                                    <button class="btn-large waves-effect waves-dark" style="width:100%;"
                                        type="submit">Connexion</button>
                                </div><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/Mon_JS.js') }}"></script>
</body>

</html>