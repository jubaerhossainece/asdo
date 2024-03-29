<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="{{url('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/libs/css/style.css')}}">
    
    <!--custom css -->
    <link rel="stylesheet" href="{{url('css/backend/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/preloader.css')}}">
    <!-- <link href="{{url('css/frontend/style.css')}}" rel="stylesheet" /> -->
    <link rel="stylesheet" href="{{url('css/backend/volunteer.css')}}">

    <style type="text/css">
        .ms-auto{
            margin-left: auto !important;
        }
    </style>
    @stack('css')
    <title>ASDO - Alokito Social Development Organisation</title>
</head>

    <div class="loadingio-spinner" id="preloader">
      <img src="{{url('/assets/images/preloader.gif')}}">
    </div>

        <!-- navbar part -->
        @include('layouts.user.partials.header')
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        
        <!--sidebar part -->
        @include('layouts.user.partials.voluntr-sidebar')
        
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content ">
            <!-- taost notification blade file added below -->
            @include('layouts.user.partials.toast')

                <!--main content below here -->
                @yield('content')

                <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="card footer" id="footer">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                         Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
            <!-- </div> -->
            </div>
                
                
            
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.5.1 -->
    <script src="{{url('js/app.js')}}"></script>
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <!--   <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script> -->
    <script src="{{url('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- <script src="{{url('assets/libs/js/main-js.js')}}"></script> -->
    <script src="{{url('js/script.js')}}"></script>
    @stack('script')
     <script>
      $(window).on("load", function(){
        $('#preloader').fadeOut();
      })
    </script>
</body>
 
</html>