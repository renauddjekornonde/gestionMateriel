@extends('layout.app')

@section('content')
@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
                      <form action="{{route('materiel.store')}}" method="POST">
                      @csrf
            <fieldset>
              <legend>Ajouter un materiel</legend>
              <div class="mb-3">
                <label for="matricule" class="form-label">Matricule</label>
                <input type="text" id="matricule" class="form-control" placeholder="Matricule" name="matricule">
              </div>
              <div class="mb-3">
                <label for="intitule" class="form-label">Intitule</label>
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
              </div>
             
              
              <button type="submit" class="btn btn-primary">Ajouter</button>
               <button class="btn btn-danger"><a class="nav-link" href="{{route('materiel.index')}}">Annuler</a></button>
            </fieldset>
          </form>
@endsection