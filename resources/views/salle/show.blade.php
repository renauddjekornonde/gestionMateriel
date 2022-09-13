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
                      <div class="card-body">

                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Id</td>
                                           <td>Numero salle</td>
                                           <td>Nom campus</td>
                                            <td>Creer</td>
                                            
                                             
                                              
                                        </tr>
                                    </thead>
                                 
                                        <tbody>
                                        <tr>
                                            <td><h6>{{$salles->id}}</h6></td>
                                            <td>Numero salle</td>
                                            <td>Nom campus</td>
                                           <td><h6>
                                                <span class="status purple"></span>
                                               {{$salles->created_at->format('d/m/y')}}
                                            </h6></td>
                                           
                                        </tr>
                                    </tbody>

                                    


                                       
                                </table>
                    </div>
                     <button class="btn btn-danger"><a class="nav-link" href="{{route('salle.index')}}">Retour</a></button>
                  </div>
                  </td>
                  </td>
                  </td>
   
  </div>
</div>
@endsection