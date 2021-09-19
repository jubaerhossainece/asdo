@extends('layouts.admin.app')
@section('content')
<div class="card">
	<div class="card-header header">
		<h2 class="card-title">Campaign management panel</h2>
		@can(app.campaigns.index)
		<a href="{{route('asdo.campaigns.create')}}" class="btn btn-primary float-right">
		<i class="fas fa-plus-circle pr-1"></i>
		Add New</a>
		@endcan
	</div>
	<div class="card-body">
		<div class="row">
			<dib class="col-md-12">
				<div class="table-responsive">
					<table id="rolesTable" class="table table-hover align-middle mb-0">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Caption Header</th>
								<th class="text-center">Location</th>
								@canany(['app.campaigns.show', 'app.campaigns.edit',  'app.campaigns.destroy'])
								<th class="text-center">Action</th>
								@endcanany

							</tr>
						</thead>
						<tbody>
							@foreach($campaigns as $campaign)
								<tr>
									<td class="text-center">{{$loop->index+1}}</td>
									<td class="text-center">{{$campaign->header}}</td>
									<td class="text-center">
										{{$campaign->location}}
									</td>
									<td class="text-center">
										@can(app.campaigns.edit)
										<a href="{{route('asdo.campaigns.edit', $campaign->id)}}" class="btn btn-primary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Edit campaign post">
											<i class="fas fa-edit"></i>
										</a>
										@endcan
										@can(app.campaigns.show)
				    				<a href="{{route('asdo.campaigns.show', $campaign->id)}}" class="btn btn-secondary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="show campaign information" >
				    					<i class="fas fa-eye"></i>
				    				</a>
				    				@endcan
				    				@can(app.campaigns.destroy)
										<button data-toggle="modal" data-tooltip="tooltip" data-target="#alertModal" data-id = "{{$campaign->id}}" data-placement="bottom" title="Delete campaign information" onclick="deleteData({{$campaign->id}})" class="btn btn-danger btn-sm">
											<i class="fas fa-trash-alt"></i>
										</button>
										<form action="{{route('asdo.campaigns.destroy', $campaign->id)}}" method="POST" style="display: none;" id="submit-delete-{{$campaign->id}}">
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
			</dib>
		</div>
	</div>
</div>
@push('script')
<script>
	
</script>
@endpush
@endsection