{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('asset/modal.css')}}">


</head>
<body> --}}
@extends('layout.app')
@section('content')

<div id="{{url('materiel.show')}}" class="modal">
  <div class="modal_content">

    <h3>Intitule</h3> <br>

    <h6>{{$materiels->intitule}}</h6> <br>

    <h3>Matricule</h3> <br>

    <h6>{{$materiels->matricule}}</h6> <br>

    <h3>Description</h3> <br>

    <h6>{{$materiels->description}}</h6> <br>

    <h3>Creation</h3> <br>

    <h6>{{$materiels->created_at}}</h6> <br>

    <a href="#" class="modal_close">&times;</a>

    <a href="{{route('materiel.edit', $materiels->id)}}" style="color: blue;">Modifier</a>
    <form action="{{route('materiel.destroy', $materiels->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" style="color: red; border: none; background: white;" value="Supprimer">
    </form>
  </div>
</div>
@endsection