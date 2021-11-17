@extends('layouts.admin.app')
@section('content')
@push('css')
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
		<a href="{{route('asdo.bloodDonors.show', $user->id)}}" class="btn btn-primary">Profile</a>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h3 class="card-title">All Blood Donations</h3>
		<a href="{{route('asdo.blood-donor.events.create', $user->id)}}" class="btn btn-primary">
		<i class="fas fa-plus-circle"></i>
		New Blood Donotion</a>
	</div>

	<div class="card-body p-0">
		@if(sizeof($events) > 0)
		@foreach($events as $event)
		<div class="row donation-info border-bottom pl-3">
			<div class="col-sm-12 col-md-6 text-center">
				<img src="{{asset('assets/images/icons/schedule.png')}}" class="icon" alt="">
				<span>{{\Carbon\Carbon::parse($event->date)->diffForHumans()}}</span>
			</div>
			<div class="col-sm-12 col-md-6 text-center">
				<img src="{{asset('assets/images/icons/location.png')}}" class="icon" alt="">
				<span>{{$event->address}}</span>
			</div>
			<div class="col-sm-12 text-center action">
				<a href="{{route('asdo.blood-donor.events.edit', ['id' => $user->id, 'd_id'=>$event->id])}}" class="btn btn-success btn-sm" data-tooltip="tooltip" data-placement="top" title="Edit blood donation detail">
					<i class="fas fa-edit"></i>
				</a>
				<button onclick="deleteData({{$event->id}})" class="btn btn-danger btn-sm" data-tooltip="tooltip" data-placement="top" title="Delete this information" >
					<i class="fas fa-trash-alt"></i>
				</button>
				<form action="{{route('asdo.blood-donor.events.destroy', $event->id)}}" method="POST" style="display: none;" id="submit-delete-{{$event->id}}">
					@csrf
					@method('DELETE')
				</form>
			</div>
		</div>
		@endforeach
			
		<!-- <div class="row p-3">
			<div class="col-12 text-center">
				<a href="" class="noti-link active">Show all blood donation events</a>
			</div>
		</div> -->
		@else
		<div class="text-center p-3">
			<h3>Never donated blood yet!</h3>
		</div>	
		@endif
	</div>
</div>

@push('script')
@endpush

@endsection
