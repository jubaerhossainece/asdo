@extends('layouts.frontend.app')
@push('css')
  <link href="/css/frontend/volunteer.css" rel="stylesheet" />
@endpush
@section('content')    
    <section id="form-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-5 bg-image" style="background: url('/assets/images/frontend/signin/volunteer.jpg') center center / cover no-repeat;">
            <div class="volunteer-login-overlay"></div>
          </div>
          <div class="card col-md-6 col-lg-7 col-sm-12 mx-auto login-form">
            <div class="card-header">
              <h2>Sign up</h2>
              <h6>Become a <span class="alokito-volunteer">alokito volunteer</span></h6>
            </div>

            @if(Session::has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong> {{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="card-body">
              <form action="/volunteer/register" method="POST">
              @csrf
                <div class="form-group">
                  <label for="name" class="form-label">Your name</label>
                  <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                  @error('name')
                    <div class="text-danger">
                      <strong>{{$message}}</strong>
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="identifier" class="form-label">Email/Phone</label>
                  <input type="text" id="identifier" name="identifier" class="form-control" value="{{old('identifier')}}">
                  @error('identifier')
                    <div class="text-danger">
                      <strong>{{$message}}</strong>
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="password" class="form-label">
                    Password
                    </br>
                    <small id="phoneHelp" class="form-text text-muted">(Minimum 6 characters)</small>
                  </label>
                  <input type="password" class="form-control" name="password" id="password" >
                  @error('password')
                    <div class="text-danger">
                      <strong>{{$message}}</strong>
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="password" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" name="password_confirmation" id="password" >
                </div>

                <div class="form-group submit">
                  <button type="submit" class="btn volunteer-btn" >
                    <i class="fas fa-sign-in-alt "></i>
                    <span class="ml-3">Sign up</span>
                  </button>
                </div>
              </form>
            </div>

            <div class="card-footer">
              <span class="text-muted">Already have an account?</span> 
              <a href="/volunteer/login" class="">Sign in</a>.
            </div>
          </div>
        </div>
      </div>
    </section>
@push('script')
  
@endpush    
@endsection