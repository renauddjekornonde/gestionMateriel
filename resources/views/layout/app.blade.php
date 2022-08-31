<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 May 2022 17:27:58 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Gestion de materiels</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- plugin css -->
        <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css') }}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

@include('layout.header')

           @include('layout.left_sidebar')


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

@include('layout.title')

@yield('content')
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center p-3">

                    <h5 class="m-0 me-2">Theme Customizer</h5>

                    <!-- <a href="javascript:void(0);" class="right-bar-toggle ms-auto"> -->
                        <!-- <i class="mdi mdi-close noti-icon"></i> -->
                    </a>
                </div>

                <!-- Settings -->
 @include('layout.settings')
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="https://themesbrand.com/minia/layouts/assets/libs/jquery/jquery.min.js"></script>
        <script src="https://themesbrand.com/minia/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://themesbrand.com/minia/layouts/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="https://themesbrand.com/minia/layouts/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="https://themesbrand.com/minia/layouts/assets/libs/node-waves/waves.min.js"></script>
        <script src="https://themesbrand.com/minia/layouts/assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="https://themesbrand.com/minia/layouts/assets/libs/pace-js/pace.min.js"></script>

        <!-- apexcharts -->
        <script src="https://themesbrand.com/minia/layouts/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="https://themesbrand.com/minia/layouts/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="https://themesbrand.com/minia/layouts/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="https://themesbrand.com/minia/layouts/assets/js/pages/dashboard.init.js"></script>

        <script src="https://themesbrand.com/minia/layouts/assets/js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/minia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 May 2022 17:33:58 GMT -->
</html>
