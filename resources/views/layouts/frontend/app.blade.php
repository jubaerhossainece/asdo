<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>আলোকিত সামাজিক উন্নয়ন সংস্থা</title>
    <!-- Bootstrap CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet">
    <!-- Fontawsome-->
    <link
      rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">

    <!-- slick css files -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- custom CSS-->
    <link href="/css/frontend/style.css" rel="stylesheet" />
    @stack('css')
  </head>
    @include('layouts.frontend.partials.header')
    <!--==========
     navbar end
  ===============-->


    @yield('content')

    <!-- footer section -->
    @include('layouts.frontend.partials.footer')
    <!--Jquery js-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--Bootstrap JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>  

    <!-- slick js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>    <!--Custom JS-->
    
    <!-- custom js -->
    <script src="js/frontend/main.js"></script>
    @stack('script')
  </body>
</html>
