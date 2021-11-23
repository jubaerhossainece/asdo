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
            <button type="button" class="mt-3 btn btn-large banner-btn" data-toggle="modal" data-target="#donateModal">
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
          <div class="col-md-12 text-center">
            <div class="about-header">
              <h2>Who We Are</h2>              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="about-img-box">
              <img
                class="about-img img-fluid"
                src="{{url('assets/images/food.jpg')}}"
                alt="about-us"
              />
            </div>
          </div>
          <div class="col-md-7">
            <div class="about-box">
              <p>
                Alokito Social Development Organization (ASDO) is a non-profit social organization founded in Tupipara village of Sreekol union located at Sreepur thana in the Magura district. We have been working for about a decade in trying to change the situation of the poor and marginal people of Tupipara village in Sreepur thana. Alokito social development organization (ASDO) have been working throughout the time as a sole social enterprise on that region in addressing the social and economic crisis of that area, standing by the people in need, providing education for those who couldn’t access it, bearing healthcare costs for who can’t bear it, distributing food and foodgrains to marginal people, also people who have nothing to support themselves or nothing to earn from; ASDO organizes a program to provide them a earning source. We are the first organization to start blood donation in the region and also a blood bank. Tree plantation is also a very frequent activity of ASDO. Alongside, Fundraising is also a constant activity.
                The Alokito school is a venture of ASDO, which was established with the initiative to make education easy for students and lift the burden of a big syllabus and loads of academic books. Students who can’t pay for their education study free here, and needy students can also pay half of the tuition fees. Distributing free books and free stationary products is one of the noteworthy works by us.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            
              <ul class="about-box-list">
                <li>Mohammad Jahidul Islam Jewel is the Chairman and founder of Alokito social development organization (ASDO).</li>
                <li>There are 7 members in the governing body, including the chairman, which is the board of directors.</li>
                <li>There is a board of 21 members in the co-operative society, including the 7 directors. This board is the general council of Alokito social development organization (ASDO).</li>
                <li>Apart from this Alokito social development organization (ASDO) consists of 4000 members from all walks of life.</li>
              </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="founder">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="founder-header">
              <h2>Chairman and Founder</h2>            
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img class="img-fluid" src="{{url('assets/images/prothom-alo-award.jpg')}}" alt="">
          </div>
          <div class="col-md-8">
            <p>
              The Chairman and the founder of Alokito social development organization (ASDO) Mohammad Jahidul Islam Jewel is a person who could have a very promising career and could have lived a luxurious life, but instead, he came back to Sreepur for the sole humanitarian cause of improving the socio-economic dynamics of the people of his area. He had formed several such organizations and led several groups  in this purpose since his early teenhood, from 1992.
              Since 1990 he was deeply moved by the miseries of people around him. To attend High school he moved to Dhaka in 1992. He perceived a lot from the community and lifestyle of Dhaka and got a motivation of creating his 1st organization. In 1994 he organised a new body similar to the previous one. From 1994 onwards all his work was at Tupipara village based in Sreekol union situated at Sreepur thana of the district Magura.
              Asking about what inspired you in dedicating your life in such a humanitarian cause, he answered his ancestors. His grandfather was the head of Akbar Bahini, one of the four prominent battalions in the Liberation War of 1971. His father being the head of Bangladesh 
              </p>
          </div>
        </div>
      </div>
    </section>


    <!-- about us section -->
    <section class="activities">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="activities-header">
              <h2>Brief history and activities</h2>            
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p>
              Alokito social development organization (ASDO) is the only regional non-profit social enterprise at Tupipara village in Sreepur thana, Magura. Being widely celebrated in the area, it has brought about a drastic change in the humanitarian and volunteer services. Our motto is to diminish poverty and hunger from the area through reaching out to the poor and marginal people and donating in accordance to their needs. 
              It started the first blood donation campaign at Sreepur thana in 2009 and eventually opened a blood bank. The Alokito School is one of the best schools in the area, aiding the students with an easy syllabus and withdrawing loads of books from them. And recently, their measures in addressing the COVID-19 situation have been a huge success. The social services that Alokito social development organization (ASDO) provide are as follows:
              <ul>
                <li>
                  Ensuring easy adaptive education to all the students of the area, having no regards about the ability to pay.
                </li>
                <li>
                  Giving access to free books and free stationary products to children for promoting education.
                </li>
                <li>
                  Terminating child marriage and creating social awarness against it.
                </li>
                <li>
                  Ensuring easy healthcare access to the common people of the area, and aiding the needy to afford it, so that no one may die untreated.
                </li>
                <li>
                  Creating mass awareness among people and taking every possible step in controlling all infectious diseases which can turn into epidemics, especially now the COVID-19 and the social rules that follow it.
                </li>
                <li>
                  Creating a blood bank and an oxygen storage to face any kind of emergencies.
                </li>
                <li>
                  Ensuring food security of the local marginal people.
                </li>
                <li>
                  Ensuring the ability to earn and creating job opportunities.
                </li>
                <li>
                  Ensuring sustainability of the environment and creating mass awareness in eradicating environmental pollution.
                </li>
                <li>
                  Raising funds to face disasters and help people in unavoidable situations.
                </li>
                <li>
                  Ensuring safe roads by campaigning to reduce road accidents.
                </li>
              </ul>

              </p>
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
                  Alokito social development organization (ASDO) started its journey in 2012 as a Co-operative society. In 2013 the owner started a coaching center in which he would provide the students with a student friendly syllabus. When he saw how the students were burdened by lengthy syllabuses and tons of books, he was determined to establish a school. The school was named as Alokito School from the name of Alokito social development organization (ASDO). Alokito School began administering and commenced its course of education in 2015. 
                  Aiming to accelerate the expansion of social activities, Alokito social development organization (ASDO) had privately seeked permission from the Social Welfare directorate of the government.
                  Shortly after receiving permission ASDO commenced their welfare programs and added a new degree in the social, economical and political growth of Tupipara village.
                  Digitalization started in 2013. It was the first step of the outreach of Alokito social development organization (ASDO). And documentation of every work was also a necessary step too, which started from 2015. Eventually, Alokito social development organization (ASDO) and Alokito School combinedly got registered as a non-profit social enterprise in 2020.
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
                  The mission of Alokito social development organization (ASDO) is to connect all the people of the locality to bring about  prosperity to the region. From 2012 till now it is working on getting everyone together in addressing all the issues that are persistent in the locality.  Alokito social development organization (ASDO) makes no profit out of these activities.
                  Alokito social development organization (ASDO)  is selflessly carrying on all its activities and the only profit they make is the goodwill and trust of the people of the locality. And that's why all kinds of people reach out to them and entrust them to ease their difficulty. 
                  The founder of Alokito social development organization (ASDO) had seen people of his region living a life full of poverty, hunger, unemployment, chronic diseases, epidemics and continuous social oppression. Their miserable state was unbearable to him, which drove him to start up the social enterprise Alokito social development organization (ASDO). 
                  ASDO has been working tirelessly since its birth, for the wellbeing of the people and making a socially and economically well off community, sustainable environment and greater measures are taken to ensure the security of life. Now it has been a decade ASDO has been working tirelessly to facilitate all the people of the region in every discomfort. Their activities in the time of the pandemic COVID-19 have claimed countless pragmatic  appraisals.


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
                  Apart from the 21 members of the general council and 7 directors, Alokito social development organization (ASDO) consists of a total 4000 members. This huge number of people participate soulfully and spontaneously in the activities of Alokito social development organization (ASDO). Among this 4000 there are a huge number of volunteers who compassionately engage in these humanitarian works conducted by Alokito social development organization (ASDO). 
                  The Alokito social development organization (ASDO) community actively arranges and participates in donations, charities, campaigns, giveaways and when in need they rush to the places where people are in malaise. 
                  The local government actively participates in the workshops and events of Alokito social development organization (ASDO). They completely support its work and they try their best to do their part, so that humanitarian benefits come soon. The local government even refers the ASDO to people who come with some soreness to them.
                  Alokito social development organization (ASDO) has a community outside Magura in Bangladesh and also outside Bangladesh. These communities mainly participate in fundraising and the community that is outside Bangladesh offer ASDO with funds for different purposes. One of these communities is an American community that provides funds for cancer treatment. 

               
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

