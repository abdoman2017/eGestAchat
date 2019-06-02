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
                            <form action="{{ url('/login_v') }}" method="post">
                                @csrf
                                <div class="input-field">
                                    <i class="fas fa-user-circle prefix"></i>
                                    @if(!empty($codeuser))
                                    <input id="username" type="text" class="validate" name="username"
                                        value="{{ $codeuser }}">
                                    @else
                                    <input id="username" type="text" class="validate" name="username"
                                        value="{{ old('username') }}">
                                    @endif
                                    <label for="username">Nom Utilisateur</label>
                                    @if ($errors->get('username'))
                                    @foreach($errors->get('username') as $message)
                                    <span style="color: red;" class="helper-text"
                                        data-error="wrong">{{ $message }}</span>
                                    @endforeach
                                    @endif
                                </div><br>


                                <div class="input-field">
                                    <i class="fas fa-unlock-alt prefix"></i>
                                    <input type="password" id="password" class="validate" name="password">
                                    <label for="password">Mot de Passe</label>
                                    @if ($errors->get('password'))
                                    @foreach($errors->get('password') as $message)
                                    <span style="color: red;" class="helper-text"
                                        data-error="wrong">{{ $message }}</span>
                                    @endforeach
                                    @endif
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