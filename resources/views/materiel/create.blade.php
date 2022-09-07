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
                      <form>
            <fieldset>
              <legend>Disabled fieldset example</legend>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Disabled input</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select">
                  <option>Disabled select</option>
                </select>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Can't check this
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
          </form>
@endsection