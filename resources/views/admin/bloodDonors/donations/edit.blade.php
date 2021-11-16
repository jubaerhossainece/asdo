@extends('layouts.admin.app')
@section('content')
@push('css')
<link rel="stylesheet" type="text/css" href="{{url('assets/vendors/datetimepicker/jquery.datetimepicker.min.css')}}"/>
<style>
     h2.page-title span {
		color: #4e4ed1;
		font-weight: 600;
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
		<h3 class="card-title">Add Blood Donation events</h3>
	</div>

	<div class="card-body">
        <form method="post" action="{{route('asdo.blood-donor.events.update', $event->id)}}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="address" class="form-label">Donation address</label>
                <textarea class="form-control" name="address" id="address" aria-describedby="address">{{$event->address}}
                </textarea>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Donation date</label>
                <input type="text" name="date" class="form-control" id="date" value="{{$event->date}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
	</div>
</div>

@push('script')
<script src="{{url('assets/vendors/datetimepicker/jquery.datetimepicker.full.min.js')}}"></script>

<script>
	$(document).ready(function () {
		$('#date').datetimepicker({
            timepicker:false,
            format:'Y-m-d'
        });
	})
 </script>
@endpush

@endsection
