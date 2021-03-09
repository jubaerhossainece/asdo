@extends('layouts.backend.app')
@section('content')
<!-- User Information section -->
<form action="{{route('asdo.password.update')}}" method="POST">
	@csrf
	@method('PUT')
	<div class="row">
		<div class="col-md-12">
			@if(Session::has('alert-success') || Session::has('alert-danger'))
				<div class="alert {{Session::has('alert-success') ? 'alert-success' : 'alert-danger'}} alert-dismissible fade show" role="alert" id="alert-box">
				  <strong>{{Session::has('alert-success') ? 'Success!' : 'Alert!'}}</strong> {{Session::has('alert-success') ? Session::get('alert-success') : Session::get('alert-danger')}}
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			@endif
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Change Password</h5>
				</div>
				<div class="card-body">
						<div class="form-group">					
						<label for="current_password">Current Password</label>
						<input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" placeholder="Enter your password">
						@error('current_password')
							<div class="text-danger">
								<strong>{{$message}}</strong>
							</div>
						@enderror
					</div>

					<div class="form-group">					
						<label for="password">New Password</label>
						<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">
						<small class="form-text text-muted">
							At least 8 characters long.
						</small>
						@error('password')
							<div class="text-danger">
								<strong>{{$message}}</strong>
							</div>
						@enderror
					</div>

					<div class="form-group">					
						<label for="confirm_password">Confirm Password</label>
						<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirm_password" name="password_confirmation" placeholder="Confirm password">
						@error('password_confirmation')
							<div class="text-danger">
								<strong>{{$message}}</strong>
							</div>
						@enderror
					</div>

					<button type="submit" class="btn btn-primary" id="submit" name="submit">
						 <i class="fas fa-arrow-circle-up"></i>
						 Update Password
					</button>
				</div>
			</div>
		</div>	
	</div>

</form>
@push('script')
<script>
  $("#alert-box").delay(6000).fadeOut(1000);
</script>
@endpush
@endsection('content')