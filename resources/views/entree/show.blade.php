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
                                           <td>Materiel</td>
                                             <td>Quantite</td>
                                            <td>Creer</td>
                                             <td>Status</td>
                                             
                                              
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
                                            <td><h6>
                                              {{-- <a href="#" class="modal_close">&times;</a> --}}

                                      <a href="{{route('entree.edit', $entrees->id)}}" style="color: blue; text-decoration: none;">Modifier</a></h6>
                                      </td>
                                      <td>
                                      <h6>
                                      <form action="{{route('entree.destroy', $entrees->id)}}" method="POST">
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