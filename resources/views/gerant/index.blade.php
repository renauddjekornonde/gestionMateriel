@extends('layouts.app')

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
                                             <td>Salle</td>
                                            <td>Date</td>
                                             
                                           
                                             
                                              
                                        </tr>
                                    </thead>
                                   @foreach ($operations as $affectation)
                                        <tbody>
                                        <tr>
                                            <td><?= $affectation->materiel->intitule ?></td>
                                            <td><?= $affectation->materiel->quantite ?></td>
                                            @foreach($affectations as $affectatio)
                                                <td><?= $affectatio->salle->numeroSalle ?></td>
                                            @endforeach
                                        <td>
                                                <span class="status purple"></span>
                                               {{$affectation->created_at->format('d/m/y')}}
                                        </td>
                                        {{-- <td><h4>
                                                <a href="{{route('affectation.show',$affectation->id)}}"  style="color: blue; text-decoration: none;">
                                                    <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                                               </a>
                                               </h4>
                                            </td> --}}
                                       
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