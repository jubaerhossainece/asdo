@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/index.css" rel="stylesheet" />
  <style>
    .campaigns{
      margin-top: 68px;
      padding: 2rem 1rem;
    }

    .campaigns .container-fluid .card .text {
        text-align: center;
        padding: 10px;
    }
  </style>
@endpush
@section('content')
<section class=" campaigns">
  <div class="container-fluid">
    <div class="row">
      @if($campaigns->isEmpty())
      <h3 class="text-warning">No campaign running right now</h3>
      @else
        @foreach($campaigns as $campaign)
          <div class="col-md-4">
            <div class="card">
              <div class="image">
                <a href="{{route('campaigns.show', $campaign->id)}}"><img src="{{asset('/storage/asdo/images/projects/'.$campaign->campaignFiles->isEmpty() ? '' : $campaign->latestFile->file_name)}}" alt="" /></a>
              </div>
              <div class="text">
                <a href="" class="hActivity-inner-txt-header">{{$campaign->header}}</a>
                <p>{{substr($campaign->body, 0, 140)}}
                  <a href="{{route('campaigns.show', $campaign->id)}}" class="hActivity-inner-txt-btn">Read More</a>
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