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
    <link href="css/contact-style.css" rel="stylesheet" />
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

    <!--banner Start-->
    <section class="page-banner">
      <div class="page-banner-img" style="background: url('images/about_thumb.jpg') center center/cover no-repeat local;">
      </div>
      <div class="container">
        <div class="hero-text" >
          <h1>Contact</h1>
          <h4><a href="index.html">Home</a><span>/Contact</span></h4>
          <a href="" class="mt-3 btn btn-large donate-btn">Donate Now</a>
        </div>
      </div>
    </section>
    <!--banner End-->
    
    <!--Contact Page Start-->
    <section class="contact-wrap">
      <div class="container-fluid">
        <div class="row g-0">
          <!--Contact form-->
          <div class="col-md-6">
            <div class="form-wrap">
              <h3 class="form-header">Contact Us</h3>
              <form
                method="POST"
                id="contactForm"
                name="contactForm"
                class="contactForm"
              >
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="label" for="name">Full Name</label>
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder="Name"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="label" for="email">Email Address</label>
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="label" for="subject">Subject</label>
                      <input
                        type="text"
                        class="form-control"
                        name="subject"
                        id="subject"
                        placeholder="Subject"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="label" for="#">Message</label>
                      <textarea
                        name="message"
                        class="form-control"
                        id="message"
                        cols="30"
                        rows="4"
                        placeholder="Message"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="submit" value="Send Message" class="btn common-btn"/>
                      <div class="submitting"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

        <!--Google Map-->
          <div class="col-md-6">          
            <div class="location-map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14636.928978818369!2d89.41171641881724!3d23.488142885365583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe567274bd4605%3A0xb9b2a7ea3735a68b!2sMagura%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1625237569843!5m2!1sen!2sus"
                width="100%"
                height="350"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              >
              </iframe>
            </div>
          </div>
        </div>

        <div class="row">
          <!--Get In Touch-->
          <div class="col-md-12 getin-touch">
            <div class="row equal row-eq-height">
              <div class="col-md-12 getin-touch-header">
                <h3 class="">Get In Touch</h3>
              </div>
              <div class="col-md-4">
                <div class="address">
                  <i class="fas fa-map-marker-alt"></i>
                  <h3>Main Address</h3>
                  <span>Village & Post: Sreepur, Upazila: Sreepur, District- Magura,
                    Bangladesh
                  </span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="email">
                  <i class="fas fa-envelope"></i>
                  <h3>Email Addresses</h3>
                  <p>info@asdo.org</p>
                  <p>alokito-jewel@asdo.org</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="phone">
                  <i class="fas fa-phone"></i>
                  <h3>Phone Numbers</h3>
                  <p>+8801XXXXXXXXX</p>
                  <p>+8801XXXXXXXXX</p>
                </div>
              </div>
            </div>
          </div>
          <!--Get In Touch-->
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

