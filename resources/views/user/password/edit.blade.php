@extends('layouts.backend.app')
@section('content')
@push('css')

@endpush
<!-- User Information section -->

	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Change Password</h5>
		</div>
		<div class="card-body">	
			<form action="{{route('password.update')}}" method="POST">
				@csrf
				@method('PUT')
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

			</form>
		</div>
	</div>
@endsection('content')