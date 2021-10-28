@extends('layouts.frontend.app')
@push('css')
  <link href="css/frontend/login.css" rel="stylesheet" />
@endpush
@section('content')    
    <section id="form-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-5 bg-image" style="background: url('assets/images/frontend/signin/donor.jpg') center center / cover no-repeat;">
            <div class="login-overlay"></div>
          </div>
          <div class="card col-md-6 col-lg-7 col-sm-12 mx-auto login-form">
            <div class="card-header">
              <h2>Sign in as <span class="alokito-member">alokito member</span></h2>
          
              @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Sorry!</strong> {{Session::get('message')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
            </div>

            <div class="card-body">
              <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="email" class="form-label">Email/Phone</label>
                  <input type="text" id="email" name="identifier" class="form-control" placeholder="Enter email or phone number" value="{{old('identifier')}}">
                  @error('identifier')
                    <div class="text-danger">
                      <strong>{{$message}}</strong>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                  @error('password')
                    <div class="text-danger">
                      <strong>{{$message}}</strong>
                    </div>
                  @enderror
                </div>
                <div class="form-row forgot-pass">
                  <a href="" class="">Forgot password?</a>
                </div>
                <div class="form-group submit">
                  <button type="submit" class="btn common-btn" >
                    <i class="fas fa-sign-in-alt "></i>
                    <span class="ml-3">Sign in</span>
                  </button>
                </div>
              </form>
            </div>

            <div class="card-footer">
              <span class="text-muted">Don't have an account yet</span> 
              <a href="register">Sign up</a>.
            </div>
          </div>
        </div>
      </div>
    </section>
@push('script')
  
@endpush    
@endsection