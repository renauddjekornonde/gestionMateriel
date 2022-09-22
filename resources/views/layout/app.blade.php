

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('asset/style.css')}}">

{{-- ============Bootstrap========== --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 


</head>
<body>
@if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif
    
    <!-- =======Start sidebar========= -->
  @include('layout.sidebar')
<!-- =========End sidebar============ -->

<!-- ================Start=============== -->
    <div class="main-content">

        <!-- ============Start header============= -->
       @include('layout.header')
        <!-- ==============End header====================== -->

        <!-- ===================Start main====================== -->
        <main>

            <!-- ===================Start cards================= -->
         @include('layout.cards')
            <!-- ========================End cards======================== -->

            <!-- =================Start contenu=============== -->
           @yield('content')
            <!-- ======================End contenu==================== -->

        </main> 
        <!-- ========================End main==========================  -->
    </div>
    <!-- ====================End============================= -->
      

    <!-- ================Start ionicon============ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- =========================End ionicon================= -->

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>