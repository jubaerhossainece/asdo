@extends('layouts.admin.app')
@section('content')
@push('css')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
<div class="card">
  <div class="card-header"> 
    <h4 class="page-title float-left">Add new admin member</h4>
    <a href="{{route('asdo.admins.index')}}" class="btn btn-secondary float-right">
    <i class="fas fa-arrow-left"></i>
    Go Back</a>
  </div>
</div>

<div class="card">
  <div class="card-body">
<form method="POST" action="{{route('asdo.admins.store')}}" enctype="multipart/form-data">
  @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Name</label> 
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
        @error('name')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email address</label>
        <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}">
        @error('email')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" class="form-control" id="phone" value="{{old('phone')}}">
      </div>
      <div class="form-group col-md-6">
        <label>Role</label>
        <br>
        <select name="role_id" id="role-select"  style="width: 100%;">
          <option value="0"></option>
          @foreach($roles as $role)
            <option @if(old('role_id') == $role->id) selected @endif value="{{$role->id}}">{{$role->name}}</option>
           @endforeach
        </select>
        @error('role_id')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
        @error('password')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="password-confirm">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password-confirm">
        @error('password_confirmation')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Create Account</button>
</form>
</div>
</div>

@push('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  

  $(document).ready(function() {
    $('#role-select').select2({
      dropdownCssClass : 'no-search',
      allowClear: true,
      placeholder: {
        id: '0', // the value of the option
        text: 'Select Role'
      }
    });
});

</script>
@endpush
@endsection