@extends('layout.app')
@section('content')

      <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                            <h3>Afffectation</h3>
                            
                             <a href="{{url('affectation/create')}}">
                             <a href="{{route('affectation.create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                      <div class="card-body">

                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Id</td>
                                           <td>Materiel</td>
                                           <td>Quantite</td>
                                            
                                            <td>Creer</td>
                                          
                                             
                                              
                                        </tr>
                                    </thead>
                                 
                                        <tbody>
                                        <tr>
                                            <td><h6>{{$affectations->id}}</h6></td>
                                            <td>Nom materiel</td>
                                            <td>Quantite materiels</td>
                                    
                                            <td><h6>
                                                <span class="status purple"></span>
                                               {{$affectations->created_at->format('d/m/y')}}
                                            </h6></td>
                                             
                                        </tr>
                                    </tbody>

                                    


                                       
                                </table>
                    </div>
                     <button class="btn btn-danger"><a class="nav-link" href="{{route('affectation.index')}}">Retour</a></button>
                  </div>
                  </td>
                  </td>
                  </td>
   
  </div>
</div>
@endsection