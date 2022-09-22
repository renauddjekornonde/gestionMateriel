@extends('layout.app')

@section('content')
@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
        
                      <form action="{{route('operation.store')}}" method="POST">
                      @csrf
            <fieldset>
              <legend>Ajouter un materiel</legend>
              <div class="mb-3">
                <label for="quantite" class="form-label">Quantite</label>
                <input type="number" id="quantite" class="form-control" placeholder="Quantite" name="quantite">
              </div>
              <div class="mb-3">
                <select id="materiel_id" name="materiel_id"  class="form-select">
                   <option value= "..." >Materiel</option>
                        @foreach ($materiels as $materiel)
                            <option value="{{ $materiel->id }}">{{ $materiel->intitule }}</option>
                        @endforeach
                </select>
              </div>

              {{-- <div class="mb-3">
                <label for="entree_id" class="form-label">Intitule</label>
                <input type="text" id="intitule" class="form-control" placeholder="Intitule" name="intitule">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" class="form-control" placeholder="Description" name="description">
              </div>
              <div class="mb-3">
                <select id="category" name="category"  class="form-select">
                   <option value= "..." >Catégorie</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->intitule }}</option>
                        @endforeach
                </select>
              </div> --}}
             
              
              <button type="submit" class="btn btn-primary">Ajouter</button>
               <button class="btn btn-danger"><a class="nav-link" href="{{route('operation.index')}}">Annuler</a></button>
            </fieldset>
          </form>
@endsection