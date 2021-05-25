@extends('layouts.layout')

@section('titrePage')
    Liste des dessinateurs
@endsection

@section('titreItem')
    <h1>Tous les dessinateurs :</h1>
@endsection

@section('contenu')
    <table>
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
        </thead>
        @foreach($dessinateurs as $dessinateur)
            <tr>
                <td> {{ $dessinateur->id_dessinateur }} </td>
                <td> {{ $dessinateur->nom_dessinateur }} </td>
                <td> {{ $dessinateur->prenom_dessinateur }} </td>
            </tr>
        @endforeach
    </table>
@endsection