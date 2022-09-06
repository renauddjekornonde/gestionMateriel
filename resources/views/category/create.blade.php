@extends('layout.app')

@section('content')
   <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3>Category</h3>
                            
                             <a href="{{url('category/ajouter')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div> --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                {{-- <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Intitule</td>
                                            <td>Date</td>
                                             <td>Status</td>
                                              
                                        </tr>
                                    </thead>
                                   @foreach ($categories as $category)
                                        <tbody>
                                        <tr>
                                            <td>{{$category->intitule}}</td>
                                        
                                          
                                            <td>
                                                <span class="status purple"></span>
                                               {{$category->created_at->format('d/m/y')}}
                                            </td>
                                            <td>
                                                <a href="{{route('category.show',$category->id)}}">
                                                    <button style=" background: var(--main-color); border-radius: 9px; color: #fff; font-size: .6rem; padding: .5rem 1rem; border: 1px solid var(--main-color);">Voir Plus  </button>
                                               </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                       
                                </table> --}}

                                 <center>
        <fieldset style="width: 25%;">
            <form action="{{route('category.store')}}" method="POST">
                <h1>Ajouter Category</h1>
                <hr>
                <table>
                    <tr>
                        <td>Nom</td><td><input type="text" name="name" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Adresse</td><td><input type="text" name="adresse" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Telephone</td><td><input type="text" name="tel" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Email</td><td><input type="mail" name="email" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Mot de passe</td><td><input type="password" name="pwd1" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td>Confirmer</td><td><input type="password" name="pwd2" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td colspane="2"><input type="submit" id="submit" name="" value="Soumetre"><br><br></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
                    </div>
                          
                </div>
             </div>
         </div>
    </div>
@endsection