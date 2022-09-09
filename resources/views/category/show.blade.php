@extends('layout.app')
@section('content')

      <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                            <h3>Category</h3>
                            
                             <a href="{{url('category/create')}}">
                             <a href="{{route('category.create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                      <div class="card-body">

                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                          <td>Identifiant</td>
                                           <td>Intitule</td>
                                         
                                            
                                            <td>Creer</td>
                                             
                                              
                                        </tr>
                                    </thead>
                                 
                                        <tbody>
                                        <tr>
                                           <td><h6>{{$categories->id}}</h6></td>
                                            <td><h6>{{$categories->intitule}}</h6></td>
                                           
                                           
                                           
                                            <td><h6>
                                                <span class="status purple"></span>
                                               {{$categories->created_at->format('d/m/y')}}
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