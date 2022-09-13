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

              <button type="submit" class="btn btn-primary">Ajouter</button>
               <button class="btn btn-danger"><a class="nav-link" href="{{route('entree.index')}}">Annuler</a></button>
            </fieldset>
          </form>
@endsection