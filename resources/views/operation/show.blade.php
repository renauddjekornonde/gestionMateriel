@extends('layout.app')
@section('content')

      <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                      <div class="card-body">

                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Id</td>
                                           <td>Quantite</td>
                                            <td>Type Operation</td>
                                            
                                            <td>Creer</td>
                                      
                                             
                                              
                                        </tr>
                                    </thead>
                                 
                                        <tbody>
                                        <tr>
                                            <td><h6>{{$operations->id}}</h6></td>
                                           
                                            <td><h6>{{$operations->quantite}}</h6></td>
                                             <td><h6>{{$operations->typeOperation}}</h6></td>
                                            <td><h6>
                                                <span class="status purple"></span>
                                               {{$operations->created_at->format('d/m/y')}}
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