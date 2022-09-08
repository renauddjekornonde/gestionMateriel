@extends('layout.app')

@section('content')
                                <form action="{{route('category.store', $categories->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                        <fieldset>
                          <legend>Modification</legend>
                          <div class="mb-3">
                            <label for="intitule" class="form-label">Nom categorie</label>
                            <input type="text" id="intitule" class="form-control" placeholder="intitule" name="intitule" value="{{$categories->intitule}}">
                          </div>
                   
                          <div class="mb-3">
                            <label for="date_creation" class="form-label">Date</label>
                            <input type="date" id="date_creation" class="form-control" placeholder="Date de creation" name="created_at" value="{{$categories->intitule}}">
                          </div>
                      
                          <button type="submit" class="btn btn-primary">Modifier</button>
                        </fieldset>
                      </form>
@endsection