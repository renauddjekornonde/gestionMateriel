@extends('layout.app')

@section('content')
   <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Affectation</h3>
{{--                             
                             <a href="{{url('affectation/create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                    
                                           <td>Materiel</td>
                                             <td>Quantite</td>
                                            <td>Date</td>
                                             <td>Status</td>
                                             <td>Modifier</td>
                                             <td>Supprimer</td>
                                             
                                              
                                        </tr>
                                    </thead>
                                   @foreach ($affectations as $affectation)
                                        <tbody>
                                        <tr>
                                            <td>Nom materiel</td>
                                            <td>Quantite materiels</td>
                                            
                                            <td>
                                                <span class="status purple"></span>
                                               {{$affectation->created_at->format('d/m/y')}}
                                            </td>
                                            <td><h4>
                                                <a href="{{route('gerant.show',$affectation->id)}}"  style="color: blue; text-decoration: none;">
                                                    <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                                               </a></h4>
                                            </td>
                                            <td><h5>
                
                                      <a href="{{route('affectation.edit', $affectation->id)}}" style="color: green; text-decoration: none;"><ion-icon name="pencil-outline"></ion-icon></a></h5>
                                      </td>
                                      <td>
                                      <h5>
                                      <form action="{{route('affectation.destroy', $affectation->id)}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          {{-- <input type="submit" style="color: red; border: none; background: white;" value="Supprimer"> --}}
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