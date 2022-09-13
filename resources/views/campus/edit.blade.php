@extends('layout.app')

@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
                                <form action="{{route('campus.update', $campuses->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
            <fieldset>
              <legend>Modification</legend>
              
              <div class="mb-3">
                <label for="intitule" class="form-label">Nom du Campus</label>
                <input type="text" id="intitule" class="form-control" placeholder="Campus" name="intitule" value="{{$campuses->intitule}}">
              </div>
              <div class="mb-3">
                <label for="lieu" class="form-label">Lieu</label>
                <input type="text" id="lieu" class="form-control" placeholder="Lieu" name="lieu" value="{{$campuses->lieu}}">
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="number" id="telephone" class="form-control" placeholder="Telephone" name="telephone" value="{{$campuses->telephone}}">
              </div>
              <button type="submit" class="btn btn-primary">Modifier</button>
               <button class="btn btn-danger"><a class="nav-link" href="{{route('campus.index')}}">Annuler</a></button>
            </fieldset>
          </form>
                   
@endsection