@extends('layout.app')

@section('content')
                              <center>
        <fieldset style="width: 70%;">
            <form action="{{route('affectation.store')}}" method="POST">
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
    </center>
                    </div>
                          
                </div>
             </div>
         </div>
    </div>
@endsection