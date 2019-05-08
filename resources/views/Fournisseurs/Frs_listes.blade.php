@extends('layouts.side_navbar')
@section('liste_fournisseur')

<main>

    <h3>Liste des Fournisseurs</h3>

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
                <th>Nom</th>
                <th>Adresse</th>
                <th>N° Compte</th>
                <th>N° Tél</th>
                <th>N° Fax</th>
                <th>Email</th>
                <th>Actions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('fournisseurs.create')}}"><i
                            class="fas fa-user-plus couleur_vert" role="button"></i></a></th>
            </tr>
        </thead>

        <tbody>
            @foreach($fournisseurs as $fournisseur)
            <tr>
                <td>{{ $fournisseur->nom }}</td>
                <td>{{ $fournisseur->adresse }}</td>
                <td>{{ $fournisseur->numero_compte }}</td>
                <td>{{ $fournisseur->numero_tel }}</td>
                <td>{{ $fournisseur->numero_fax }}</td>
                <td>{{ $fournisseur->email }}</td>
                <td>

                    <form action="{{ url('fournisseur/'.$fournisseur->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="{{ url('fournisseur/'.$fournisseur->id.'/edit') }}"> <i class="fas fa-pen couleur_bleu"
                                role="button"></i></a>&nbsp;&nbsp;
                        <button type="submit" class="far fa-trash-alt couleur_rouge" role="link"
                            style="background: none; border: none;"></button>
                    </form>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    <div style="float:right;">{{$fournisseurs->links()}}</div>

</main>
@endsection