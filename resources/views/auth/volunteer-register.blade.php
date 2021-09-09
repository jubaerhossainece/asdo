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
            <div class="card-body">
              <form action="" method="POST">
              
                <input type="hidden" id="user_type" name="user_type" value="volunteer">

                <div class="form-group">
                  <label for="email" class="form-label">Your name</label>
                  <input type="text" id="email" name="name" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="email" class="form-label">Email/Phone</label>
                  <input type="text" id="email" name="identified" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" >
                </div>

                <div class="form-group">
                  <label for="password" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" name="confirm_password" id="password" >
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