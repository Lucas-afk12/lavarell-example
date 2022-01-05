@extends('layout')

@section('title')

<h1>Lista de paises:</h1>

@endsection

@section('list')
<div style="text-align: center;">
<table class="table table-dark table-hover" style="text-align: center;">
    <thead  class="thead-light">
    <th>Nombre</th>
    <th>Continente</th>
    <th>Region</th>
    <th>Superficie</th>
    <th>Poblacion</th>
    <th>Esperanza De vida</th>
    <th>FormaDeGobierno</th>
    </thead>
@foreach($countrys1 as $value => $country)
    <tr>
        <td><a href="/city/{{$country->Code}}" class="code">{{$country->Name}}</td>
        <td><a href="/country/continent/{{$country->Continent}}" class="code">{{$country->Continent}}</td>
        <td>{{$country->Region}}</td>
        <td>{{$country->SurfaceArea}}</td>
        <td>{{$country->Population}}</td>
        <td>{{$country->LifeExpectancy}}</td>
        <td>{{$country->GovernmentForm}}</td>
    </tr>
@endforeach
</table>
{{ $countrys1->links() }}
</div>
@endsection