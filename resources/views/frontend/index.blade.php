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
              <span>
                আলোকিত সামাজিক উন্নয়ন সংস্থা aims at evacuationg hunger and malnutrition from the the locality and tirelessly work for it. The majority of the people of Sripur are very poor and some are so poor that they cannot even provide two meals a day. Continuous monetary support is given to them alongside the food reliefs that are distributed among the needy people on a regular basis. Even livestock, poultry and other sources of earning a livelihood are also provided.
              </span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-medkit"></i>
              <h2>Treatment</h2>
              <span>
                আলোকিত সামাজিক উন্নয়ন সংস্থা has been working for providing treatment facilities to the people of Sripur more than any other government and non-governmnet organization. They take people from all walks of life into consideration and utterly believe that no one should die without treatment. They take modern medical science in account, provide monetary support and medicine support and arrange countless awareness activities.
              </span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-home"></i>
              <h2>Shelter</h2>
              <span>
                The sufferings of shelterless, homeless people are none like any other. আলোকিত সামাজিক উন্নয়ন সংস্থা has been trying to eradicate such helplessness and do whatever it takes to ensure everyone a shelter to live in the region of Sripur for years. They have done a lot for the homeless people and also got a lot ahead in this venture, but they haven’t paused their activities, on the contrary, their activities are in aviation. 
              </span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-book-reader"></i>
              <h2>Education</h2>
              <span>
                আলোকিত সামাজিক উন্নয়ন সংস্থা is very well know for the widespreding of education in Sripur. To ensure education to the lay people of Sripur আলোকিত সামাজিক উন্নয়ন সংস্থা continioiusly anranges and hasts different events. Provides stipends to the needy, provides free books,provides free stationary equipment for education, launches different educational programs. Alokito School is the most prominent school in Sripur, which is well known throughout Magura for its exceptional way of educating. Also Alokito Parul Smriti Pathagar is the largest library in Sripur, which is another empowering step by আলোকিত সামাজিক উন্নয়ন সংস্থা.
              </span>
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
              <a href="register" role="button" class="common-btn">Registration</a>
            </div>
          </div>

          <div class="col-md-6 image" style="background: url('assets/images/frontend/signin/donor.jpg') center center / cover no-repeat; height: 400px;">
            <h1>Join Our Community</h1>
            <div class="join-member-overlay"></div>
          </div>
        </div>
      </div>
    </section>

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
              <a href="/volunteer/register" role="button" class="volunteer-btn">Registration</a>
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
@push('script')
  
@endpush    
@endsection