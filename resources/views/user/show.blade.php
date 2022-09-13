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
                                           <td>Nom</td>
                                           <td>Prenom</td>
                                            <td>Telephone</td>
                                            <td>Email</td>
                                            <td>Password</td>
                                            
                                             
                                              
                                        </tr>
                                    </thead>
                                 
                                        <tbody>
                                        <tr>
                                            <td><h6>{{$users->id}}</h6></td>
                                            <td><h6>{{$users->nom}}</h6></td>
                                            <td><h6>{{$users->prenom}}</h6></td>
                                            <td><h6>{{$users->telephone}}</h6></td>
                                            <td><h6>{{$users->email}}</h6></td>
                                            <td><h6>{{$users->password}}</h6></td>
                                        
                                           <td><h6>
                                                <span class="status purple"></span>
                                               {{$users->created_at->format('d/m/y')}}
                                            </h6></td>
                                           
                                        </tr>
                                    </tbody>

                                    


                                       
                                </table>
                    </div>
                     <button class="btn btn-danger"><a class="nav-link" href="{{route('user.index')}}">Retour</a></button>
                  </div>
                  </td>
                  </td>
                  </td>
   
  </div>
</div>
@endsection