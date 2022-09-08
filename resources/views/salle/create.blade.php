@extends('layout.app')

@section('content')
    
                                <form action="{{route('salle.store')}}" method="POST">
                        @csrf
            <fieldset>
              <legend>Ajouter un salle</legend>
              
              <div class="mb-3">
                <label for="numeroSalle" class="form-label">numeroSalle</label>
                <input type="text" id="numeroSalle" class="form-control" placeholder="numeroSalle" name="numeroSalle">
              </div>
              <div class="mb-3">
                <select id="campus" name="campus"  class="form-select">
                   <option value= "..." >Campus</option>
                        @foreach ($campuses as $campus)
                            <option value="{{ $campus->id }}">{{ $campus->intitule }}</option>
                        @endforeach
                </select>
              </div>
             
                    
              <button type="submit" class="btn btn-primary">Ajouter</button>
              
               <a href="{{back()}}"><button type="" class="btn btn-danger">Annuler</button></a>
            </fieldset>
          </form>       
@endsection