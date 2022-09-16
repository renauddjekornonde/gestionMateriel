@extends('layout.app')

@section('content')
<form action="{{route('affectation.update', $affectations->id)}}" method="POST">
    @csrf
    @method('PATCH')
<fieldset>
<legend>Ajouter affectation</legend>
<div class="mb-3">
<select id="salle" name="salle_id"  class="form-select">
<option value= "..." >Salle</option>
    @foreach ($salles as $salle)
    @if ($salle->id==$affectation->salle_id)
         <option value="{{ $salle->id }}" selected>{{ $salle->numeroSalle}}</option>
    @endif
        <option value="{{ $salle->id }}">{{ $salle->numeroSalle}}</option>
    @endforeach
</select>
</div>
<button type="submit" class="btn btn-primary">Ajouter</button>
  <button class="btn btn-danger"><a class="nav-link" href="{{route('gerant.index')}}">Annuler</a></button>
</fieldset>
</form>
@endsection