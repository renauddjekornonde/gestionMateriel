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
                                            <td><h4>
                                                <a href="{{route('user.show',$user->id)}}" style="color: blue; text-decoration: none;">
                                                    <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                                               </a></h4>
                                            </td>
                                            <td><h5>

                                                <a href="{{route('user.edit', $user->id)}}" style="color: green; text-decoration: none;"><ion-icon name="pencil-outline"></ion-icon></a></h5>
                                                </td>
                                                <td>
                                                <h5>
                                                <form action="{{route('user.destroy', $user->id)}}" method="POST">
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