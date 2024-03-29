@extends('layouts.admin.app')
@section('content')
<div class="card">
	<div class="card-header">	
		<h2 class="page-title">Role Management Panel</h2>
	</div>
</div>

<div class="card">
	<div class="card-header header">
		<h3 class="card-title">All Roles</h3>
		@can('app.roles.index')
		<a href="{{route('asdo.roles.create')}}" class="btn btn-primary float-right">
		<i class="fas fa-plus-circle"></i>
		Create New Role</a>
		@endcan
	</div>
	<div class="card-body">
		<div class="row">
			<dib class="col-md-12">
				<div class="table-responsive">
					<table id="rolesTable" class="table table-borderless table-striped table-hover align-middle mb-0">
						<thead>
							<tr>
							<th class="text-center">#</th>
							<th class="text-center">Name</th>
							<th class="text-center">Permissions</th>
							<th class="text-center">Last Updated</th>
							@canany(['app.roles.show', 'app.roles.edit', 'app.roles.destroy'])
							<th class="text-center">Action</th>
							@endcanany
						</tr>
						</thead>
						<tbody>
							@foreach($roles as $key => $role)
								<tr>
									<td class="text-center">{{$loop->index+1}}</td>
									<td class="text-center">{{$role->name}}</td>
									<td class="text-center">
										@if($role->permissions->count() > 0)
										<div class="badge badge-success">Total Permissions: {{$role->permissions->count()}}</div>
										@else
										<div class="badge badge-danger">no permission found!</div>
										@endif
									</td>
									<td class="text-center">{{\Carbon\Carbon::parse($role->updated_at)->diffForHumans()}}</td>

									<td class="text-center">
										@can('app.roles.edit')
											<a href="{{route('asdo.roles.edit', $role->id)}}" class="btn btn-primary btn-sm">
												<i class="fas fa-edit"></i>
												Edit
											</a>
										@endcan	

										@can('app.roles.destroy')
											@if($role->deletable)
												<button onclick="deleteData({{$role->id}})" class="btn btn-danger btn-sm">
													<i class="fas fa-trash-alt"></i>
													Delete
												</button>
												<form action="{{route('asdo.roles.destroy', $role->id)}}" method="POST" style="display: none;" id="submit-delete-{{$role->id}}">
													@csrf
													@method('DELETE')
												</form>
											@endif
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

@endsection