@extends('layout.app')

@section('content')
                              {{-- <center>
        <fieldset style="width: 70%;">
            <form action="{{route('materiel.store')}}" method="POST">
                <h1>Ajouter Materiel</h1>
                <hr>
                <table>
                    <tr>
                        <td>Nom</td><td><input type="text" name="name" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Adresse</td><td><input type="text" name="adresse" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Telephone</td><td><input type="text" name="tel" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Email</td><td><input type="mail" name="email" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Mot de passe</td><td><input type="password" name="pwd1" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Confirmer</td><td><input type="password" name="pwd2" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td colspane="2"><input type="submit" id="submit" name="" value="Soumetre"><br><br></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center> --}}
                      <form action="{{route('materiel.store')}}" method="POST">
                        @csrf
            <fieldset>
              <legend>Ajouter un materiel</legend>
              <div class="mb-3">
                <label for="matricule" class="form-label">Matricule</label>
                <input type="text" id="matricule" class="form-control" placeholder="Matricule" name="matricule">
              </div>
              <div class="mb-3">
                <label for="intitule" class="form-label">Intitule</label>
                <input type="text" id="intitule" class="form-control" placeholder="Intitule" name="intitule">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" class="form-control" placeholder="Description" name="description">
              </div>
              <div class="mb-3">
                <select id="category" name="category"  class="form-select">
                   <option value= "..." >Catégorie</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->intitule }}</option>
                        @endforeach
                </select>
              </div>
              <div class="mb-3">
                <select id="fournisseur" name="fournisseur" class="form-select">
                   <option value= "..." >Fournisseur</option>
                        @foreach ($fournisseurs as $fournisseur)
                            <option value="{{ $fournisseur->id }}">{{ $fournisseur->boutique }}</option>
                        @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="date_creation" class="form-label">Date</label>
                <input type="date" id="date_creation" class="form-control" placeholder="Date de creation" name="created_at">
              </div>
              {{-- <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="" disabled>
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Can't check this
                  </label>
                </div>
              </div> --}}
              <button type="submit" class="btn btn-primary">Ajouter</button>
            </fieldset>
          </form>
@endsection