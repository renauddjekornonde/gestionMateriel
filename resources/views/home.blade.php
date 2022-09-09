@extends('layout.app')



{{-- <div class="sb2-2-3"> --}}
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Article</h4>
                        <p>All about students like name, student id, phone, email, country, city and more</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        
                                        <th>Nom</th>
                                        <th>Identifiant</th>
                                        <th>Acheter le</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr> --}}
                                        {{-- <td><span class="list-img"><img src="{{ asset('images/user/1.png') }}" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td> --}}
                                        <!--<td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>united states</td>
                                        <td>ST17241</td>
                                        <td>03 Jun 1990</td>-->
                                        {{-- <td>
                                            <span class="label label-success">Modifier</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">Supprimer</a></td>
                                    </tr>
                                   
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}





@section('content')
   <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Categorie</h3>
                            
                             <a href="{{url('category/ajouter')}}">
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
                             <a href="{{url('fournisseur/ajouter')}}">
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
                            <a href="{{url('materiel/ajouter')}}">
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