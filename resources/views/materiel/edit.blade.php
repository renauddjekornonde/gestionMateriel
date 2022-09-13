@extends('layout.app')

@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
        
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
                   <option value= "..." >Categorie</option>
                        @foreach ($categories as $category)
                             @if ($materiels->category_id==$category->id )
                            <option value="{{ $category->id }}" selected>{{ $category->intitule }}</option>
                            @endif
                            <option value="{{ $category->id }}">{{ $category->intitule }}</option>
                        @endforeach
                </select>
              </div>
             
              
              <button type="submit" class="btn btn-primary">Modifier</button>
              <button class="btn btn-danger"><a class="nav-link" href="{{route('materiel.index')}}">Annuler</a></button>
            </fieldset>
          </form>
@endsection