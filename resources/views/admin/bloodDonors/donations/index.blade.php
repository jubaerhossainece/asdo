@extends('layouts.admin.app')
@section('content')
@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('css/profile.css')}}">
  <style>
	  h2.page-title span {
		color: #4e4ed1;
		font-weight: 600;
	}
	  .donation-info .icon{
		  height: 30px;
		  width: auto; 
		  margin-right: 10px;
	  }

	  .donation-info div.col-md-6 {
		 padding: 15px;
	  }

	  .donation-info div > span{
		  font-size: 16px;
	  }

	  .donation-info div.action{
		  padding: 10px 0;
	  }
	  
  </style>
@endpush

<div class="card">
	<div class="card-header page-header">	
		<h2 class="page-title">Blood Donor - <span>{{$user->name}}</span> </h2>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h3 class="card-title">All Blood Donations</h3>
		<a href="" class="btn common-btn">
		<i class="fas fa-plus-circle"></i>
		New Blood Donotion</a>
	</div>

	<div class="card-body p-0">
		@if(sizeof($events) > 0)
		@foreach($events as $event)
		<div class="row donation-info border-bottom pl-3">
			<div class="col-sm-12 col-md-6">
				<img src="{{asset('assets/images/icons/schedule.png')}}" class="icon" alt="">
				<span>{{\Carbon\Carbon::parse($event->date)->diffForHumans()}}</span>
			</div>
			<div class="col-sm-12 col-md-6">
				<img src="{{asset('assets/images/icons/location.png')}}" class="icon" alt="">
				<span>{{$event->address}}</span>
			</div>
			<div class="col-sm-12 text-center action">
				<a href="" class="btn btn-success btn-sm">
					<i class="fas fa-edit"></i>
				</a>
				<a href="" class="btn btn-danger btn-sm">
					<i class="fas fa-trash"></i>
				</a>
			</div>
		</div>
		@endforeach
			
		<div class="row p-3">
			<div class="col-12 text-center">
				<a href="" class="noti-link active">Show all blood donation events</a>
			</div>
		</div>
		@else
		<div class="text-center p-3">
			<h3>Never donated blood yet!</h3>
		</div>	
		@endif
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
