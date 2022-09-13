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
                                            <td><h4>
                                                <a href="{{route('operation.show',$operation->id)}}">
                                                   <ion-icon name="ellipsis-horizontal-outline"></ion-icon> 
                                               </a></h4>
                                            </td>
                                             <td><h5>
                                      <a href="{{route('operation.edit', $operation->id)}}" style="color: blue; text-decoration: none;"><ion-icon name="pencil-outline"></ion-icon></a></h5>
                                      </td>
                                      <td>
                                      <h5>
                                      <form action="{{route('operation.destroy', $operation->id)}}" method="POST">
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