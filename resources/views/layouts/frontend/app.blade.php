<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/frontend/appfrontend.css')}}">

    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <!--custom css -->
    <link rel="stylesheet" href="{{url('css/frontend/fixed.css')}}">
    <link rel="stylesheet" href="{{url('css/frontend/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/frontend/responsive.css')}}">
    @stack('css')
    <title>ASDO - Alokito Social Development Organisation</title>
</head>
<body>

  <div class="top-section">
    <div class="row logo">
      <div class="col-md-3" id="logo">
        <img src="{{url('assets/images/logo/logo.jpg')}}" alt="">
      </div>
      <div class="col-md-6 org-name">
        <h2 id="org-name">আলোকিত সামাজিক উন্নয়ন সংস্থা</h2>
      </div>
      <div class="col-md-3 donate-btn">
        <button type="button" class="btn" id="donate-btn">
          Donate
          </button>
        
      </div>
    </div>
  </div>
  <!--==========
     navbar started
  ===============-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top sticky-navbar">
    <a class="navbar-brand" href="#">brand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Board of directors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

    <!--==========
     navbar end
  ===============-->


 @yield('content')

<!-- footer section -->
      <footer id="footer">
        <div class="footer-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div id="contacts-footer">
                  <h3>Contacts</h3>
                  <p>
                    <i class="fas fa-home mr-4 white"></i>120 babar street dhanmondi, Dhaka-1207, Bangladesh
                  </p>   
                    <p><i class="fas fa-phone mr-4 white"></i>Phone: +8801754633041</p>
                    
                    <p><i class="fas fa-envelope mr-4 white"></i>Email: jubaerkuet@gmail.com</p>
                  </p>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div id="services-footer">
                  <h4>Services</h4>
                  <a href=""><i class="arrow right"></i> Mobile App Develpoment</a>
                  <a href=""><i class="arrow right"></i> Web Development</a>
                  <a href=""><i class="arrow right"></i> Enterprisr Software Development</a>
                  <a href=""><i class="arrow right"></i> Custom Software Development</a>
                  <a href=""><i class="arrow right"></i> Sotware Architecture Design</a>
                  <a href=""><i class="arrow right"></i> IT Consultancy</a>
                </div>
              </div>
            
              <div class="col-md-3 col-sm-6">
                <div id="platforms-footer">
                  <h4>Platforms</h4>
                  <a href=""><i class="arrow right"></i> Android</a>
                  <a href=""><i class="arrow right"></i> iOS</a>
                  <a href=""><i class="arrow right"></i> Windows</a>
                  <a href=""><i class="arrow right"></i> Hybrid Platform</a>
                </div>
              </div>
            
              <div class="col-md-2 col-sm-6">
                <div id="company-footer">
                  <h4>Company</h4>
                  <a href=""><i class="arrow right"></i> About</a>
                  <a href=""><i class="arrow right"></i> Services</a>
                  <a href=""><i class="arrow right"></i> Platforms</a>
                  <a href=""><i class="arrow right"></i> Career</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6" id="copyright">
                <div class="copyright">
                  All Rights reserved to &copy;ASDO
                </div>
              </div>
              <div class="col-sm-6" id="social-links">
                <div class="social-links">
                  <a href="" class="facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
                  <a href="" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                  <a href="" class="skype"><i class="fab fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>