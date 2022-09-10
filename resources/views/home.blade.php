@extends('layout.app')

@section('content')
   <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Categorie</h3>
                            
                             <a href="{{url('category/create')}}">
                            <button>Ajouter <span class="las la-arrow-right"></span></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nom</td>
                                            <td>Date</td>
                                            {{-- <td>Date</td> --}}
                                        </tr>
                                    </thead>
                                   @foreach ($categories as $category)
                                       <tbody>
                                        <tr>
                                            <td>{{$category->intitule}}</td>
                                            {{-- <td>UI Team</td> --}}
                                            <td>
                                                <span class="status purple"></span>
                                                {{$category->created_at->format('d/m/y')}}
                                            </td>
                                        </tr>
                                       
                                        
                                    </tbody>
                                   @endforeach
                                       
                                </table>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Fournisseur</h3>
                             <a href="{{url('fournisseur/create')}}">
                            <button>Ajouter <span class="las la-arrow-right"></span></button>
                            </a>
                        </div>

                        @foreach ($fournisseurs as $fournisseur)
                             <div class="card-body">
                           
                            <div class="customer">
                                <div class="contact">
                                <h4>
                                {{$fournisseur->boutique}}
                                </h4><br>
                                    {{-- <img src="img/2.png" width="40px" height="40px" alt=""> --}}
                                    <div>
                                        <small>{{$fournisseur->nom}}
                                        {{$fournisseur->prenom}}</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class=""><ion-icon name="logo-facebook"></ion-icon></span>
                                    <span class=""><ion-icon name="logo-whatsapp"></ion-icon></span>
                                    <span class=""><ion-icon name="call-outline"></ion-icon></span>
                                </div>
                            </div>

                            

                            

                        </div>
                        @endforeach
                       
                    </div>
                </div>

                  <div style="position:flex" class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Materiel</h3>
                            <a href="{{url('materiel/create')}}">
                            <button>Ajouter <span class="las la-arrow-right"></span></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Intitule</td>
                                            <td>Description</td>
                                            <td>Matricule</td>
                                            <td>Date</td>
                                        </tr>
                                    </thead>
                                    @foreach ($materiels as $materiel)
                                        <tbody>
                                        <tr>
                                            <td>{{$materiel->intitule}}</td>
                                            <td>{{$materiel->description}}</td>
                                            <td>{{$materiel->matricule}}</td>
                                            {{-- @foreach ($operations as $operation)
                                                <td>{{$operation->materiel->quantite}}</td>
                                            @endforeach --}}
                                            
                                            <td>
                                                <span class="status purple"></span>
                                               {{$materiel->created_at->format('d/m/y')}}
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