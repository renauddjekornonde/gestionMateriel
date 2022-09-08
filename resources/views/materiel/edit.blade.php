@extends('layout.app')

@section('content')
        
                      <form action="{{route('materiel.update', $materiels->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
            <fieldset>
              <legend>Modification</legend>
              <div class="mb-3">
                <label for="matricule" class="form-label">Matricule</label>
                <input type="text" id="matricule" class="form-control" placeholder="Matricule" name="matricule" value="{{$materiels->matricule}}">
              </div>
              <div class="mb-3">
                <label for="intitule" class="form-label">Nom de Article</label>
                <input type="text" id="intitule" class="form-control" placeholder="Intitule" name="intitule" value="{{$materiels->intitule}}">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" class="form-control" placeholder="Description" name="description" value="{{$materiels->description}}">
              </div>
              <div class="mb-3">
                <select id="category" name="category"  class="form-select">
                   <option value= "..." >Catégorie</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->intitule }}</option>
                        @endforeach
                </select>
              </div>
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
                <input type="date" id="date_creation" class="form-control" placeholder="Date de creation" name="created_at" value="{{$materiels->created_at}}">
              </div>
              
              <button type="submit" class="btn btn-primary">Modifier</button>
              <a href="{{back()}}"><button type="" class="btn btn-danger">Annuler</button></a>
            </fieldset>
          </form>
@endsection