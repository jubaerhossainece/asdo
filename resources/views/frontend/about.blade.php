@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/about-style.css" rel="stylesheet" />
@endpush
@section('content')
      <!--banner Start-->
      <section class="page-banner">
        <div class="page-banner-img" style="background: url('{{asset('assets/images/frontend/home/volunteer.jpg')}}') center center/cover no-repeat local;">
        </div>
        <div class="container">
          <div class="hero-text" >
            <h1>Contact</h1>
            <h4><a href="index.html">Home</a><span>/About</span></h4>
            <button type="button" class="mt-3 btn btn-large donate-btn" data-toggle="modal" data-target="#donateModal">
            Donate Now
          </button>
          </div>
        </div>
      </section>
      <!--banner End-->
    
    
    <!--About Section-->
    <section class="about-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="about-img-box">
              <img
                class="about-img img-fluid"
                src="images/about_thumb.jpg"
                alt="about-us"
              />
            </div>
          </div>
          <div class="col-md-7">
            <div class="about-box">
              <h2 class="about-header">Who We Are</h2>
              <p>
                Alokito social development organization(ASDO) is a non-profit social organization based in Sreepur union of Magura district. We have been working for about a decade in trying to change the situation of the poor and marginal people of Sripur. Alokito social development organization(ASDO) have been working throughout the time as a sole social enterprise on that region in addressing the social and economic crisis of that area, standing by the people in need, providing education for those who couldn’t access it, bearing healthcare costs for who can’t bear it, distributing food and foodgrains to marginal people, also people who have nothing to support themselves or nothing to earn from; ASDO organizes a program to provide them a earning source. We are the first organization to start blood donation in the region and also a blood bank. Tree plantation is also a very frequent activity of ASDO. Alongside, Fundraising is also a constant activity. The Alokito school is a venture of ASDO, which was established with the initiative to make education easy for students and lift the burden of a big syllabus and loads of academic books. Students who can’t pay for their education study free here, and needy students can also pay half of the tuition fees. Distributing free books and free stationary products is one of the noteworthy works by us.

              </p>
              <ul class="about-box-list">
                <li>Mohammad Jahidul Islam Jewel is the Chairman and founder of আলোকিত সামাজিক উন্নয়ন সংস্থা</li>
                <li>There are 7 members in the governing body, including the chairman, which is the board of directors.</li>
                <li>There is a board of 21 members in the co-operative society, including the 7 directors. This board is the general council of আলোকিত সামাজিক উন্নয়ন সংস্থা</li>
                <li>Apart from this আলোকিত সামাজিক উন্নয়ন সংস্থা consists of 4000 members from all walks of life.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- mission section -->
    <section id="mission-section">
      <div class="container">
        
      <div id="accordion" class="row">
        <div class="col-lg-8">        
          <div class="card">
            <div class="card-header" id="storyHeading">
                <button class="btn btn-link btn-mission" data-bs-toggle="collapse" data-bs-target="#story" aria-expanded="false" aria-controls="storyHeading">
                  Our Story
                </button>
            </div>
        
            <div id="story" class="collapse " aria-labelledby="storyHeading" data-parent="#accordion">
              <div class="card-body">
                <div class="icon">
                  <i class="fas fa-history"></i>
                </div>
                <div class="text">
                  আলোকিত সামাজিক উন্নয়ন সংস্থা started it’s journey in 2012 as a Co-operative society. In 2013 the owner started a coaching center in which he would provide the students with a student friendly syllabus. When he saw how the students were burdened by lengthy syllabuses and tons of books, he was determined to establish a school. The school was named as Alokito School from the name of আলোকিত সামাজিক উন্নয়ন সংস্থা. Alokito School began administering and commenced its course of education in 2015. 
                  Digitalization started in 2013. It was the first step of the outreach of আলোকিত সামাজিক উন্নয়ন সংস্থা. And documentation of every work was also a necessary step too, which started from 2015.
                  আলোকিত সামাজিক উন্নয়ন সংস্থা and Alokito School combinely got registrated as a non-profit social enterprise at 2020.
                  The founder Mohammad Jahidul Islam Jewel had this idea of creating such agency came into his mind at 2001. As he had records of forming and leading such organizations, it was quite natural. In 2009 he wheeled his thoughts into reality. But there was some trial and error, and the road was not smooth at the time. But he kept his eyes on the price and continued in his venture.
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="missionHeading">
                <button class="btn btn-link btn-mission" data-bs-toggle="collapse" data-bs-target="#mission" aria-expanded="false" aria-controls="missionHeading">
                  Our Mission & vision
                </button>
            </div>
        
            <div id="mission" class="collapse" aria-labelledby="missionHeading" data-parent="#accordion">
              <div class="card-body">
                <div class="icon">
                  <i class="fas fa-low-vision"></i>
                </div>
                <div class="text">
                  The mission of আলোকিত সামাজিক উন্নয়ন সংস্থা is to connect all the people of the locality for the bringing about  prosperity to the region. From 2012 till now it is working on getting everyone together in addressing all the issues that are persistent in the locality.  আলোকিত সামাজিক উন্নয়ন সংস্থা makes no profit out of these activities. আলোকিত সামাজিক উন্নয়ন সংস্থা is selflessly carrying on all its activities and the only profit they make is the goodwill and trust of the people of the locality. And that's why all kinds of people reach out to them and entrust them to ease their difficulty. 
                  The founder of আলোকিত সামাজিক উন্নয়ন সংস্থা had seen people of his region living a life full of poverty, hunger, unemployment, chronic diseases, epidemics and continuous social oppression. Their miserable state was unbearable to him, which drove him to start up the social enterprise আলোকিত সামাজিক উন্নয়ন সংস্থা. Now it has been a decade আলোকিত সামাজিক উন্নয়ন সংস্থা has been working tirelessly to facilitate all the people of the region in every discomfort.

                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="communityHeading">
                <button class="btn btn-link btn-mission" data-bs-toggle="collapse" data-bs-target="#community" aria-expanded="false" aria-controls="communityHeading">
                  Our Community
                </button>
            </div>
            <div id="community" class="collapse" aria-labelledby="communityHeading" data-parent="#accordion">
              <div class="card-body">
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <div class="text">
                  Apart from the 21 members of the general council and 7 directors, আলোকিত সামাজিক উন্নয়ন সংস্থা consists of total 4000 members. This huge number of people participate soulfully and spontaneously in the activities of আলোকিত সামাজিক উন্নয়ন সংস্থা. Among this 4000 there are a huge number of volunteers who compassionately engage in these humanitarian works conducted by আলোকিত সামাজিক উন্নয়ন সংস্থা. 
                  The আলোকিত সামাজিক উন্নয়ন সংস্থা community actively arrange and participate in donations, charities, campaigns, giveaways and when in need they rush to the places where people are in malaise. 
                  The local government actively participate in the workshops and events of আলোকিত সামাজিক উন্নয়ন সংস্থা. They completely support its work and they try their best to do their part, so that humanitarian benefits come soon. The local government even refers the আলোকিত সামাজিক উন্নয়ন সংস্থা to people who come with some soreness to them.
                  আলোকিত সামাজিক উন্নয়ন সংস্থা has a community outside Magura in Bangladesh and also outside Bangladesh. These communities mainly participate in fundraising and the community that is outside Bangladesh offer আলোকিত সামাজিক উন্নয়ন সংস্থা with funds for different purposes. One of these communities is an American community that provides funds for cancer treatment.
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    
    <!--Member Section Start-->
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
    <!--Member Section end-->
    
    <!--Contact Page End-->
<!--Footer Start-->
@push('script')
  
@endpush    
@endsection

