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
                                            <td>
                                                <a href="{{route('category.show',$category->id)}}" style="color: blue; text-decoration: none;">Voir Plus
                                                </a>
                                            </td>

                                            <td>
                                            <h6>
                                                <a href="{{route('category.edit', $category->id)}}" style="color: green; text-decoration: none;">Modifier
                                                </a>
                                            </h6>
                                            </td>

                                            <td>
                                            <h6>
                                                <form action="{{route('category.destroy', $category->id)}}" method="POST">
                                                 @csrf
                                                @method('DELETE')
                                                <input type="submit" style="color: red; border: none; background: white;" value="Supprimer">
                                                </form>
                                            </h6>
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