@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/alokito-style.css" rel="stylesheet" />
@endpush
@section('content')
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
@push('script')
  
@endpush    
@endsection