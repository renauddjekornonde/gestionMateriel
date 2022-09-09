@extends('layout.app')

@section('content')
                                <form action="{{route('category.store')}}" method="POST">
                                    @csrf
                        <fieldset>
                          <legend>Ajouter une category</legend>
                          <div class="mb-3">
                            <label for="intitule" class="form-label">Nom categorie</label>
                            <input type="text" id="intitule" class="form-control" placeholder="intitule" name="intitule">
                          </div>
                          <button type="submit" class="btn btn-primary">Ajouter</button>
                           <a href="{{back()}}"><button type="" class="btn btn-danger">Annuler</button></a>
                        </fieldset>
                      </form>
@endsection