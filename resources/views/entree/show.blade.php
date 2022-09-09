@extends('layout.app')
@section('content')

      <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                            <h3>Entree</h3>
                            
                             <a href="{{url('entree/create')}}">
                             <a href="{{route('entree.create')}}">
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
                                            <td><h6>{{$entrees->id}}</h6></td>
                                            <td>Nom materiel</td>
                                           <td>Quantite materiels</td>
                                            <td><h6>
                                                <span class="status purple"></span>
                                               {{$entrees->created_at->format('d/m/y')}}
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