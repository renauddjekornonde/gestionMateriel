@extends('layout.app')

@section('content')
                     <form action="{{route('entree.update', $entrees->id)}}" method="POST">
                        @csrf
                         @method('PATCH')
            <fieldset>
              <legend>Modification</legend>
            
              <div class="mb-3">
                <select id="fournisseur" name="fournisseur" class="form-select">
                   <option value= "..." >Fournisseur</option>
                        @foreach ($fournisseurs as $fournisseur)
                            <option value="{{ $fournisseur->id }}">{{ $fournisseur->boutique }}</option>
                        @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="date_creation" class="form-label">Date</label>
                <input type="date" id="date_creation" class="form-control" placeholder="Date de creation" name="created_at" value="{{$entrees->created_at}}">
              </div>
            
              <button type="submit" class="btn btn-primary">Modifier</button>
               <a href="{{back()}}"><button type="" class="btn btn-danger">Annuler</button></a>
            </fieldset>
          </form>
@endsection