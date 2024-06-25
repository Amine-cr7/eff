@extends('app')
@section('content')
    <h1>Liste Voitures</h1>
    <a href="/voitures/create" class="btn form-control btn-dark">Ajouter Nouvelle Voiture</a>
    <table class="table table-striped mt-3">
        <tr>
            <td>matricule</td>
            <td>marque</td>
            <td>couleur</td>
            <td>dateMiseEnCirculation</td>
            <td>Supprimer</td>
        </tr>
        @foreach ($voitures as $voiture)
            <tr>
                <th>{{ $voiture->matricule }}</th>
                <th>{{ $voiture->marque }}</th>
                <th>{{ $voiture->couleur }}</th>
                <th>{{ $voiture->dateMiseEnCirculation }}</th>
                <th>
                    <form action="/voitures/{{ $voiture->matricule }}" method="post">
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Supprimer</button>
                        @csrf
                    </form>
                </th>
            </tr>
        @endforeach
    </table>
@endsection