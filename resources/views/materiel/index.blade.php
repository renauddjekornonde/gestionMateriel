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
                            <h3>Materiel</h3>
                            
                             <a href="{{url('materiel/create')}}">
                             <a href="{{route('materiel.create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
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
                                             <td>Status</td>
                                             <td>Modifier</td>
                                             <td>Supprimer</td>
                                              
                                        </tr>
                                    </thead>
                                   @foreach ($materiels as $materiel)
                                        <tbody>
                                        <tr>
                                            <td>{{$materiel->intitule}}</td>
                                            <td>{{$materiel->description}}</td>
                                            <td>{{$materiel->matricule}}</td>
                                            <td>
                                                <span class="status purple"></span>
                                               {{$materiel->created_at->format('d/m/y')}}
                                            </td>
                                            <td>
                                                <a href="{{route('materiel.show',$materiel->id)}}" style="color: blue; text-decoration: none;">
                                                    {{-- <button style=" background: var(--main-color); border-radius: 9px; color: #fff; font-size: .6rem; padding: .5rem 1rem; border: 1px solid var(--main-color);"> </button> --}}Voir Plus 
                                               </a>
                                            </td>
                                             <td><h6>
                                              

                                      <a href="{{route('materiel.edit', $materiel->id)}}" style="color: green; text-decoration: none;">Modifier</a></h6>
                                      </td>
                                      <td>
                                      <h6>
                                      <form action="{{route('materiel.destroy', $materiel->id)}}" method="POST">
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