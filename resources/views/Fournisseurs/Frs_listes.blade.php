@extends('layouts.side_navbar')
@section('liste_fournisseur')
<style>
main {
    padding-left: 245px;
}
</style>
<main>
    <h3>Liste des Fournisseurs</h3>
    <table class="highlight">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>N° Compte</th>
                <th>N° Tél</th>
                <th>N° Fax</th>
                <th>Email</th>
                <th>Actions</th>
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
                    <i class="fas fa-user-plus couleur_vert"></i>
                    <i class="fas fa-pen couleur_bleu"></i>
                    <i class="far fa-trash-alt couleur_rouge"></i>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</main>
@endsection