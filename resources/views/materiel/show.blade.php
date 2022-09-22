@extends('layout.app')
@section('content')
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif

      <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                            <h3>Materiel</h3>
                            
                             <a href="{{url('materiel/create')}}">
                             <a href="{{route('materiel.create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                      <div class="card-body">

                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Intitule</td>
                                           <td>Matricule</td>
                                            <td>Description</td>
                                            <td>Quantite</td>
                                            
                                            <td>Creer</td>
                                            
                                             
                                              
                                        </tr>
                                    </thead>
                                 
                                        <tbody>
                                        <tr>
                                            <td><h6>{{$materiels->intitule}}</h6></td>
                                           
                                            <td><h6>{{$materiels->matricule}}</h6></td>
                                             <td><h6>{{$materiels->description}}</h6></td>
                                             <td><h6>{{$materiels->quantite}}</h6></td>
                                            <td><h6>
                                                <span class="status purple"></span>
                                               {{$materiels->created_at->format('d/m/y')}}
                                            </h6></td>
                                           
                                        </tr>
                                    </tbody>

                                    


                                       
                                </table>
                    </div>
                     <button class="btn btn-danger"><a class="nav-link" href="{{route('materiel.index')}}">Retour</a></button>
                  </div>
                  </td>
                  </td>
                  </td>
   
  </div>
</div>
@endsection