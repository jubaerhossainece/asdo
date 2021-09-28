 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/backend/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/backend/member.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body #login{
        display: -ms-flexbox;
        height: 100%;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .card-footer-item{
        display: flex;
        justify-content: center;
    }
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{url('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
 
</html>
