@extends('layout.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
                     <form action="{{route('entree.store')}}" method="POST">
                        @csrf
            <fieldset>
              <legend>Ajouter une Entree</legend>
          
              <div class="mb-3">
                <select id="fournisseur" name="fournisseur" class="form-select">
                   <option value= "..." >Fournisseur</option>
                        @foreach ($fournisseurs as $fournisseur)
                            <option value="{{ $fournisseur->id }}">{{ $fournisseur->boutique }}</option>
                        @endforeach
                </select>
              </div>
              <hr>
              <td><button type="button" name="add" id="add-btn" class="btn btn-success"><ion-icon name="duplicate-sharp"></ion-icon></button></td>
  
              <table class="table-responsive" id="dynamicAddRemove">
               <tr>

               <td>
              <div class="mb-3">
              <label for="materiel" class="form-label">Materiel</label>
                <select  style="margin-top: 1px;" id="materiel_id" name="materiel_id[]"  class="form-select">
                   <option value= "..." >Materiel</option>
                        @foreach ($materiels as $materiel)
                            <option value="{{ $materiel->id }}">{{ $materiel->intitule }}</option>
                        @endforeach
                </select>
              </div>
              </td>

              <td>
              <div class="mb-3">
                <label for="quantite" class="form-label">Quantite</label>
                <input style="margin-top: 1px;" type="number" id="quantite" class="form-control" placeholder="Quantite" name="quantite[]">
                <input type="hidden" name="moreFields[0][typeOperation]" value="1">
              </div>
              </td>

              </tr>
              </table><br>
               

              <button type="submit" class="btn btn-primary">Enregistrer</button>
               <button class="btn btn-danger"><a class="nav-link" href="{{route('entree.index')}}">Annuler</a></button>

              
            </fieldset>
          </form>

    <script type="text/javascript">
    var i = 0;
    $("#add-btn").click(function(){
    ++i;
    $("#dynamicAddRemove").append('<tr><td> <label for="materiel" class="form-label">Materiel</label><select style="margin-top: 7px;" id="materiel_id" name="materiel_id[]"  class="form-select"><option value= "..." >Materiel</option>@foreach ($materiels as $materiel)<option value="{{ $materiel->id }}">{{ $materiel->intitule }}</option>@endforeach</select></td><td><label for="quantite" class="form-label">Quantite</label><input type="number" id="quantite" name="quantite[]" placeholder="Quantite" class="form-control" /> <input type="hidden" name="moreFields['+i+'][typeOperation]" value="1"></td><td><button style="margin-top: 30px;" type="button" class="btn btn-danger remove-tr"><ion-icon name="close-circle-sharp"></ion-icon></button></td></tr>');
    });
    $(document).on('click', '.remove-tr', function(){  
    $(this).parents('tr').remove();
    });  
    </script>
    </body>
</html>


@endsection