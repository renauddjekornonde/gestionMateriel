@extends('layout.app')

@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
    
                                <form action="{{route('fournisseur.update', $fournisseurs->id)}}" method="POST">
                        @csrf
                          @method('PATCH')
            <fieldset>
              <legend>Modification</legend>
              
              <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{$fournisseurs->nom}}">
              </div>
              <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" id="prenom" class="form-control" placeholder="Prenom" name="prenom" value="{{$fournisseurs->prenom}}">
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="number" id="telephone" class="form-control" placeholder="Telephone" name="telephone" value="{{$fournisseurs->telephone}}">
              </div>
              <div class="mb-3">
                <label for="boutique" class="form-label">Nom de Boutique</label>
                <input type="text" id="boutique" class="form-control" placeholder="Boutique" name="boutique" value="{{$fournisseurs->boutique}}">
              </div>
             
              <button type="submit" class="btn btn-primary">Modifier</button>
              
                <button class="btn btn-danger"><a class="nav-link" href="{{route('fournisseur.index')}}">Annuler</a></button>
            </fieldset>
          </form>       
@endsection