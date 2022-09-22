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
                            <h3>Entree</h3>
                            
                             <a href="{{url('entree/create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Identifiant</td>
                                           <td>Matricule</td>
                                           <td>Fournisseur</td>
                                          
                                            <td>Date</td>
                                            <td>Update</td>
                                             <td>Status</td>
                                             <td>Modifier</td>
                                             <td>Supprimer</td>
                                              
                                        </tr>
                                    </thead>
                                   @foreach ($entrees as $entree)
                                        <tbody>
                                        <tr>
                                           <td>{{ $entree->id}}</td>
                                            <td>{{ $entree->matricule}}</td>
                                             <td>{{$entree->fournisseur->boutique}}</td>
                                          
                                          
                                            <td>
                                                <span class="status purple"></span>
                                               {{$entree->created_at->format('d/m/y')}}
                                            </td>
                                            <td>
                                                <span class="status orange"></span>
                                               {{$entree->updated_at->format('d/m/y')}}
                                            </td>
                                            <td><h4>
                                                <a href="{{route('entree.show', $entree->id)}}" style="color: blue; text-decoration: none;">
                                                    <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                                               </a></h4>
                                            </td>
                                             <td><h5>
                                              
                                      <a href="{{route('entree.edit', $entree->id)}}" style="color: green; text-decoration: none;"><ion-icon name="pencil-outline"></ion-icon></a></h5>
                                      </td>
                                      <td>
                                      <h5>
                                      <form action="{{route('entree.destroy', $entree->id)}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" style="color: red; border: none; background: white;"><ion-icon name="trash-outline"></ion-icon></button>
                                      </form>
                                             </h5></td>
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