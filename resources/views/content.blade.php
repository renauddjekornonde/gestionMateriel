@extends('layout.app')

@section('content')

<div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Article</h4>
                        <p>All about students like name, student id, phone, email, country, city and more</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        
                                        <th>Nom</th>
                                        <th>Identifiant</th>
                                        <th>Acheter le</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        {{-- <td><span class="list-img"><img src="{{ asset('images/user/1.png') }}" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td> --}}
                                        <!--<td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>united states</td>
                                        <td>ST17241</td>
                                        <td>03 Jun 1990</td>-->
                                        <td>
                                            <span class="label label-success">Modifier</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">Supprimer</a></td>
                                    </tr>
                                   
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
