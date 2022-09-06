@extends('layout.app')

@section('content')
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
                                                <a href="{{route('fournisseur.show',$fournisseur->id)}}">
                                                    <button style=" background: var(--main-color); border-radius: 9px; color: #fff; font-size: .6rem; padding: .5rem 1rem; border: 1px solid var(--main-color);">Voir Plus  </button>
                                               </a>
                                            </td>
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