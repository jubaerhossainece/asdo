@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/login.css" rel="stylesheet" />
@endpush
@section('content')    
    <section id="form-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-5 bg-image" style="background: url('assets/images/frontend/signin/volunteer.jpg') center center / cover no-repeat;">
            <div class="login-overlay"></div>
          </div>
          <div class="card col-md-6 col-lg-7 col-sm-12 mx-auto login-form">
            <div class="card-header">
              <h2>Sign up</h2>
              <h6>Become a <span class="alokito-member">alokito member</span></h6>
            </div>

            @if(Session::has('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong> {{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="card-body">
              <form action="register" method="POST">
                @csrf
                <input type="hidden" id="user_type" name="user_type" value="member">

                <div class="form-group">
                  <label for="name" class="form-label">Your name</label>
                  <input type="text" id="name" name="name" class="form-control" >
                  @error('name')
                    <div class="text-danger">
                      <strong>{{$message}}</strong>
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="email" class="form-label">Email/Phone</label>
                  <input type="text" id="email" name="identifier" class="form-control" >
                  @error('identifier')
                    <div class="text-danger">
                      <strong>{{$message}}</strong>
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" >
                  @error('password')
                    <div class="text-danger">
                      <strong>{{$message}}</strong>
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="password-confirm" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" name="password_confirmation" id="password-confirm" >
                </div>

                <div class="form-group submit">
                  <button type="submit" class="btn common-btn" >
                    <i class="fas fa-sign-in-alt "></i>
                    <span class="ml-3">Sign up</span>
                  </button>
                </div>
              </form>
            </div>

            <div class="card-footer">
              <span class="text-muted">Already have an account?</span> 
              <a href="login">Sign in</a>.
            </div>
          </div>
        </div>
      </div>
    </section>
@push('script')
  
@endpush    
@endsection