@extends('layouts.admin.app')
@section('content')
@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('css/backend/member.css')}}">
@endpush

<div class="card">
	<div class="card-header page-header">	
		<h2 class="page-title">Member Management</h2>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h3 class="card-title">All Members</h3>
        @can('app.members.index')
		<a href="{{route('asdo.members.create')}}" class="btn common-btn">
		<i class="fas fa-plus-circle"></i>
		New Member</a>
        @endcan
	</div>

	<div class="card-body">
		<table id="usersTable" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Member Type</th>
                <th>Present Address</th>
                <th>Permanent Address</th>
                <th>Joined At</th>
                @canany(['app.members.show', 'app.members.edit',  'app.members.destroy'])
                <th>Action</th>
                @endcanany
            </tr>
        </thead>
        <tbody>
        	@foreach($users as $user)
        	<tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$user->name}}</td>
                <td>
                    @foreach($member_types as $type)
                        @if($type->id == $user->member_type)
                         {{$type->name}}
                        @endif
                    @endforeach
                </td>
                <td>{{$user->present_address}}</td>
                <td>{{$user->permanent_address}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    @can('app.members.edit')
                	<a href="{{route('asdo.members.edit', $user->id)}}" class="btn btn-primary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Edit user information" >
    					<i class="fas fa-edit"></i>
    				</a>
                    @endcan

                    @can('app.members.show')
    				<a href="{{route('asdo.members.show', $user->id)}}" class="btn btn-secondary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="show user information" >
    					<i class="fas fa-eye"></i>
    				</a>
                    @endcan

                    @can('app.members.destroy')
					<button onclick="deleteData({{$user->id}})" class="btn btn-danger btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Delete user information" >
						<i class="fas fa-trash-alt"></i>
					</button>
					<form action="{{route('asdo.members.destroy', $user->id)}}" method="POST" style="display: none;" id="submit-delete-{{$user->id}}">
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