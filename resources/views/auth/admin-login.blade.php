@extends('layouts.app')

@section('content')
<!-- [ auth-signin ] start -->

<div class="row" id="login">
    <div class="col-md-5">
        @if(Session::has('alert-success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert-box">
              <p><strong>Success! </strong></p>{{ Session::get('alert-success')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif


        <div class="card ">
            <div class="card-header text-center"><p>Login to admin panel</p>
            </div>
            <div class="card-body">
                <form action="{{route('asdo.submit')}}" method="post">
                    @csrf
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Email address"@error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus>
                                </div>

                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Password"@error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                            </div>

                            @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>    
<!-- [ auth-signin ] end -->
@endsection
