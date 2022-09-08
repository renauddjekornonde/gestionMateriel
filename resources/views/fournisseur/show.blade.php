@extends('layout.app')
@section('content')

      <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                    <div class="card-header">
                            <h3>Fournisseur</h3>
                            
                             <a href="{{url('fournisseur/create')}}">
                             <a href="{{route('fournisseur.create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                      <div class="card-body">

                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Id</td>
                                           <td>Nom</td>
                                            <td>Prenom</td>
                                            <td>Telephone</td>
                                            <td>Boutique</td>

                                            
                                            <td>Creer</td>
                                             <td>Status</td>
                                             
                                              
                                        </tr>
                                    </thead>
                                 
                                        <tbody>
                                        <tr>
                                            <td><h6>{{$fournisseurs->id}}</h6></td>
                                            <td><h6>{{$fournisseurs->nom}}</h6></td>
                                            <td><h6>{{$fournisseurs->prenom}}</h6></td>
                                            <td><h6>{{$fournisseurs->telephone}}</h6></td>
                                             <td><h6>{{$fournisseurs->boutique}}</h6></td>
                                            <td><h6>
                                                <span class="status purple"></span>
                                               {{$fournisseurs->created_at->format('d/m/y')}}
                                            </h6></td>
                                            <td><h6>
                                              {{-- <a href="#" class="modal_close">&times;</a> --}}

                                      <a href="{{route('fournisseur.edit', $fournisseurs->id)}}" style="color: blue; text-decoration: none;">Modifier</a></h6>
                                      </td>
                                      <td>
                                      <h6>
                                      <form action="{{route('fournisseur.destroy', $fournisseurs->id)}}" method="POST">
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