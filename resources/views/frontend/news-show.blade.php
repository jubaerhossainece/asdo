@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/index.css" rel="stylesheet" />
  <style>
      #news{
          margin-top: 100px;
          margin-bottom: 20px;
      }
      #news-body h6{
          font-weight: 400;
          line-height: 1.6;
      }
      @media screen and (min-width: 768px) {
          #news-body{
              
          }
          #news-headings{
          }
      }

      #news-link{
          display: block;
          padding: 15px 0;
      }
  </style>
@endpush
@section('content')
<div class="container-fluid">
    <div class="row" id="news">
        <div class="col-md-8">
            <div class="card" id="news-body">
                <div class="card-header">
                    <div>
                        <h1 class="card-title text-primary">{{$news->heading}}</h1>
                        <h6>Published on {{\Carbon\Carbon::parse($news->publishing_date)->format('jS F, Y h:i A')}}</h6>
                    </div>
                </div>    
                <div class="card-body">
                    @if($news->image)
                    <img src="{{asset('storage/asdo/images/news/'.$news->image)}}" class="img-fluid" alt="">
                    @endif
                    <div class="text-center mt-5">
                        <h6>{{$news->description}}</h6>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card" id='news-headings'>
                <div class="card-header">
                    <h3 class="">More news</h3>
                </div>
                <div class="card-body">
                    @foreach($live_news as $news)
                    <a href="{{route('news.show', ['heading' => $news->slug, 'id' => $news->id])}}" id="news-link">
                        {{substr($news->heading,0,50)}}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
 
@endpush    
@endsection