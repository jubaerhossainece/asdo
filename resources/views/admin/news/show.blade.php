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
        <div>
            <h1 class="card-title text-primary">{{$news->heading}}</h1>
            <h4>Published on {{\Carbon\Carbon::parse($news->publishing_date)->format('d M, Y')}}</h4>
        </div>
        <div>
        @if(\App\Library\Helper::isPublished($news->publishing_date))	 	
            <span class="badge badge-primary">
        	    Not Published
            </span>
        @elseif($news->is_live || \App\Library\Helper::newsState($news->publishing_date, $news->ending_date))
            <button onclick="changeState({{$news->id}})" id="news-state-{{$news->id}}" class="btn-sm btn badge badge-success text-white">
                Live
            </button>
        @else
            <button onclick="changeState({{$news->id}})" id="news-state-{{$news->id}}" class="btn-sm btn badge badge-warning text-white">
                Archived
            </button>
        @endif
        </div>
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
<script>
    function changeState(id){
		event.preventDefault();
		$.ajax({
			type:"get",
			url:"/asdo/news/changeState/"+id,
			cache:false,
			success: function(data){
				console.log(data);
				if(data){
					$('#news-state-'+id).html('Live');
					$('#news-state-'+id).removeClass("badge-warning").addClass("badge-success"); 
				}else{
					$('#news-state-'+id).html('Archived');
					$('#news-state-'+id).removeClass("badge-success").addClass("badge-warning");

				}
			}
		})
	}
</script>
@endpush

@endsection
