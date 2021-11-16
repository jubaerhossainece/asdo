@extends('layouts.admin.app')
@section('content')
@push('css')
  <link rel="stylesheet" href="{{url('css/backend/dashboard.css')}}">
@endpush
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card-widget">
				<div class="card-widget-icon">
					<i class="fas fa-users-cog blue"></i>
				</div>
				<div class="card-widget-body">
					<h3>Admin</h3>
					<span>{{$admins}}</span>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card-widget">
				<div class="card-widget-icon">
					<i class="fas fa-users green"></i>
				</div>
				<div class="card-widget-body">
					<h3>Members</h3>
					<span>{{$members}}</span>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card-widget">
				<div class="card-widget-icon">
					<i class="fas fa-hands-helping orange"></i>
				</div>
				<div class="card-widget-body">
					<h3>Volunteers</h3>
					<span>{{$vols}}</span>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card-widget">
				<div class="card-widget-icon">
					<i class="indigo"></i>
				</div>
				<div class="card-widget-body">
					<h3>Blood Donors</h3>
					<span>{{$blood_donors}}</span>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection