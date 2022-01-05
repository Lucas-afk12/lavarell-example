@extends('layout')

@section('title')

<h1>Lista de ciudades:</h1>

@endsection

@section('list')
<div style="text-align: center;">
<table class="table table-dark table-hover">
<thead class="thead-dark">
    <th scope="col"><b>Nombre</b></th>
    <th scope="col"><b>CodPais</b></th>
    <th scope="col"><b>Distrito</b></th>
    <th scope="col"><b>Poblacion</b></th>
</thead>
@foreach($ciudades as $ciudad)
<tr>
    <td >{{ $ciudad->Name }}<a></td>
    <td><a href="/country/{{$ciudad->CountryCode}}" class="code">{{ $ciudad->CountryCode }}</td>
    <td>{{ $ciudad->District }}</td>
    <td>{{ $ciudad->Population }}</td>
</tr>
@endforeach
</table>
    {{ $ciudades->links() }}
    </div>

@endsection