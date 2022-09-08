@extends('layout.app')

@section('content')
<form action="{{route('materiel.store')}}" method="POST">
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
<div class="mb-3">
<label for="date_creation" class="form-label">Date</label>
<input type="date" id="date_creation" class="form-control" placeholder="Date de creation" name="created_at">
</div>
{{-- <div class="mb-3">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="" disabled>
<label class="form-check-label" for="disabledFieldsetCheck">
Can't check this
</label>
</div>
</div> --}}
<button type="submit" class="btn btn-primary">Ajouter</button>
</fieldset>
</form>
@endsection