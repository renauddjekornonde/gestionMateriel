@extends('layout.app')
@section('content')

<!-- <div id="{{url('materiel.show')}}" class="modal">
  <div class="modal_content"> -->

    <!-- <h3>Intitule</h3> <br>

    <h6>{{$materiels->intitule}}</h6> <br>

    <h3>Matricule</h3> <br>

    <h6>{{$materiels->matricule}}</h6> <br>

    <h3>Description</h3> <br>

    <h6>{{$materiels->description}}</h6> <br>

    <h3>Creation</h3> <br>

    <h6>{{$materiels->created_at}}</h6> <br> -->
    
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
                                              
                                        </tr>
                                    </thead>
                                 
                                        <tbody>
                                        <tr>
                                            <td>{{$materiels->intitule}}</td>
                                            <td>{{$materiels->description}}</td>
                                            <td>{{$materiels->matricule}}</td>
                                            <td>
                                                <span class="status purple"></span>
                                               {{$materiels->created_at->format('d/m/y')}}
                                            </td>
                                        </tr>
                                    </tbody>

                                    <a href="#" class="modal_close">&times;</a>

                                      <a href="{{route('materiel.edit', $materiels->id)}}" style="color: blue;">Modifier</a>
                                      <form action="{{route('materiel.destroy', $materiels->id)}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <input type="submit" style="color: red; border: none; background: white;" value="Supprimer">
                                      </form>


                                       
                                </table>
                    </div>
                  </div>
   
  </div>
</div>
@endsection