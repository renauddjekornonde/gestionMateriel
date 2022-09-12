@extends('layout.app')

@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
  <form action="{{route('category.update', $category->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
      <fieldset>
        <legend>Modification</legend>
        <div class="mb-3">
            <label for="intitule" class="form-label">Nom categorie</label>
              <input type="text" id="intitule" class="form-control" placeholder="Nom Categorie" name="intitule" value="{{$category->intitule}}">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="{{back()}}"><button type="" class="btn btn-danger">Annuler</button></a>
      </fieldset>
  </form>
@endsection