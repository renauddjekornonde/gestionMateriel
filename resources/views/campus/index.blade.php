@extends('layout.app')

@section('content')
   <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Campus</h3>
                            
                             <a href="{{url('campus/create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Intitule</td>
                                            <td>Lieu</td>
                                            <td>Telephone</td>
                                            <td>Date</td>
                                             <td>Status</td>
                                             <td>Modifier</td>
                                             <td>Supprimer</td>
                                              
                                        </tr>
                                    </thead>
                                   @foreach ($campuses as $campu)
                                        <tbody>
                                        <tr>
                                            <td>{{$campu->intitule}}</td>
                                            <td>{{$campu->lieu}}</td>
                                            <td>{{$campu->telephone}}</td>
                                            <td>
                                                <span class="status purple"></span>
                                               {{$campu->created_at->format('d/m/y')}}
                                            </td>
                                            <td>
                                                <a href="{{route('campus.show',$campu->id)}}" style="color: blue; text-decoration: none;">
                                                   
                                                    Voir Plus
                                               </a>
                                            </td>
                                             <td><h6>
                                              

                                      <a href="{{route('campus.edit', $campu->id)}}" style="color: green; text-decoration: none;">Modifier</a></h6>
                                      </td>
                                      <td>
                                      <h6>
                                      <form action="{{route('campus.destroy', $campu->id)}}" method="POST">
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