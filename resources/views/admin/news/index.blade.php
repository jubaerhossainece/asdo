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
                                        @if($news->isLive)
                                        <span class="badge badge-success">
                                            Live
                                        </span>
                                        @elseif(\App\Library\Helper::dayDiff($news->date, $news->lifetime))
                                        <span class="badge badge-success">
                                            Live
                                        </span>
										@else
										<input type="submit" class="badge badge-warning text-white" value="Archived">
                                            
                                        @endif
                                    </td>

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
	
</script>
@endpush
@endsection