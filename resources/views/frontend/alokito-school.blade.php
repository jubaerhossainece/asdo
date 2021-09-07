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
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Fontawsome-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <!-- custom CSS-->
    <link href="css/alokito-style.css" rel="stylesheet" />
  </head>
  <body>
    <!--Header Start-->
    <header>
      <!--topbar section-->
      <section class="topbar-wrap">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-8">
              <div class="title-head">
                <h2>আলোকিত সামাজিক উন্নয়ন সংস্থা</h2>
              </div>
            </div>
            <div class="col-md-4">
              <div class="top-donate">
                <p><a href="#">Donate</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--brand section-->
      <section class="brand-wrap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 col-lg-3">
              <div class="brand-logo">
                <a href="index.html">
                  <img src="images/logo.jpg" alt="logo-img" />
                </a>
              </div>
            </div>
            <div class="col-md-4 col-lg-6">
              <div class="brand-ads">
                <a href="#">
                  <img src="images/ads-1.jpg" alt="ads-img" />
                </a>
              </div>
            </div>
            <div class="col-md-4 col-lg-3">
              <div class="brand-search">
                <input
                  type="search"
                  placeholder="search"
                  class="form-control"
                />
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Nav bar section-->
      <section class="navbar-wrap">
        <div class="container">
          <div class="row nav-row">
            <nav class="navbar navbar-expand-md col-md-9 col-lg-9">
              <div class="container">
                <a
                  class="navbar-brand"
                  data-bs-toggle="collapse"
                  data-bs-target="#navMenu"
                  href="#"
                >
                  Menu
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navMenu"
                >
                  <i class="fas fa-bars navbar-toggler"></i>
                </button>
                <div class="collapse navbar-collapse" id="navMenu">
                  <div class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Services</a>
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
                          <a href="alokito-school.html">Alokito School</a>
                        </li>
                        <li class="dropown-item">
                          <a href="awerness.html">Awareness Programs</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Board of Directors</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Members</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contacts</a>
                    </li>
                  </div>
                </div>
              </div>
            </nav>
            <div class="social-icon col-md-3 col-lg-3">
              <a href=""><i class="fab fa-facebook-square"></i></a>
              <a href=""><i class="fab fa-twitter-square"></i></a>
              <a href=""><i class="fab fa-youtube-square"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!--Slider Start-->
      <div class="slider-wrap">
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li
              data-bs-target="#mainCarousel"
              data-bs-slide-to="0"
              class="active"
            ></li>
            <li data-bs-target="#mainCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#mainCarousel" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div
                class="slide-image"
                style="background-image: url(images/thumb-3.jpg)"
              ></div>
              <div class="container c-item-box">
                <h1 class="text-center">Slide 01</h1>
                <h6 class="text-center">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </h6>
                <p class="text-center">
                  <a href="" class="btn btn-large btn-primary">About Us</a>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="slide-image"
                style="background-image: url(images/thumb-2.jpg)"
              ></div>
              <div class="container c-item-box">
                <h1 class="text-center">Slide 02</h1>
                <h6 class="text-center">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </h6>
                <p class="text-center">
                  <a href="" class="btn btn-large btn-primary">About Us</a>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="slide-image"
                style="background-image: url(images/thumb-1.jpg)"
              ></div>
              <div class="container c-item-box">
                <h1 class="text-center">Slide 03</h1>
                <h6 class="text-center">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </h6>
                <p class="text-center">
                  <a href="" class="btn btn-large btn-primary">About Us</a>
                </p>
              </div>
            </div>
          </div>
          <a
            href="#mainCarousel"
            class="carousel-control-prev"
            type="button"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a
            href="#mainCarousel"
            class="carousel-control-next"
            type="button"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
      <!--Slider End-->
    </header>
    <!--Header End-->
    <!--Alokito School Page Start-->
    <main>
      <!--School about start-->
      <section class="asAbout-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="asAbout-title">
                <h1>
                  Our school has been present for over 20 years. We make the
                  most of all our students.
                </h1>
                <a href="#" class="asAbout-title-btn">More Info.</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="asAbout-history">
                <h3>Our History</h3>
                <p>
                  Phasellus enim libero, blandit vel sapien vitae, condimentum
                  ultricies magna et. Quisque euismod orci ut. Phasellus enim
                  libero, blandit vel sapien vitae, condimentum ultricies magna
                  et. Quisque euismod orci ut.
                </p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="asAbout-mission">
                <h3>Our Mission</h3>
                <p>
                  Phasellus enim libero, blandit vel sapien vitae, condimentum
                  ultricies magna et. Quisque euismod orci ut. Phasellus enim
                  libero, blandit vel sapien vitae, condimentum ultricies magna
                  et. Quisque euismod orci ut.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--School about end-->

      <!--School Programs Start-->
      <section class="asAcademic-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="row asAcademic-box">
                <h2 class="asAcademic-title">Our Classes</h2>
                <div class="asAcademic-school-box col-md-6">
                  <img src="images/activity-1.jpg" alt="primary" />
                  <ul>
                    <li>
                      <i class="fas fa-school"></i
                      ><span>Play group to class-5</span>
                    </li>
                  </ul>
                  <h3>Primary School</h3>
                  <p>
                    Phasellus enim libero, blandit vel sapien vitae, condimentum
                    ultricies magna et. Quisque euismod orci ut. Phasellus enim
                    libero, blandit vel sapien vitae, condimentum ultricies
                    magna et. Quisque euismod orci ut.
                  </p>
                  <a href="#" class="asAcademic-school-btn">More Info.</a>
                </div>
                <div class="asAcademic-school-box col-md-6">
                  <img src="images/activity-1.jpg" alt="primary" />
                  <ul>
                    <li>
                      <i class="fas fa-school"></i
                      ><span>Class-6 to Class-8</span>
                    </li>
                  </ul>
                  <h3>Heigh School</h3>
                  <p>
                    Phasellus enim libero, blandit vel sapien vitae, condimentum
                    ultricies magna et. Quisque euismod orci ut. Phasellus enim
                    libero, blandit vel sapien vitae, condimentum ultricies
                    magna et. Quisque euismod orci ut.
                  </p>
                  <a href="#" class="asAcademic-school-btn">More Info.</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="asAcademic-sPrograms">
                <h2 class="sPrograms-title">All Programs</h2>
                <div class="sPrograms-box">
                  <img src="images/activity-2.jpg" alt="" />
                  <a href="#" class="sPrograms-txt"> Drawing Programs </a>
                </div>
                <div class="sPrograms-box">
                  <img src="images/activity-2.jpg" alt="" />
                  <a href="#" class="sPrograms-txt"> Drawing Programs </a>
                </div>
                <div class="sPrograms-box">
                  <img src="images/activity-2.jpg" alt="" />
                  <a href="#" class="sPrograms-txt"> Drawing Programs </a>
                </div>
                <div class="sPrograms-box">
                  <img src="images/activity-2.jpg" alt="" />
                  <a href="#" class="sPrograms-txt"> Drawing Programs </a>
                </div>
              </div>
              <div class="asAcademic-keyword">
                <h2 class="keyword-title">Tags</h2>
                <div class="keyword-tag-box">
                  <a href="#" class="keyword-tag-btn">Teachers</a>
                  <a href="#" class="keyword-tag-btn">Classes</a>
                  <a href="#" class="keyword-tag-btn">Stuff</a>
                  <a href="#" class="keyword-tag-btn">Students</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--School Programs End-->

      <!--Gallery Start-->
      <section class="asGallery-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="asGallery-title">Gallery</h2>
              <div class="asGallery-box">
                <ul class="nav nav-pills asGallery-nav">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      data-bs-toggle="pill"
                      href="#asGallery-student"
                      >Students
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-bs-toggle="pill"
                      href="#asGallery-teachers"
                      >Teachers
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-bs-toggle="pill"
                      href="#asGallery-Stuffs"
                      >Stuffs
                    </a>
                  </li>
                </ul>
                <div class="asGallery-tab tab-content">
                  <div id="asGallery-student" class="tab-pane active">
                    <div class="asGallery-tab-box">
                      <div class="asGallery-img-box">
                        <img src="images/activity-1.jpg" alt="" />
                      </div>
                      <div class="asGallery-img-box">
                        <img src="images/activity-2.jpg" alt="" />
                      </div>
                      <div class="asGallery-img-box">
                        <img src="images/activity-3.jpg" alt="" />
                      </div>
                    </div>
                  </div>
                  <div id="asGallery-teachers" class="tab-pane">
                    <div class="asGallery-tab-box">
                      <div class="asGallery-img-box">
                        <img src="images/activity-2.jpg" alt="" />
                      </div>
                      <div class="asGallery-img-box">
                        <img src="images/activity-1.jpg" alt="" />
                      </div>
                      <div class="asGallery-img-box">
                        <img src="images/activity-3.jpg" alt="" />
                      </div>
                    </div>
                  </div>
                  <div id="asGallery-Stuffs" class="tab-pane">
                    <div class="asGallery-tab-box">
                      <div class="asGallery-img-box">
                        <img src="images/activity-3.jpg" alt="" />
                      </div>
                      <div class="asGallery-img-box">
                        <img src="images/activity-2.jpg" alt="" />
                      </div>
                      <div class="asGallery-img-box">
                        <img src="images/activity-1.jpg" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="asEvent-title">School Events</h2>
              <div class="asEvent-area">
                <div class="asEvent-box col-md-6">
                  <div class="asEvent-img-box">
                    <div class="asEvent-date overlay-box">
                      <span>31</span>Jan
                    </div>
                    <a href="#"> <img src="images/activity-1.jpg" /></a>
                  </div>
                  <div class="asEvent-txt-box">
                    <h3 class="asEvent-txt-title">
                      <a href="#">Insure Clean Water To Africa</a>
                    </h3>
                    <ul class="asEvent-txt-list">
                      <li><i class="fas fa-clock"></i>8:00 am-5:00 pm</li>
                      <li>
                        <i class="fas fa-map-marker-alt"></i>Sripur, Dhaka
                      </li>
                    </ul>
                    <p>
                      Lorem ipsum dolor sit amet, quo odio atqui tamquam eu, duo
                      ex amet elitr. Ne essent feugiat vim, et soluta reprimique
                      instructior mel. Munere ...
                    </p>
                    <a class="asEvent-txt-link btn"
                      >View Details <span class="fa fa-angle-right"></span
                    ></a>
                  </div>
                </div>
                <div class="asEvent-box col-md-6">
                  <div class="asEvent-img-box">
                    <div class="asEvent-date overlay-box">
                      <span>31</span>Jan
                    </div>
                    <a href="#"> <img src="images/activity-1.jpg" /></a>
                  </div>
                  <div class="asEvent-txt-box">
                    <h3 class="asEvent-txt-title">
                      <a href="#">Insure Clean Water To Africa</a>
                    </h3>
                    <ul class="asEvent-txt-list">
                      <li><i class="fas fa-clock"></i>8:00 am-5:00 pm</li>
                      <li>
                        <i class="fas fa-map-marker-alt"></i>Sripur, Dhaka
                      </li>
                    </ul>
                    <p>
                      Lorem ipsum dolor sit amet, quo odio atqui tamquam eu, duo
                      ex amet elitr. Ne essent feugiat vim, et soluta reprimique
                      instructior mel. Munere ...
                    </p>
                    <a class="asEvent-txt-link btn"
                      >View Details <span class="fa fa-angle-right"></span
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Gallery End-->

      <!--Notice start-->
      <section class="asNotice-wrap">
        <div class="container">
          <div class="row asNotice-row">
            <div class="col-md-6">
              <div class="asNotice-donate-box">
                <h2>Donate for Our School</h2>
                <a href="#" class="asNotice-donate-btn">Donate Here</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="asNotice-addmission-box">
                <h2>Addmission Going on</h2>
                <a href="#" class="asNotice-addmission-btn">Addmission</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Notice end-->
    </main>
    <!--Alokito School Page End-->

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
            <ul class="ft-social">
              <a href="#"><i class="fab fa-facebook-square"></i></a>
              <a href="#"><i class="fab fa-twitter-square"></i></a>
              <a href="#"><i class="fab fa-youtube-square"></i></a>
            </ul>
            <a class="btn btn-dark" href="#" role="button">Donate Now</a>
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
                <span> Sripur, Magura, Bangladesh </span>
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
    <script
      src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
      integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
      crossorigin="anonymous"
    ></script>
    <!--Bootstrap JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <!--Custom JS-->
    <script src="js/main,js"></script>
  </body>
</html>
