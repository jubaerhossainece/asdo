@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/index.css" rel="stylesheet" />
  <style>
    .campaign-donate{
      margin-top: 68px;
      padding: 2rem 0;
    }

    .card-body.container-fluid {
        padding: 0;
    }

    .card-body.container-fluid .row{
      margin-right: 0;
      margin-left: 0;
    }

    .card-donate-image.col-md-7 {
        padding: 0;
    }

    .donate-overlay {
        width: 100%;
        height: 100%;
        background-color: #02ff736e;
    }

    .campaigns .container-fluid .card .text {
        text-align: center;
        padding: 10px;
    }

    .card-donate-account.col-md-5 {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 0 3rem;
    }

    .card-header {
        background-color: #1dbf73db;
    }

    .card-header h3{
      color: white;
    }

    .card-body .card-donate-account div {
        display: flex;
        align-items: center;
    }

    .card-body .card-donate-account img {
        height: 60px;
        margin-right: 10px;
    }

    div#campaign {
        padding: 3rem;
    }

    div#campaign .col-md-4 div {
        font-size: 2rem;
        padding: 13px 0;
        border-bottom: 1px solid grey;
    }

    div#campaign .col-md-4 div i{
     color: #1dbf73db; 
     margin-right: 20px;
    }
  </style>
@endpush
@section('content')
<section class="campaign-donate">
   <div class="card">
      <div class="card-header">
        <h3 class="card-title" id="exampleModalLongTitle">Donate any amount</h3>
      </div>
      <div class="card-body container-fluid">
        <div class="row">
          
        <div class="card-donate-image col-md-7" style="background: url('/assets/images/logo/donate-3.jpg') center center / cover no-repeat; height: 470px;">
          <div class="donate-overlay"></div>
        </div>
        <div class="card-donate-account col-md-5">
          <div>
            <img src="{{asset('assets/images/logo/bkash.jpg')}}" alt="">
            <h4>
              Bkash - 01712748985
            </h4>
          </div>
          <div>
            <img src="{{asset('assets/images/logo/rocket.jpg')}}" alt="">

            <h4>
              Rocket  - 01712748985
            </h4>
          </div>
        </div>
        </div>
      </div>
    </div>


  <div id="campaign" class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="heading">
          <h4><i class="fas fa-book-reader mr-4"></i><span class=" ml-4">{{$campaign->header}}</span></h4>
        </div>
        <div class="location">
          <h4><i class="fas fa-map-marker-alt mr-4"></i><span>{{$campaign->location}}</span></h4>
        </div>
        <div class="date">
          <h5><i class="fas fa-calendar-alt"></i><span>{{$campaign->date}}</span></h5>
        </div>
      </div>
      <div class="col-md-8">
        <h2>{{$campaign->header}}</h2>
        <p>{{$campaign->body}}</p>
      </div>
    </div>
  </div>
</section>
@push('script')
@endpush    
@endsection