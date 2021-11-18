@extends('layouts.admin.app')
@section('content')
<div class="card">
	<div class="card-header header">
		<h2 class="card-title">News Management Panel</h2>
		@can('app.news.create')
		<a href="{{route('asdo.news.create')}}" class="btn btn-primary float-right">
		<i class="fas fa-plus-circle pr-1"></i>
		Add New</a>
		@endcan
	</div>
	<div class="card-body">
		<div class="row">
			<dib class="col-md-12">

            @if(sizeof($allnews)!==0)
				<div class="table-responsive">
					<table id="rolesTable" class="table table-hover align-middle mb-0">
						<thead>
							<tr>
							<th class="text-center">#</th>
							<th class="text-center">News Heading</th>
							<th class="text-center">Live</th>
							<th class="text-center">Published at</th>
							@canany(['app.news.show', 'app.news.edit',  'app.news.destroy'])
							<th class="text-center">Action</th>
							@endcanany

						</tr>
						</thead>
						<tbody>
							@foreach($allnews as $key => $news)
								<tr>
									<td class="text-center">{{$loop->index+1}}</td>
									<td class="text-center">{{$news->heading}}</td>
									<td class="text-center">
                                        @if(\App\Library\Helper::isPublished($news->publishing_date))	 	<span class="badge badge-primary">
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
                                    </td>
									<td class="text-center">{{\Carbon\Carbon::parse($news->publishing_date)->diffForHumans()}}</td>
									<td class="text-center">
										@can('app.news.edit')
										<a href="{{route('asdo.news.edit', $news->id)}}" class="btn btn-primary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Edit news detail">
											<i class="fas fa-edit"></i>
										</a>
										@endcan
										@can('app.news.show')
				    				<a href="{{route('asdo.news.show', $news->id)}}" class="btn btn-secondary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="show detailed news" >
				    					<i class="fas fa-eye"></i>
				    				</a>
				    				@endcan
				    				@can('app.news.destroy')
										<button data-toggle="modal" data-tooltip="tooltip" data-target="#alertModal" data-id = "{{$news->id}}" data-placement="bottom" title="Delete this news" onclick="deleteData({{$news->id}})" class="btn btn-danger btn-sm">
											<i class="fas fa-trash-alt"></i>
										</button>
										<form action="{{route('asdo.news.destroy', $news->id)}}" method="POST" style="display: none;" id="submit-delete-{{$news->id}}">
											@csrf
											@method('DELETE')
										</form>
										@endcan
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
                @else
                <div class="card-body text-center">
                    <h3 class="text-danger">No news available!</h3>
                </div>
                @endif
			</dib>
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