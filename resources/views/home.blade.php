@extends('app')
@section('content')
    <h1>Liste Salaries</h1>
    <a href="/salaries/create" class="btn form-control btn-dark">Ajouter Nouvelle Salarie</a>
    <table class="table table-striped mt-3">
        <tr>
            <td>code</td>
            <td>nom</td>
            <td>prenom</td>
            <td>service</td>
            <td>nombre Voitures</td>
            <td>rechercher Details Voiture</td>
        </tr>
        @foreach ($salaries as $salarie)
            <tr>
                <th>{{ $salarie->codeSal }}</th>
                <th>{{ $salarie->nomSal }}</th>
                <th>{{ $salarie->prenomSal }}</th>
                <th>{{ $salarie->service->nomSer }}</th>
                <th>{{ count($salarie->voitures) }}</th>
                <th><a href="/salaries/{{ $salarie->codeSal }}" class="btn btn-dark">Voir Details</a></th>
            </tr>
        @endforeach
    </table>
@endsection