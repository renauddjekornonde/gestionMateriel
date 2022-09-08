@extends('layout.app')

@section('content')
                                <form action="{{route('campus.store')}}" method="POST">
                        @csrf
            <fieldset>
              <legend>Ajouter un Campus</legend>
              
              <div class="mb-3">
                <label for="intitule" class="form-label">Nom du Campus</label>
                <input type="text" id="intitule" class="form-control" placeholder="Campus" name="intitule">
              </div>
              <div class="mb-3">
                <label for="lieu" class="form-label">Lieu</label>
                <input type="text" id="lieu" class="form-control" placeholder="Lieu" name="lieu">
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="number" id="telephone" class="form-control" placeholder="Telephone" name="telephone">
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