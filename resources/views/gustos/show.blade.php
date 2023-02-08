@extends('layouts.plantilla')

@section('title','index')

@section('content')
   <h1>estos son los gustos de: {{$gusto}}</h1>

   <table border="1">
    <tr>
        <th>nombre</th>
        <th>nivel de gusto</th>
        <th>comentario</th>
    </tr>
    <tr>
        <td>platanito frito</td>
        <td>☆☆☆☆☆</td>
        <td>aguaditos</td>        
    </tr>
    <tr>
        <td>huevitos fritos</td>
        <td>☆☆☆</td>
        <td>llema medio cocida</td>        
    </tr>
   </table>
@endsection