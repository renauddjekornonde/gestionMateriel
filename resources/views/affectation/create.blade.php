@extends('layout.app')

@section('content')
<form action="{{route('affectation.store')}}" method="POST">
    @csrf
<fieldset>
<legend>Ajouter affectation</legend>
<div class="mb-3">
<select id="salle" name="salle"  class="form-select">
<option value= "..." >Salle</option>
    @foreach ($salles as $salle)
        <option value="{{ $salle->id }}">{{ $salle->numeroSalle}}</option>
    @endforeach
</select>
</div>
<button type="submit" class="btn btn-primary">Ajouter</button>
 <button class="btn btn-danger"><a class="nav-link" href="{{route('affectation.index')}}">Annuler</a></button>
</fieldset>
</form>
@endsection