@extends('layout.app')

@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
        
                      <form action="{{route('salle.update', $salle->id)}}" method="POST">
                      @csrf
                    @method('PATCH')
            <fieldset>
              <legend>Modification</legend>
              <div class="mb-3">
                <label for="numeroSalle" class="form-label">Salle</label>
                <input type="text" id="numeroSalle" class="form-control" placeholder="Numero" name="numeroSalle" value="{{$salle->numeroSalle}}">
              </div>
              <div class="mb-3">
                <select id="campus_id" name="campus_id"  class="form-select">
                   <option value= "..." >Campus</option>
                        @foreach ($campuses as $campus)
                        @if ($campus->id == $salle->campus_id)
                            <option value="{{ $campus->id }}" selected>{{ $campus->intitule }}</option>
                        @endif
                            <option value="{{ $campus->id }}">{{ $campus->intitule }}</option>
                        @endforeach
                </select>
              </div>
             
              
              <button type="submit" class="btn btn-primary">Modifier</button>
 <button class="btn btn-danger"><a class="nav-link" href="{{route('salle.index')}}">Annuler</a></button>
            </fieldset>
          </form>
@endsection