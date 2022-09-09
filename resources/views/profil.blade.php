@extends('layout.app')
@section
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon espace</title>
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
rel="stylesheet"
/>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 bg-info rounded-left">
                        <div class="card-block text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                            <h2 class="font-weight-bold mt-4"> Cheikh Tidiane Boiro</h2>
                            <p>admin</p>
                            <i class="far fa-edit fa-2x mb-4"></i>
                        </div>
                    </div>
                    <div class="col-sm-8 bg-white rounder-right">
                        <h3 class="mt-3 test-center">Informatioms</h3>
                        <hr class="badge-primary mt-0 w-25">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Email:</p>
                                <h6 class="text-muted">tidianeboiro@supdeco.edu.sn</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Telephone:</p>
                                <h6 class="text-muted">+221779946969</h6>
                            </div>
                        </div>
                        <h4 class="mt-3">Projects</h4>
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Recent</p>
                                <h6 class="text-muted">School web</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Most viwed</p>
                                <h6 class="text-muted">Dinoter Hussan</h6>
                            </div>
                        </div>
                        <hr class="bg-primary">
                        <ul class="list-unstyled d-flex justify-content-content-center mt-4">
                            <li><a href="#"><i class="fab fa-facebook-f px-3 h4 text-info"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube px-3 h4 text-info"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter px-3 h4 text-info"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

@endsection