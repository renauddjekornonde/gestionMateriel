@extends('layout.app')

@section('content')
@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
                                <form action="{{route('category.store')}}" method="POST">
                                    @csrf
                        <fieldset>
                          <legend>Ajouter une category</legend>
                          <div class="mb-3">
                            <label for="intitule" class="form-label">Nom categorie</label>
                            <input type="text" id="intitule" class="form-control" placeholder="intitule" name="intitule">
                          </div>
                          <button type="submit" class="btn btn-primary">Ajouter</button>
                            <button class="btn btn-danger"><a class="nav-link" href="{{route('category.index')}}">Annuler</a></button>
                        </fieldset>
                      </form>
@endsection