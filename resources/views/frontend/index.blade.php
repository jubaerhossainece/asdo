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
            @foreach($sliders as $slider)
            <div class="carousel-item @if($loop->index == 1) active @endif">
              <div
                class="slide-image"
                style="background-image: url('{{asset('/storage/asdo/images/sliders/'.$slider->photo)}}')"
              ></div>
              <div class="container c-item-box">
                <div class="col-md-7 col-sm-8 slider-title">
                  <h1>{{$slider->caption_header}}</h1>
                  <h6>
                    {{$slider->caption_text}}
                  </h6>
                  <p>
                    <a href="" class="btn btn-large donate-btn">Donate</a>
                  </p>
                </div>
              </div>
            </div>
            @endforeach
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
          <span>
            The mission of আলোকিত সামাজিক উন্নয়ন সংস্থা is to connect all the people of the locality for bringing about prosperity. From 2012 till now it is working on getting everyone together in addressing all the issues that are persistent in the locality.
          </span>
        </div>
        <div class="content row">
          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-utensils"></i>
              <h2>Food</h2>
              <span>
                To evacuate hunger and malnutrition from the locality. We do arrange continuous monetary support to the poor and distributing food reliefs among the needy people.
              </span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-medkit"></i>
              <h2>Treatment</h2>
              <span>
                Benefiting from healthcare shouldn’t be a matter of luck. We take people from all walks of life into consideration and utterly believe that no one should die without treatment.
              </span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-home"></i>
              <h2>Shelter</h2>
              <span>
                 A blessing is a roof over head, and a nice warm bed. We are working for years to eradicate the sufferings of shelterless and to ensure everyone a shelter to live in. 
              </span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mission-box">
              <i class="fas fa-book-reader"></i>
              <h2>Education</h2>
              <span>
                Education promotes equality and lifts people out of poverty. Education is not just for a privileged few, but for all. To expand education, we are working to make access to education very easy.
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
            <p>Your little support can bring smile to the needy and destitute people</p>
          </div>
          <div class="hActivity-title-btn col-md-6">
            <a href="awerness.html" class=""><span> More Programs</span> <i class="ml-2 fas fa-angle-right"></i></a>
          </div>
        </div>
        <div class="row hActivity-main-box" id="hActivity-main-box">
          @foreach($projects as $project)
            <div class="Hactivity-box">
              <div class="hActivity-inner-box">
                <div>
                  <div class="hActivity-inner-img">
                    <a href="#"><img src="{{asset('/storage/asdo/images/projects/'.$project->latestFile->photo)}}" alt="" /></a>
                  </div>
                  <div class="hActivity-inner-txt">
                    <a href="" class="hActivity-inner-txt-header">{{$project->header}}</a>
                    <p>{{substr($project->body, 0, 200)}}
                      <a href="#" class="hActivity-inner-txt-btn">Read More</a>
                    </p>
                    <a href="#" class="common-btn donate-btn">Donate Now</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

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
            
            <form method="POST" action="{{route('subscribers.store')}}" id="subscriber_form" novalidate="novalidate" onsubmit="subscribe(event)">
              <div>
              <input class="form-control" type="email" name="email" required="" placeholder="Email address" aria-required="true">
              <button type="submit" class="btn theme-btn" id="subs-submit-btn">Subscribe</button>
              </div>
            </form>
            <div id="message">
              
            </div>
          </div>
          <div class="hNewslwtter-btn col-md-6">
            
          </div>
        </div>
      </div>
    </section>
    <!--Content Area end-->
@push('script')
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //function to add subscribers email to subscribers table
     function subscribe(event){
      event.preventDefault();
        let form = document.getElementById('subscriber_form');
        let formData = $(form).serialize();
        
        $.ajax({
          url: $(form).attr('action'),
          type: $(form).attr('method'),
          data: formData,
          processData: false,
          success: function (data) {
              console.log(data);
              let message = document.getElementById("message");
              message.innerHTML = "";
              message.innerHTML += "<div class='text-success'><strong>" + data[1] + "</strong></div>";
          },
          error: function(error){
              console.log(error.responseJSON.errors.email);
              let message = document.getElementById("message");
              message.innerHTML = "";
              message.innerHTML += "<div class='text-danger'><strong>" + error.responseJSON.errors.email + "</strong></div>";
          }
        });
     }
  </script>
@endpush    
@endsection