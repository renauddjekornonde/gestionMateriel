@extends('layout.app')

@section('content')
        
                      <form action="{{route('salle.update', $salles->id)}}" method="POST">
                      @csrf
                    @method('PATCH')
            <fieldset>
              <legend>Modification</legend>
              <div class="mb-3">
                <label for="numeroSalle" class="form-label">Salle</label>
                <input type="text" id="numeroSalle" class="form-control" placeholder="Numero" name="numeroSalle" value="{{$salles->numeroSalle}}">
              </div>
              <div class="mb-3">
                <select id="campus_id" name="campus"  class="form-select">
                   <option value= "..." >Campus</option>
                        @foreach ($campuses as $campus)
                        @if ($campus->id == $salles->campus_id)
                            <option value="{{ $campus->id }}" selected>{{ $campus->intitule }}</option>
                        @endif
                            <option value="{{ $campus->id }}">{{ $campus->intitule }}</option>
                        @endforeach
                </select>
              </div>
             
              
              <button type="submit" class="btn btn-primary">Modifier</button>
               <a href="{{back()}}"><button type="" class="btn btn-danger">Annuler</button></a>
            </fieldset>
          </form>
@endsection