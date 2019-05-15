@extends('layouts.side_navbar')
@section('Liste_utilisateurs')

<main>

    <h3>Liste des Utilisateurs</h3>

    <form action="">
        @csrf

        <div id="form_recherche">
            <div id="champ_recherche">
                <div class="input-field col s3">
                    <input type="text" id="input_recherche" class="validate" name="recherche"
                        value="{{ request('recherche')}}">
                    <label for=" autocomplete-input">Rechercher</label>
                </div>
            </div>
            <div id="boutton_recherche">
                <button class="btn btn-warning"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>



    <table class="highlight">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Direction</th>
                <th>Structure</th>
                <th>Privilève</th>
                <th>Profil</th>
                <th>Actions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('utilisateurs.create')}}"><i
                            class="fas fa-user-plus couleur_vert" role="button"></i></a></th>
            </tr>
        </thead>

        <tbody>
            @foreach($utilisateurs as $utilisateur)
            <tr>
                <td>{{ $utilisateur->code_Utl }}</td>
                <td>{{ $utilisateur->nom_Utl}}</td>
                <td>{{ $utilisateur->prenom_Utl }}</td>
                <td>{{ $utilisateur->direction_code_dr }}</td>
                <td>{{ $utilisateur->structure_code_str }}</td>
                <td>{{ $utilisateur->privilege_code_prv }}</td>
                <td>{{ $utilisateur->profil_code_prf }}</td>
                <td>

                    <form action="{{ url('utilisateur/'.$utilisateur->code_Utl) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="{{ url('utilisateur/'.$utilisateur->code_Utl.'/edit') }}"> <i
                                class="fas fa-pen couleur_bleu" role="button"></i></a>&nbsp;&nbsp;
                        <button type="submit" class="far fa-trash-alt couleur_rouge" role="link"
                            style="background: none; border: none;"></button>
                    </form>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    <div style="float:right;">{{$utilisateurs->links()}}</div>

</main>
@endsection