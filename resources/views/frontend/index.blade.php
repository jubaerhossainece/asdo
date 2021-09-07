@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/index.css" rel="stylesheet" />
@endpush
@section('content')
    <!-- news ticker section -->
    <section id="news">
      <div class="row">
          <div class="col-md-12">
              <div class="d-flex justify-content-between align-items-center breaking-news">
                  <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center news-title py-2 text-white px-1 news">
                    <span class="d-flex align-items-center">&nbsp;Latest news</span>
                  </div>
                  <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> 
                    <a href="#">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </a> 
                    <span class="dot"></span> 
                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> 
                    <span class="dot"></span> 
                    <a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a> 
                  </marquee>
              </div>
          </div>
      </div>
    </section>
    <!--Slider Start-->
    <section>
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
                style="background-image: url('{{asset('assets/images/frontend/sliders/slider-1.jpg')}}')"
              ></div>
              <div class="container c-item-box">
                <div class="col-md-7 col-sm-8 slider-title">
                  <h1>Lorem ipsum dolor, sit amet consectetur.</h1>
                  <h6>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione odio magnam reprehenderit 
                    vitae totam quidem doloremque id reiciendis commodi tempore, repudiandae voluptatem 
                    quibusdam esse laudantium quia tenetur fuga culpa aliquam harum inventore non eius animi 
                    placeat. Magni voluptatem dolore eaque eius, voluptate sed architecto, omnis blanditiis 
                    excepturi enim nostrum officia?
                  </h6>
                  <p>
                    <a href="" class="btn btn-large donate-btn">Donate</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="slide-image"
                style="background-image: url('{{asset('assets/images/frontend/sliders/slider-2.jpg')}}')"
              ></div>
              <div class="container c-item-box">
                <div class="col-md-7 col-sm-8 slider-title">
                  <h1>Lorem ipsum dolor, sit amet con elit.</h1>
                  <h6>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione odio magnam reprehenderit 
                    vitae totam quidem doloremque id reiciendis commodi tempore, repudiandae voluptatem 
                    quibusdam esse laudantium quia tenetur fuga culpa aliquam harum inventore non eius animi 
                    placeat. Magni voluptatem dolore eaque eius, voluptate sed architecto, omnis blanditiis 
                    excepturi enim nostrum officia?
                  </h6>
                  <p>
                    <a href="" class="btn btn-large donate-btn">Donate</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="slide-image"
                style="background-image: url('{{asset('assets/images/frontend/sliders/slider-3.jpg')}}')"
              ></div>
              <div class="container c-item-box">
                <div class="col-md-7 col-sm-8 slider-title">
                  <h1>Lorem ipsum dolor, snsectetur adipisicing elit.</h1>
                  <h6>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, 
                    nemo veniam! Eum dolor officiis natus qui voluptatem deserunt 
                    ipsum aspernatur! Tenetur labore, praesentium nobis iure repudiandae facere! Odit corrupti 
                    quam deserunt omnis! In saepe nihil mollitia rerum aperiam ea sint officia rem dolore! 
                    Temporibus reiciendis quasi ipsum ducimus facere repellat libero iste exercitationem! 
                    Nobis eos consequatur, aut accusantium perferendis at voluptates sed maiores odit in! Unde 
                  </h6>
                  <p>
                    <a href="" class="btn btn-large donate-btn">Donate</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <a href="#mainCarousel" class="carousel-control-prev" type="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a
            href="#mainCarousel" class="carousel-control-next" type="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
      </section>
      <!--Slider End-->
    </header>
    <!--Header End-->

    <!--Content Area start-->

    
    <!-- our mission section -->
    <section class="our-mission">
      <div class="container">
        <div class="header row">
          <h1>Our Mission</h1>
          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi alias quasi reprehenderit 
            natus sequi laboriosam incidunt commodi voluptas aut magnam!</span>
        </div>
        <div class="content row">
          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-utensils"></i>
              <h2>Food</h2>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing sit amet consectetur adipisicing.</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-medkit"></i>
              <h2>Treatment</h2>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing sit amet consectetur adipisicing.</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-home"></i>
              <h2>Shelter</h2>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing sit amet consectetur adipisicing.</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-book-reader"></i>
              <h2>Education</h2>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing sit amet consectetur adipisicing.</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Volunteer Section-->
    <section class="hMember-wrap">
      <div class="container-fluid">
        <div class="hMember-box row">
          <div class="col-md-6 text">
            <h1 class="hMember-head text-center">Become a <span class="alokito-member">alokito member</span></h1>
            <p class="hMember-txt text-center">
              Join our alokito community and become a real human being and make the world smile !!
            </p>
            <div class="hMember-btn text-center mt-2">
              <a href="contact.html" role="button" class="common-btn">Registration</a>
            </div>
          </div>

          <div class="col-md-6 image" style="background: url('assets/images/frontend/signin/donor.jpg') center center / cover no-repeat; height: 400px;">
            <h1>Join Our Community</h1>
            <div class="join-member-overlay"></div>
          </div>
        </div>
      </div>
    </section>

    <!--Home About Section-->
    <!-- <section class="hAbout-wrap">
      <div class="container">
        <div class="row">
          <h1 class="hAbout-title">About us</h1>
          <div class="col-lg-7">
            <div class="hAbout-txt row gx-3">
              <div class="hAbout-txt-box col-md-6">
                <h4>Who We Are?</h4>
                <p>
                  Huminity is the largest Jewish charity in the UK supporting
                  vulnerable children and their families, children with special
                  educational needs and people with learning disabilities.
                </p>
              </div>
              <div class="hAbout-txt-box col-md-6">
                <h4>Who We Are?</h4>
                <p>
                  Huminity is the largest Jewish charity in the UK supporting
                  vulnerable children and their families, children with special
                  educational needs and people with learning disabilities.
                </p>
              </div>
            </div>
            <div class="hAbout-author row">
              <div class="hAbout-author-img col-md-2">
                <img src="images/author-1.jpg" alt="author img" />
              </div>
              <div class="hAbout-author-bio col-md-6">
                <h4>Jhone Michale</h4>
                <p>CEO & Founder of CharityPro</p>
              </div>
              <div class="hAbout-author-sig col-md-4">
                <img src="images/signature.png" alt="signature" />
              </div>
            </div>
            <div class="hAbout-button">
              <a href="" class="common-btn">MORE INFO</a>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="hAbout-video">
              <iframe
                src="https://www.youtube.com/embed/2DdDE4i5eJE"
                frameborder="0"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="hActivity-wrap">
      <div class="container recent-activity-container">
        <div class="row hActivity-title-box align-items-center">
          <div class="hActivity-title-txt col-md-6">
            <h1>Recent Programs</h1>
            <p>Your little support can bring smile to the homeless people</p>
          </div>
          <div class="hActivity-title-btn col-md-6">
            <a href="awerness.html" class=""><span> More Programs</span> <i class="ml-2 fas fa-angle-right"></i></a>
          </div>
        </div>
        <div class="row hActivity-main-box" id="hActivity-main-box">
          <div class="Hactivity-box">
            <div class="hActivity-inner-box">
              <div>
                <div class="hActivity-inner-img">
                  <a href="#"><img src="images/activity-1.jpg" alt="" /></a>
                </div>
                <div class="hActivity-inner-txt">
                  <a href="" class="hActivity-inner-txt-header">Insure Education For Children</a>
                  <p>first charity is help homeless people around the city…
                    <a href="#" class="hActivity-inner-txt-btn">Read More</a>
                  </p>
                  <a href="#" class="common-btn donate-btn">Donate Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="Hactivity-box">
            <div class="hActivity-inner-box">
              <div>
                <div class="hActivity-inner-img">
                  <a href="#"><img src="images/activity-1.jpg" alt="" /></a>
                </div>
                <div class="hActivity-inner-txt">
                  <a href="" class="hActivity-inner-txt-header">Insure Education Every Children</a>
                  <p>first charity is help homeless people around the city…
                    <a href="#" class="hActivity-inner-txt-btn">Read More</a>
                  </p>
                  <a href="#" class="common-btn donate-btn">Donate Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="Hactivity-box">
            <div class="hActivity-inner-box">
              <div>
                <div class="hActivity-inner-img">
                  <a href="#"><img src="images/activity-1.jpg" alt="" /></a>
                </div>
                <div class="hActivity-inner-txt">
                  <a href="" class="hActivity-inner-txt-header">Insure For Every Children</a>
                  <p>first charity is help homeless people around the city…
                    <a href="#" class="hActivity-inner-txt-btn">Read More</a>
                  </p>
                  <a href="#" class="common-btn donate-btn">Donate Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="Hactivity-box">
            <div class="hActivity-inner-box">
              <div>
                <div class="hActivity-inner-img">
                  <a href="#"><img src="images/activity-1.jpg" alt="" /></a>
                </div>
                <div class="hActivity-inner-txt">
                  <a href="" class="hActivity-inner-txt-header">Insure Education For Every Children</a>
                  <p>first charity is help homeless people around the city…
                    <a href="#" class="hActivity-inner-txt-btn">Read More</a>
                  </p>
                  <a href="#" class="common-btn donate-btn">Donate Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="Hactivity-box">
            <div class="hActivity-inner-box">
              <div>
                <div class="hActivity-inner-img">
                  <a href="#"><img src="images/activity-1.jpg" alt="" /></a>
                </div>
                <div class="hActivity-inner-txt">
                  <a href="" class="hActivity-inner-txt-header">Insure Education For Every Children</a>
                  <p>first charity is help homeless people around the city…
                    <a href="#" class="hActivity-inner-txt-btn">Read More</a>
                  </p>
                  <a href="#" class="common-btn donate-btn">Donate Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="Hactivity-box">
            <div class="hActivity-inner-box">
              <div>
                <div class="hActivity-inner-img">
                  <a href="#"><img src="images/activity-1.jpg" alt="" /></a>
                </div>
                <div class="hActivity-inner-txt">
                  <a href="" class="hActivity-inner-txt-header">Insure Education For Every Children</a>
                  <p>first charity is help homeless people around the city…
                    <a href="#" class="hActivity-inner-txt-btn">Read More</a>
                  </p>
                  <a href="#" class="common-btn donate-btn">Donate Now</a>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>

    <!--Volunteer Section-->
    <section class="hVolunteer-wrap">
      <div class="container-fluid">
        <div class="hVolunteer-box row">
          <div class="col-md-6 text">
            <h1 class="hVolunteer-head text-center">Become a <span class="alokito-volunteer">alokito volunteer</span></h1>
            <p class="hVolunteer-txt text-center">
              Join our volunteer team and become real human being and make the world smile !!
            </p>
            <div class="hVolunteer-btn text-center mt-2">
              <a href="contact.html" role="button" class="volunteer-btn">Registration</a>
            </div>
          </div>

          <div class="col-md-6 image" style="background: url('assets/images/frontend/signin/volunteer.jpg') center center / cover no-repeat; height: 400px;">
            <h1>Join Our Team</h1>
            <div class="join-volunteer-overlay"></div>
          </div>
        </div>
      </div>
    </section>

    <!--Newsletter Section-->
    <section class="hNewslwtter-wrap">
      <div class="container">
        <div class="row align-items-center">
          <div class="hNewslwtter-title col-md-6">
            <h3>SIGN UP FOR NEWSLETTER</h3>
            <p>
              Submit your email and stay in touch by notify our news & update
              regularly
            </p>
            
            <form method="POST" action="" id="subscriber_form" novalidate="novalidate">
              <div>
              <input class="form-control" type="email" name="email" required="" placeholder="Email address" aria-required="true">
              <button type="submit" class="btn theme-btn" id="subs-submit-btn">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="hNewslwtter-btn col-md-6">
            
          </div>
        </div>
      </div>
    </section>
    <!--Content Area end-->
@endsection