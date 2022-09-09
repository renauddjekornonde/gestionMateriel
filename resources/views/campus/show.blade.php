@extends('layout.app')
@section('content')

      <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                            <h3>Campus</h3>
                            
                             <a href="{{url('campus/create')}}">
                             <a href="{{route('campus.create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                      <div class="card-body">

                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Id</td>
                                           <td>Intitule</td>
                                           <td>lieu</td>
                                            <td>Telephone</td>
                                            
                                            <td>Date</td>
                                           
                                             
                                              
                                        </tr>
                                    </thead>
                                 
                                        <tbody>
                                        <tr>
                                            <td><h6>{{$campuses->id}}</h6></td>
                                           
                                            <td><h6>{{$campuses->intitule}}</h6></td>
                                             <td><h6>{{$campuses->lieu}}</h6></td>
                                             <td><h6>{{$campuses->telephone}}</h6></td>
                                            <td><h6>
                                                <span class="status purple"></span>
                                               {{$campuses->created_at->format('d/m/y')}}
                                            </h6></td>
                                           
                                        </tr>
                                    </tbody>

                                    


                                       
                                </table>
                    </div>
                  </div>
                  </td>
                  </td>
                  </td>
   
  </div>
</div>
@endsection