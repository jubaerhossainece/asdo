@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/index.css" rel="stylesheet" />
  <style>
   .project-header{
    margin-top: 6rem;
    padding: 1rem 0;
  }
    .projects .container {
        padding: 10px 0;
    }

    .projects .container .card .text {
        text-align: center;
        padding: 10px;
    }

    section.projects .card .image img {
        height: 185px;
        width: 100%;
    }
  </style>
@endpush
@section('content')
<div class="project-header container">
  <h2><span  class="text-green">Programs</span> arranged by asdo</h2>
</div>
<section class="projects">
  <div class="container">
    <div class="row">
      @if($projects->isEmpty())
      <h3 class="text-warning">No progarm running right now</h3>
      @else
        @foreach($projects as $project)
          <div class="col-md-3 mb-5">
            <div class="card">
              <div class="image">
                <a href="{{route('projects.show', $project->id)}}">@if($project->projectFiles->isEmpty())  @else <img src="{{asset('/storage/asdo/images/projects/'.$project->latestFile->file_name)}}" alt="" />@endif</a>
              </div>
              <div class="text">
                <a href="" class="hActivity-inner-txt-header">{{$project->header}}</a>
                <p>{{substr($project->body, 0, 140)}}...
                  <a href="{{route('projects.show', $project->id)}}" class="hActivity-inner-txt-btn">Read More</a>
                </p>
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
@push('script')
@endpush    
@endsection