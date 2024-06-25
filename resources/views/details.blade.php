@extends('app')
@section('content')
    <h1>Afficher des voitures utiliser par salarie {{ $salarie->codeSal }}</h1>
    <table class="table table-striped">
        <tr>
            <th>matricule</th>
            <th>marque</th>
            <th>couleur</th>
            <th>date debut</th>
            <th>date fin</th>
        </tr>
        @foreach ($voitures as $voiture)
            <tr>
                <th>{{ $voiture->matricule }}</th>
                <th>{{ $voiture->marque }}</th>
                <th>{{ $voiture->couleur }}</th>
                <th>{{ $voiture->pivot->dateDebutUtilisation }}</th>
                <th>{{ $voiture->pivot->dateFinUtilisation }}</th>
            </tr>
        @endforeach
    </table>
@endsection