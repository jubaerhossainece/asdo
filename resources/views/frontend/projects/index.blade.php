@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/index.css" rel="stylesheet" />
  <style>
    .projects{
      margin-top: 68px;
      padding: 2rem 1rem;
    }

    .projects .container-fluid .card .text {
        text-align: center;
        padding: 10px;
    }
  </style>
@endpush
@section('content')
<section class="projects">
  <div class="container-fluid">
    <div class="row">
      @if($projects->isEmpty())
      <h3 class="text-warning">No progarm running right now</h3>
      @else
        @foreach($projects as $project)
          <div class="col-md-4">
            <div class="card">
              <div class="image">
                <a href="{{route('projects.show', $project->id)}}"><img src="{{asset('/storage/asdo/images/projects/'.$project->projectFiles->isEmpty() ? '' : $project->latestFile->file_name)}}" alt="" /></a>
              </div>
              <div class="text">
                <a href="" class="hActivity-inner-txt-header">{{$project->header}}</a>
                <p>{{substr($project->body, 0, 140)}}
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