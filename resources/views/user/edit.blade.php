@extends('layout.app')

@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
        
                      <form action="{{route('user.update', $users->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
            <fieldset>
              <legend>Modification</legend>
              <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{$users->nom}}">
              </div>
              <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" id="prenom" class="form-control" placeholder="Prenom" name="prenom" value="{{$users->prenom}}">
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="number" id="telephone" class="form-control" placeholder="Telephone" name="telephone" value="{{$users->telephone}}">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email" name="email" value="{{$users->email}}">
              </div>
               <div class="mb-3">
                <select id="role" name="role"  class="form-select">
                   <option value= "..." >Role</option>
                   @if ($users->role == "Gerant")
                     <option selected>Gerant</option>
                  @elseif ($users->role == "Administrateur")
                    <option selected>Administrateur</option>
                   @endif
                  <option>Gerant</option>
                  <option >Administrateur</option>
                </select>
              </div>

               <div class="mb-3">
                <select id="campus_id" name="campus_id"  class="form-select">
                   <option value= "..." >Campus</option>
                        @foreach ($campuses as $campus)
                        @if ($campus->id == $salles->campus_id)
                            <option value="{{ $campus->id }}" selected>{{ $campus->intitule }}</option>
                        @endif
                            <option value="{{ $campus->id }}">{{ $campus->intitule }}</option>
                        @endforeach
                </select>
              </div>

              <button type="submit" class="btn btn-primary">Modifier</button>
              <button class="btn btn-danger"><a class="nav-link" href="{{route('user.index')}}">Annuler</a></button>
            </fieldset>
          </form>
@endsection