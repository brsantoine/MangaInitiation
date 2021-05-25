@extends('layouts.layout')

@section('titrePage')
    Liste des scénaristes
@endsection

@section('titreItem')
    <h1>Tous les scénaristes :</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
        </thead>
        @foreach($scenaristes as $scenariste)
            <tr>
                <td> {{ $scenariste->id_scenariste }} </td>
                <td> {{ $scenariste->nom_scenariste }} </td>
                <td> {{ $scenariste->prenom_scenariste }} </td>
            </tr>
        @endforeach
    </table>
@endsection