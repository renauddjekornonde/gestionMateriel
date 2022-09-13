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
                            <h3>Category</h3>
                            
                             {{-- <a href="{{url('category/create')}}"> --}}
                            <a href="{{route('category.create')}}">
                            <button> <ion-icon name="add-sharp" style="font-size: 1.5rem"></ion-icon></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                           <td>Intitule</td>
                                            <td>Date</td>
                                             <td>Status</td>
                                             <td>Modifier</td>
                                             <td>Suprimer</td>
                                        </tr>
                                    </thead>
                                   @foreach ($categories as $category)
                                        <tbody>
                                        <tr>
                                            <td>{{$category->intitule}}</td>
                                            <td>
                                                <span class="status purple"></span>
                                                {{$category->created_at->format('d/m/y')}}
                                            </td>
                                            <td><h4>
                                                <a href="{{route('category.show',$category->id)}}" style="color: blue; text-decoration: none;"><ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                                                </a></h4>
                                            </td>

                                            <td>
                                            <h5>
                                                <a href="{{route('category.edit', $category->id)}}" style="color: green; text-decoration: none;"><ion-icon name="pencil-outline"></ion-icon>
                                                </a>
                                            </h5>
                                            </td>

                                            <td>
                                            <h5>
                                                <form action="{{route('category.destroy', $category->id)}}" method="POST">
                                                 @csrf
                                                @method('DELETE')
                                                <button type="submit" style="color: red; border: none; background: white;"><ion-icon name="trash-outline"></ion-icon></button>
                                                </form>
                                            </h5>
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