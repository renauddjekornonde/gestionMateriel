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
                            <h3>Historique</h3>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                    
                                           <td>Materiel</td>
                                             <td>Quantite</td>
                                            <td>Date</td>
                                            <td>Type Operation</td>
                                           
                                           
                                             
                                              
                                        </tr>
                                    </thead>
                                   @foreach ($operations as $operation)
                                        <tbody>
                                        <tr>
                                            <td><?= $operation->materiel->intitule ?></td>
                                            <td><?= $operation->materiel->quantite ?></td>
                                            
                                        <td>
                                                <span class="status purple"></span>
                                               {{$operation->created_at->format('d/m/y')}}
                                        </td>

                                               @if ($operation->typeOperation== 1)
                                                <?= 
                                               
                                                '<td>'; $operation->materiel->quantite=$operation->materiel->quantite + 1;
                                                 ' </td>';
                                            

                                                '<td>';
                                                echo "Entree"; 
                                                ' </td>';
                                            
                                               ?>
                                               @else

                                                <?=
                                                  '<td>';
                                                 $operation->materiel->quantite= $operation->materiel->quantite - 1;
                                                    ' </td>';
                                            

                                                 '<td>';
                                                echo "Sortie";
                                                '  </td>';
                                           
                                               
                                                  ?> 
                                               @endif
                                               </h4>
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