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
                        <div class="card-header">
                            <h3>Fournisseur</h3>
                            
                             <a href="{{url('fournisseur/create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Nom</td>
                                            <td>Prenom</td>
                                            <td>Telephone</td>
                                            <td>Boutique</td>
                                            <td>Date</td>
                                             <td>Status</td>
                                             <td>Modifier</td>
                                             <td>Supprimer</td>
                                              
                                        </tr>
                                    </thead>
                                   @foreach ($fournisseurs as $fournisseur)
                                        <tbody>
                                        <tr>
                                            <td>{{$fournisseur->nom}}</td>
                                            <td>{{$fournisseur->prenom}}</td>
                                            <td>{{$fournisseur->telephone}}</td>
                                            <td>{{$fournisseur->boutique}}</td>
                                            <td>
                                                <span class="status purple"></span>
                                               {{$fournisseur->created_at->format('d/m/y')}}
                                            </td>
                                            <td>
                                                <a href="{{route('fournisseur.show',$fournisseur->id)}}" style="color: blue; text-decoration: none;">
                                                Voir Plus
                                               </a>
                                            </td>
                                             <td><h6>

                                      <a href="{{route('fournisseur.edit', $fournisseur->id)}}" style="color: green; text-decoration: none;">Modifier</a></h6>
                                      </td>
                                      <td>
                                      <h6>
                                      <form action="{{route('fournisseur.destroy', $fournisseur->id)}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <input type="submit" style="color: red; border: none; background: white;" value="Supprimer">
                                      </form>
                                             </h6></td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                       
                                </table>
                    </div>
                          
                </div>
             </div>
         </div>
    </div>
@endsection