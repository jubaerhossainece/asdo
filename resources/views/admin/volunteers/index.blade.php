@extends('layouts.admin.app')
@section('content')
@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('css/backend/volunteer.css')}}">
@endpush

<div class="card">
	<div class="card-header">	
		<h2 class="page-title">Volunteer Management</h2>
	</div>
</div>

<div class="card">
	<div class="card-header header">
		<h3 class="card-title">All Volunteers</h3>
		@can(app.volunteers.index)
		<a href="{{route('asdo.volunteers.create')}}" class="btn volunteer-btn float-right">
		<i class="fas fa-plus-circle"></i>
		New Volunteer</a>
		@endcan
	</div>

	<div class="card-body">
		<table id="usersTable" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Present Address</th>
                <th>Permanent Address</th>
                <th>Joined At</th>
                @canany(['app.volunteers.show', 'app.volunteers.edit',  'app.volunteers.destroy'])
                <th>Action</th>
                @endcanany
            </tr>
        </thead>
        <tbody>
        	@foreach($users as $user)
        	<tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->present_address}}</td>
                <td>{{$user->permanent_address}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                	@can(app.volunteers.edit)
                	<a href="{{route('asdo.volunteers.edit', $user->id)}}" class="btn btn-primary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Edit user information" >
    					<i class="fas fa-edit"></i>
    				</a>
    				@endcan

    				@can(app.volunteers.show)
    				<a href="{{route('asdo.volunteers.show', $user->id)}}" class="btn btn-secondary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="show user information" >
    					<i class="fas fa-eye"></i>
    				</a>
    				@endcan

    				@can(app.volunteers.destroy)
					<button onclick="deleteData({{$user->id}})" class="btn btn-danger btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Delete user information" >
						<i class="fas fa-trash-alt"></i>
					</button>
					<form action="{{route('asdo.volunteers.destroy', $user->id)}}" method="POST" style="display: none;" id="submit-delete-{{$user->id}}">
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
</div>

@push('script')
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script>
    //datatables initialisation
	$(document).ready(function() { 
		$('#usersTable').DataTable(); 
	});
</script>
@endpush

@endsection