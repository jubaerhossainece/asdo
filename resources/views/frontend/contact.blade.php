@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/contact-style.css" rel="stylesheet" />
@endpush
@section('content')

    <!--banner Start-->
    <section class="page-banner">
      <div class="page-banner-img" style="background: url('{{asset('assets/images/frontend/home/volunteer.jpg')}}') center center/cover no-repeat local;">
      </div>
      <div class="container">
        <div class="hero-text" >
          <h1>Contact</h1>
          <h4><a href="index.html">Home</a><span>/Contact</span></h4>
          <button type="button" class="mt-3 btn btn-large donate-btn" data-toggle="modal" data-target="#donateModal">
            Donate Now
          </button>
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
              <div class="col-md-12" id="send-message">
                
              </div>
              <form method="POST" id="contactForm" action="{{route('contacts.message')}}" class="contactForm" onsubmit="send_message(event)">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="label" for="name">Full Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name"/>            
                      <div id="error-name">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="label" for="email">Email Address</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email"/>            
                      <div id="error-email">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="label" for="subject">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"/>            
                      <div id="error-subject">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="label" for="#">Message</label>
                      <textarea name="message" class="form-control" id="message" rows="4" placeholder="Message"></textarea>            
                      <div id="error-message">
                        
                      </div>
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

        </div>
      </div>
    </section>
    <section class="address">
      <div class="contaner-fluid">
        <div class="row g-0">
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
    </section>
    
    <!--Contact Page End-->
<!--Footer Start-->
@push('script')
  <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //function to add subscribers email to subscribers table
     function send_message(event){
      event.preventDefault();
        let form = document.getElementById('contactForm');
        let formData = $(form).serialize();

        //clear warning message
        let inputkey = ['name', 'email', 'subject', 'message'];
        for(let key in inputkey){
          let msg = document.getElementById("error-"+inputkey[key]);
          msg.innerHTML = "";
        }        
        let result = document.getElementById("send-message");
        result.innerHTML = "";

        $.ajax({
          url: $(form).attr('action'),
          type: $(form).attr('method'),
          data: formData,
          processData: false,
          success: function (data) {
              console.log(data);
              let result = document.getElementById("send-message");
              result.innerHTML = "";
              result.innerHTML += "<div class='alert alert-"+data[0]+"'><strong>" + data[1] + "</strong></div>";
          },
          error: function(error){
              let errors = error.responseJSON.errors;

              for(let key in errors){
                if(errors.hasOwnProperty(key)){
                  let msg = document.getElementById("error-"+key);
                  msg.innerHTML = "";
                  msg.innerHTML += "<div class='text-danger'><strong>" + errors[key] + "</strong></div>";
                }
              }

          }
        });
     }
  </script>
@endpush    
@endsection