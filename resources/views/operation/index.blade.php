@extends('layout.app')

@section('content')
   <div class="recents-grids">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Operation</h3>
                            
                             <a href="{{url('operation/create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Quantite</td>
                                            <td>Type operation</td>
                                      
                                            <td>Date</td>
                                             <td>Status</td>
                                              
                                        </tr>
                                    </thead>
                                   @foreach ($operations as $operation)
                                        <tbody>
                                        <tr>
                                            <td>{{$operation->quantite}}</td>
                                            <td>{{$operation->typeOperation}}</td>
                                            <td>
                                                <span class="status purple"></span>
                                               {{$operation->created_at->format('d/m/y')}}
                                            </td>
                                            <td>
                                                <a href="{{route('operation.show',$operation->id)}}">
                                                    <button style=" background: var(--main-color); border-radius: 9px; color: #fff; font-size: .6rem; padding: .5rem 1rem; border: 1px solid var(--main-color);">Voir Plus  </button>
                                               </a>
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