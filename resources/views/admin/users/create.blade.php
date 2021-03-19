@extends('layouts.admin.app')
@section('content')
@push('css')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
<div class="card">
  <div class="card-header"> 
    <h4 class="page-title float-left">Add New User</h4>
    <a href="{{route('asdo.users.index')}}" class="btn btn-secondary float-right">
    <i class="fas fa-arrow-left"></i>
    Go Back</a>
  </div>
</div>

<form method="POST" action="{{route('asdo.users.store')}}" enctype="multipart/form-data">
  @csrf
<div class="card">
  <div class="card-header">
    <h4>Personal Information</h4>
  </div>
  <div class="card-body">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
        @error('name')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email address</label>
        <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" id="email">
        @error('email')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="guardian">Father/Husband</label>
        <input type="text" name="guardian" class="form-control" id="guardian">
      </div>
      <div class="form-group col-md-6">
        <label for="mother">Mother</label>
        <input type="text" name="mother" class="form-control" id="mother">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="phoneNumber">Phone number</label>
        <input type="text" name="phone" class="form-control" id="phoneNumber">
      </div>
      <div class="form-group col-md-6">
        <label for="nidNumber">NID number</label>
        <input type="text" name="nid" class="form-control" id="nidNumber">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="birth_id">Birth Certificate Number</label>
        <input type="text" name="birth_id" class="form-control" id="birth_id">
      </div>
      <div class="form-group col-md-6">
        <label for="bloodGroup">Blood group</label>
        <br>
        <select name="blood_group" id="blood-group-select" style="width: 100%;">
          <option value="0"></option>
          @foreach($blood_groups as $bg)
            <option value="{{$bg->id}}">{{$bg->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" class="form-control" id="nationality">
      </div>
      <div class="form-group col-md-6">
        <label>Member Type</label>
        <br>
        <select name="member_type" id="member-select" style="width: 100%;">
          <option value="0"></option>
          @foreach($member_types as $member)
          <option value="{{$member->id}}">{{$member->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="facebookId">Facebook ID</label>
        <input type="url" name="facebook_id" class="form-control" id="facebookId">
      </div>
      <div class="form-group col-md-6">
        <label>Religion</label>
        <br>
        <select name="religion" id="religion-select"  style="width: 100%;">
          <option value="0"></option>
          @foreach($religions as $religion)
            <option value="{{$religion->id}}">{{$religion->name}}</option>
           @endforeach
        </select>
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
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h4>Image & Others</h4>
  </div>
  <div class="card-body">
    <label for="photo">Profile Image</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Upload</span>
      </div>
      <div class="custom-file">
        <input type="file" name="photo" class="custom-file-input" id="profile-image">
        <label class="custom-file-label" for="profile-image" id="profile-image-label">Choose file</label>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="education">Education</label>
        <input type="text" name="education" class="form-control" id="education">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="present_address">Present address</label>
        <input type="text" name="present_address" class="form-control" id="present_address">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="permanent_address">Permanent address</label>
        <input type="text" name="permanent_address" class="form-control" id="permanent_address">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Create Account</button>
  </div>
</div>
    
  
</form>

@push('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('#blood-group-select').select2({
      dropdownCssClass : 'no-search',
      allowClear: true,
      placeholder: {
        id: '0', // the value of the option
        text: 'Select an option'
      }
    });
});

  $(document).ready(function() {
    $('#religion-select').select2({
      dropdownCssClass : 'no-search',
      allowClear: true,
      placeholder: {
        id: '0', // the value of the option
        text: 'Select religion'
      }
    });
});

   $(document).ready(function() {
    $('#member-select').select2({
      dropdownCssClass : 'no-search',
      allowClear: true,
      placeholder: {
        id: '0', // the value of the option
        text: 'Select Member Type'
      }
    });
});

document.getElementById("profile-image").onchange = function() {
  document.getElementById("profile-image-label").innerHTML = this.value;
};


</script>
@endpush
@endsection