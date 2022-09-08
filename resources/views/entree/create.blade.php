@extends('layout.app')

@section('content')
                     <form action="{{route('entree.store')}}" method="POST">
                        @csrf
            <fieldset>
              <legend>Ajouter une Entree</legend>
            
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
                <input type="date" id="date_creation" class="form-control" placeholder="Date de creation" name="created_at">
              </div>
            
              <button type="submit" class="btn btn-primary">Ajouter</button>
               <a href="{{back()}}"><button type="" class="btn btn-danger">Annuler</button></a>
            </fieldset>
          </form>
@endsection