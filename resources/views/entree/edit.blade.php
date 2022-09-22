@extends('layout.app')

@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
                     <form action="{{route('entree.update', $entree->id)}}" method="POST">
                        @csrf
                         @method('PATCH')
            <fieldset>
              <legend>Modification</legend>
            
              <div class="mb-3">
                <select id="fournisseur" name="fournisseur" class="form-select">
                   <option value= "..." >Fournisseur</option>
                        @foreach ($fournisseurs as $fournisseur)
                         @if ($fournisseur->id )
                            <option value="{{ $fournisseur->id }}">{{ $fournisseur->boutique }}</option>
                            @endif
                             <option value="{{ $fournisseur->id }}">{{ $fournisseur->boutique }}</option>
                        @endforeach
                </select>
                </div>
            
              <div class="mb-3">
                <label for="matricule" class="form-label">Matricule</label>
                <input type="text" id="matricule" class="form-control" placeholder="Matricule" name="matricule" value="{{$entree->matricule}}">
              </div>

              <button type="submit" class="btn btn-primary">Modifier</button>
                <button class="btn btn-danger"><a class="nav-link" href="{{route('entree.index')}}">Annuler</a></button>
            </fieldset>
          </form>
@endsection