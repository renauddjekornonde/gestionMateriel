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
                                           <td>Numero salle</td>
                                           <td>Nom campus</td>
                                            <td>Creer</td>
                                             <td>Status</td>
                                             
                                              
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
                                            <td><h6>
                                              {{-- <a href="#" class="modal_close">&times;</a> --}}

                                      <a href="{{route('salle.edit', $salles->id)}}" style="color: blue;">Modifier</a></h6>
                                      </td>
                                      <td>
                                      <h6>
                                      <form action="{{route('salle.destroy', $salles->id)}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <input type="submit" style="color: red; border: none; background: white;" value="Supprimer">
                                      </form>
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