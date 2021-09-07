<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
  </head>
  <body>
    <!--Header Start-->
    <header>
       <!--Navbar Start-->
      <section class="navbar-wrap">
        <div class="container">
          <div class="row nav-row">  
            <nav class="navbar navbar-expand-md ">
                <div class="nav-logo ">
                  <a href="index.html">
                    <img src="images/logo.jpg" alt="logo-img" />
                  </a>
                </div>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navMenu"
                >
                  <i class="fas fa-bars navbar-toggler"></i>
                </button>
                <div class="collapse navbar-collapse" id="navMenu">
                  <div class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                      >
                        Programs
                      </a>
                      <ul class="dropdown-menu">
                        <li class="dropown-item">
                          <a href="alokito-school.html" class="dropdown-link">Alokito School</a>
                        </li>
                        <li class="dropown-item">
                          <a href="awerness.html" class="dropdown-link">Awareness Programs</a>
                        </li>
                      </ul>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="#">Board of Directors</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contacts</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="login.html">Login</a>
                    </li>
                  </div>
                </div>
            </nav>
          </div>
        </div>
      </section>
    </header>
    
    <section id="form-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-5 bg-image" style="background: url('images/signin/signin.jpg') center center / cover no-repeat;">
            <div class="login-overlay"></div>
          </div>
          <div class="card col-md-6 col-lg-7 col-sm-12 mx-auto login-form">
            <div class="card-header">
              <h2>Sign up</h2>
              <h6>Become a <span class="alokito-member">alokito member</span></h6>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                  <label for="email" class="form-label">Your name</label>
                  <input type="text" id="email" name="name" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="email" class="form-label">Email/Phone</label>
                  <input type="text" id="email" name="identified" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" >
                </div>

                <div class="form-group">
                  <label for="password" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" name="confirm_password" id="password" >
                </div>

                <div class="form-group submit">
                  <button type="submit" class="btn common-btn" >
                    <i class="fas fa-sign-in-alt "></i>
                    <span class="ml-3">Sign up</span>
                  </button>
                </div>
              </form>
            </div>

            <div class="card-footer">
              <span class="text-muted">Already have an account?</span> 
              <a href="login.html">Sign in</a>.
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--Contact Page End-->
<!--Footer Start-->
    <section class="footer-wrap">
      <div class="container">
        <div class="row">
          <!--Footer Brand start-->
          <div class="footer-brand col-md-6 col-lg-3">
            <h4 class="footer-heading">
              <a href="#">আলোকিত সামাজিক উন্নয়ন সংস্থা</a>
            </h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
              molestias sunt eius autem dolor provident nihil hic odio.
            </p>
            <div class="ft-social">
              <a href="#" class="fb-link"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="yt-link"><i class="fab fa-youtube"></i></a>
              <a href="#" class="tw-link"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <!--Footer Brand end-->
          <!--Footer News Start-->
          <div class="footer-news col-md-6 col-lg-3">
            <h4 class="footer-heading">LATEST NEWS</h4>
            <div class="f-news d-flex">
              <img src="images/f-news.jpg" alt="f-news" />
              <p class="f-news-txt">
                <a href="#">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </a>
              </p>
            </div>
            <div class="f-news d-flex">
              <img src="images/f-news.jpg" alt="f-news" />
              <p class="f-news-txt">
                <a href="#">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </a>
              </p>
            </div>
          </div>
          <!--Footer News End-->
          <!--Footer Menu Start-->
          <div class="footer-menu col-md-6 col-lg-3">
            <h4 class="footer-heading">QUICK LINK</h4>
            <ul class="f-menu-list">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Alokito School</a></li>
              <li><a href="#">Board of Director</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Awareness Program</a></li>
            </ul>
          </div>
          <!--Footer Menu End-->
          <!--Footer Address Start-->
          <div class="footer-address col-md-6 col-lg-3">
            <h4 class="footer-heading">GET IN TOUCH</h4>
            <ul class="f-address-link">
              <li>
                <i class="fas fa-map-marker-alt"></i>
                <span> Sreepur, Magura, Bangladesh </span>
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <span>info@asd.org</span>
              </li>
              <li>
                <i class="fas fa-phone"></i>
                <span>+8801XXXXXXXXX</span>
              </li>
            </ul>
          </div>
          <!--Footer Address End-->
        </div>
      </div>
    </section>
    <!--Footer End-->
    <!--Footer Copyright Start-->
    <section class="copyright-wrap">
      <div class="container">
        <div class="row">
          <div class="copyright-txt col-md-6">
            <p>
              Copyright © <a href="#">আলোকিত সামাজিক উন্নয়ন সংস্থা</a> All
              Rights Reserved
            </p>
          </div>
          <div class="develope-txt col-md-6">
            <p>Developed By<a href="#"> MIEN IT</a></p>
          </div>
        </div>
      </div>
    </section>
    <!--Footer Copyright End-->
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
    <script src="js/main.js"></script>
  </body>
</html>

