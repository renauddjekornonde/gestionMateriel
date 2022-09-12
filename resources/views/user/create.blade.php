@extends('layout.app')

@section('content')
        
                      <form action="{{route('user.store')}}" method="POST">
                      @csrf
            <fieldset>
              <legend>Ajouter un Utilisateur</legend>
              <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom">
                @if ($errors->has('nom'))
                  <span class="text-danger">{{$errors->first('nom')}}</span>
                @endif
              </div>
              <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" id="prenom" class="form-control" placeholder="Prenom" name="prenom">
                 @if ($errors->has('prenom'))
                  <span class="text-danger">{{$errors->first('prenom')}}</span>
                @endif
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="number" id="telephone" class="form-control" placeholder="Telephone" name="telephone">
                 @if ($errors->has('telephone'))
                  <span class="text-danger">{{$errors->first('telephone')}}</span>
                @endif
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email" name="email">
                 @if ($errors->has('email'))
                  <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
              </div>       
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Mot de passe" name="password">
                 @if ($errors->has('password'))
                  <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
              </div>       
               <div class="mb-3">
                <select id="role" name="role"  class="form-select">
                   <option value= "..." >Role</option>
                            <option>Gerant</option>
                            <option >Administrateur</option>
                </select>
                
              </div> 
              <button type="submit" class="btn btn-primary">Ajouter</button>
            </fieldset>
          </form>
@endsection