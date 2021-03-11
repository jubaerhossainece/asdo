@extends('layouts.backend.app')
@section('content')
@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endpush

<div class="card">
	<div class="card-header">	
		<h4 class="page-title">User Management</h4>
	</div>
</div>

<div class="card">
	<div class="card-header header">
		<h5 class="card-title">All Users</h5>
		<a href="{{route('asdo.users.create')}}" class="btn btn-primary float-right">
		<i class="fas fa-plus-circle"></i>
		New User</a>
	</div>

	<div class="card-body">
		<table id="usersTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Member Type</th>
                <th>Present Address</th>
                <th>Permanent Address</th>
                <th>Joined At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($users as $user)
        	<tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->member_type}}</td>
                <td>{{$user->present_address}}</td>
                <td>{{$user->permanent_address}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                	<a href="{{route('asdo.users.edit', $user->id)}}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit user information" >
    					<i class="fas fa-edit"></i>
    				</a>

    				<a href="{{route('asdo.users.show', $user->id)}}" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="bottom" title="show user information" >
    					<i class="fas fa-eye"></i>
    				</a>

					<button onclick="deleteData({{$user->id}})" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete user information" >
						<i class="fas fa-trash-alt"></i>
					</button>
					<form action="{{route('asdo.users.destroy', $user->id)}}" method="POST" style="display: none;" id="submit-delete-{{$user->id}}">
						@csrf
						@method('DELETE')
					</form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Member Type</th>
                <th>Present Address</th>
                <th>Permanent Address</th>
                <th>Joined At</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
	</div>
</div>

@push('script')
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script>
    // tooltip activation code
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    //datatables initialisation
	$(document).ready(function() { 
		$('#usersTable').DataTable(); 
	});
</script>
@endpush

@endsection