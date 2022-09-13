@extends('layout.app')

@section('content')
        
                      <form action="{{route('salle.store')}}" method="POST">
                      @csrf
            <fieldset>
              <legend>Ajouter Salle</legend>
              <div class="mb-3">
                <label for="numeroSalle" class="form-label">Salle</label>
                <input type="text" id="numeroSalle" class="form-control" placeholder="Numero" name="numeroSalle">
              </div>
              <div class="mb-3">
                <select id="campus_id" name="campus"  class="form-select">
                   <option value= "..." >Campus</option>
                        @foreach ($campuses as $campus)
                            <option value="{{ $campus->id }}">{{ $campus->intitule }}</option>
                        @endforeach
                </select>
              </div>
             
              
              <button type="submit" class="btn btn-primary">Ajouter</button>
               <button class="btn btn-danger"><a class="nav-link" href="{{route('salle.index')}}">Annuler</a></button>
            </fieldset>
          </form>
@endsection