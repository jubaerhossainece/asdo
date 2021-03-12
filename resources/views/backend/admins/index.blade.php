@extends('layouts.backend.app')
@section('content')

<div class="card">
	<div class="card-header header">
		<h5 class="card-title">Admin Panel</h5>
		<a href="{{route('asdo.admins.create')}}" class="btn btn-primary float-right">
		<i class="fas fa-plus-circle pr-1"></i>
		Create New</a>
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
							<th class="text-center">Role</th>
							<th class="text-center">Status</th>
							<th class="text-center">Last Updated</th>

							<th class="text-center">Action</th>

						</tr>
						</thead>
						<tbody>
							@foreach($admins as $key => $admin)
								<tr>
									<td class="text-center">{{$loop->index+1}}</td>
									<td class="text-center">{{$admin->name}}</td>
									<td class="text-center">
										@foreach($roles as $key => $role)
											@if($role->id == $admin->role_id)
												<span class="badge 
													@if($role->name == 'Super Admin') badge-success 
													@elseif($role->name == 'Admin')
													badge-primary
													@elseif($role->name == 'Moderator')
													badge-warning
												 @endif">{{$role->name}}</span>
											@endif
										@endforeach
									</td>
									<td class="text-center">
										@if($admin->status == true)
											<span class=" badge @if($admin->status == true) badge-success @else badge-danger @endif">Active</span>
										@else
											<span class=" badge @if($admin->status == true) badge-success @else badge-danger @endif">Inactive</span>
										@endif
									</td>
									
									<td class="text-center">{{\Carbon\Carbon::parse($admin->updated_at)->diffForHumans()}}</td>


										<td class="text-center">

											<a href="{{route('asdo.admins.edit', $admin->id)}}" class="btn btn-primary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Edit information">
												<i class="fas fa-edit"></i>
											</a>

					    				<a href="{{route('asdo.admins.show', $admin->id)}}" class="btn btn-secondary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="show user information" >
					    					<i class="fas fa-eye"></i>
					    				</a>

											<button data-toggle="modal" data-tooltip="tooltip" data-target="#alertModal" data-id = "{{$admin->id}}" data-placement="bottom" title="Delete from admin panel" onclick="deleteData({{$admin->id}})" class="btn btn-danger btn-sm">
												<i class="fas fa-trash-alt"></i>
											</button>
											<form action="{{route('asdo.admins.destroy', $admin->id)}}" method="POST" style="display: none;" id="submit-delete-{{$admin->id}}">
												@csrf
												@method('DELETE')
											</form>

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