@extends('layout.app')

@section('content')
   <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Utilisateur</h3>
                            
                             <a href="{{url('user/create')}}">
                                <a href="{{route('user.create')}}">
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
                                            <td>Email</td>
                                            <td>Status</td>
                                            <td>Modifier</td>
                                            <td>Supprimer</td>
                                         
                                        </tr>
                                    </thead>
                                   @foreach ($users as $user)
                                        <tbody>
                                        <tr>
                                            <td>{{$user->nom}}</td>
                                            <td>{{$user->prenom}}</td>
                                            <td>{{$user->telephone}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <span class="status purple"></span>
                                               {{$user->created_at->format('d/m/y')}}
                                            </td>
                                            <td>
                                                <a href="{{route('user.show',$user->id)}}" style="color: blue; text-decoration: none;">
                                                    Voir Plus 
                                               </a>
                                            </td>
                                            <td><h6>

                                                <a href="{{route('user.edit', $user->id)}}" style="color: green; text-decoration: none;">Modifier</a></h6>
                                                </td>
                                                <td>
                                                <h6>
                                                <form action="{{route('user.destroy', $user->id)}}" method="POST">
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