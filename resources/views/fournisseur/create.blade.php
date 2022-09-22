@extends('layout.app')

@section('content')
@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
    
                                <form action="{{route('fournisseur.store')}}" method="POST">
                        @csrf
            <fieldset>
              <legend>Ajouter un Fournisseur</legend>
              
              <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom">
              </div>
              <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" id="prenom" class="form-control" placeholder="Prenom" name="prenom">
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="number" id="telephone" class="form-control" placeholder="Telephone" name="telephone">
              </div>
              <div class="mb-3">
                <label for="boutique" class="form-label">Nom de Boutique</label>
                <input type="text" id="boutique" class="form-control" placeholder="Boutique" name="boutique">
              </div>
             
              <button type="submit" class="btn btn-primary">Ajouter</button>
              
               <button class="btn btn-danger"><a class="nav-link" href="{{route('fournisseur.index')}}">Annuler</a></button>
            </fieldset>
          </form>       
@endsection