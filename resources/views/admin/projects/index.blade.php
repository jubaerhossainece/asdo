@extends('layouts.admin.app')
@section('content')
<div class="card">
	<div class="card-header header">
		<h2 class="card-title">Project Management Panel</h2>
		@can(app.projects.index)
		<a href="{{route('asdo.projects.create')}}" class="btn btn-primary float-right">
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
							@canany(['app.projects.show', 'app.projects.edit',  'app.projects.destroy'])
							<th class="text-center">Action</th>
							@endcanany

						</tr>
						</thead>
						<tbody>
							@foreach($projects as $key => $project)
								<tr>
									<td class="text-center">{{$loop->index+1}}</td>
									<td class="text-center">{{$project->header}}</td>
									<td class="text-center">{{$project->location}}</td>

									<td class="text-center">
										@can(app.projects.edit)
										<a href="{{route('asdo.projects.edit', $project->id)}}" class="btn btn-primary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Edit project detail">
											<i class="fas fa-edit"></i>
										</a>
										@endcan
										@can(app.projects.show)
				    				<a href="{{route('asdo.projects.show', $project->id)}}" class="btn btn-secondary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="show project information" >
				    					<i class="fas fa-eye"></i>
				    				</a>
				    				@endcan
				    				@can(app.projects.destroy)
										<button data-toggle="modal" data-tooltip="tooltip" data-target="#alertModal" data-id = "{{$project->id}}" data-placement="bottom" title="Delete project Detail" onclick="deleteData({{$project->id}})" class="btn btn-danger btn-sm">
											<i class="fas fa-trash-alt"></i>
										</button>
										<form action="{{route('asdo.projects.destroy', $project->id)}}" method="POST" style="display: none;" id="submit-delete-{{$project->id}}">
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