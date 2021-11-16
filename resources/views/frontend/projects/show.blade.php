@extends('layouts.frontend.app')
@push('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lightgallery.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lightgallery-bundle.min.css">
  <link href="css/frontend/index.css" rel="stylesheet" />
  <style>

    .project-donate{
      padding: 2rem;
      margin-top: 5rem;
    }

    .project-donate .container {
        border-radius: 10px;
        box-shadow: 0px 0px 17px 0px rgb(0 0 0 / 20%);
        overflow: hidden;
    }

    .project-donate .container .row{
      padding: 0;
    }

    .project-donate .card-donate-image.col-md-7 {
        padding: 0;
    }

    .donate-overlay {
        width: 100%;
        height: 100%;
        background-color: #02ff736e;
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

    .project-donate .card-donate-account div {
        display: flex;
        align-items: center;
    }

    .project-donate .card-donate-account img {
        height: 60px;
        margin-right: 10px;
    }

    .icon{
		  height: 30px;
		  width: auto; 
		  margin-right: 10px;
	  }

    /*single project show css*/
    .empty-box{
      padding:  10rem 0;
    }

    div#project {

    }

    div#project .row {
        padding: 3rem 0;
    }

    div#project .col-md-4 div {
        font-size: 2rem;
        padding: 13px 0;
        border-bottom: 1px solid grey;
    }

    div#project .col-md-4 div i{
     color: #1dbf73db; 
     margin-right: 20px;
    }

    /*gallery css starts*/
    .gallery-header {
        padding: 10px 0;
    }

    .gallery-header .text-green{
      color: var(--button-bg-color) !important;
    }

    #lightgallery{
      padding-top: 10px;
    }

    #lightgallery .col-md-3.col-sm-4.col-xs-6 {
        overflow: hidden;
        height: 300px;
    }

    #lightgallery .col-md-3.col-sm-4.col-xs-6 {
        overflow: hidden;
    }

    #lightgallery a.col-md-3.col-sm-4.col-xs-6 img {
        width: 100%;
        height: 12rem;
        transition: 0.3s ease-in-out;
    }

    #lightgallery a img:hover{
      transform: scale(1.1);
    }
  </style>
@endpush
@section('content')
    
<section class="project-donate">
      <div class="container">
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
</section>

  @if($project == null)
    <div class="container empty-box">
      <div class="text-center">
        <h3>No data found!</h3>
      </div>
    </div>
  @else
  <div id="project" class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="heading">
          <h4><i class="fas fa-book-reader mr-4"></i><span class=" ml-4">{{$project->header}}</span></h4>
        </div>
        <div class="location">
          <h4><img src="{{asset('assets/images/icons/location.png')}}" class="icon" alt=""><span>{{$project->location}}</span></h4>
        </div>
        <div class="date">
          <h5><img src="{{asset('assets/images/icons/schedule.png')}}" class="icon" alt=""><span>{{ date('M j, Y h:ia', strtotime($project->date)) }}</span></h5>
        </div>
      </div>
      <div class="col-md-8">
        <h2>{{$project->header}}</h2>
        <p>{{$project->body}}</p>
      </div>
    </div>
  </div>

  <div class="gallery container">
    <div class="gallery-header">
      <h3><span  class="text-green">Program</span> Photos</h3>
    </div>
    <div id="lightgallery" class="row">
      @foreach($project->projectFiles as $file)
            <a class="col-md-3 col-sm-4 col-xs-6" href="{{asset('/storage/asdo/images/projects/'.$file->file_name)}}" data-lg-size="1600-2400">
                @if($project->projectFiles->isEmpty()) @else<img src="{{asset('/storage/asdo/images/projects/'.$file->file_name)}}" />@endif
            </a>
      @endforeach
    </div>
  </div>
  @endif
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/lightgallery.umd.min.js"></script>
<script>
  // import lightGallery from "https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/lightgallery.umd.min.js";
  // import lgZoom from "https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/plugins/mediumZoom/lg-medium-zoom.umd.min.js";

  //initiate light gallery
  lightGallery(document.getElementById('lightgallery'), {
        speed: 500
    });
</script>
@endpush    
@endsection