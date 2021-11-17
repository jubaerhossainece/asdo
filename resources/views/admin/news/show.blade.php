@extends('layouts.admin.app')
@section('content')
@push('css')
<style>
     h2.page-title span {
		color: #4e4ed1;
		font-weight: 600;
	}
</style>
@endpush

<div class="card">
	<div class="card-header page-header">	
		<h2 class="page-title"></span>Showing news </h2>
        <a href="{{route('asdo.news.index')}}" class="btn btn-light">All news</a>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h1 class="card-title text-primary">{{$news->heading}}</h1>
        <h4>Published on {{\Carbon\Carbon::parse($news->date)->format('d M, Y')}}</h4>
	</div>
    <div class="card-body">
        @if($news->image)
        <img src="{{asset('storage/asdo/images/news/'.$news->image)}}" class="img-fluid" alt="">
        @endif
        <div class="text-center mt-5">
            <h3>{{$news->description}}</h3>
        </div>
    </div>

</div>

@push('script')

@endpush

@endsection
