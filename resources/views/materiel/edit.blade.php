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
                             @if ($materiels->category_id==$category->id )
                            <option value="{{ $category->id }}" selected>{{ $category->intitule }}</option>
                            @endif
                            <option value="{{ $category->id }}">{{ $category->intitule }}</option>
                        @endforeach
                </select>
              </div>
             
              
              <button type="submit" class="btn btn-primary">Modifier</button>
              <a href="{{back()}}"><button type="" class="btn btn-danger">Annuler</button></a>
            </fieldset>
          </form>
@endsection