@extends('layouts.backend.app')
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

@if(Session::has('alert-success') || Session::has('alert-danger'))
<div class="alert {{Session::has('alert-success') ? 'alert-success' : 'alert-danger'}} alert-dismissible fade show" role="alert">
  <strong>{{Session::has('alert-success') ? 'Success!' : 'Danger!'}}</strong> {{Session::has('alert-success') ? Session::get('alert-success') : Session::get('alert-danger')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

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
        <input type="text" name="name" class="form-control" id="name">
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email address</label>
        <input type="email"  name="email" class="form-control" id="email">
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
          <option value="A positive (A+)">A positive (A+)</option>
          <option value="A negative (A-)">A negative (A-)</option>
          <option value="B positive (B+)">B positive (B+)</option>
          <option value="B negative (B-)">B negative (B-)</option>
          <option value="AB positive (AB+)">AB positive (AB+)</option>
          <option value="AB negative (AB-)">AB negative (AB-)</option>
          <option value="O positive (O+)">O positive (O+)</option>
          <option value="O negative (O-)">O negative (O-)</option>
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
          <option value="1">Member</option>
          <option value="2">Donar</option>
          <option value="3">Some</option>
          <option value="4">Other</option>
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
          <option value="Islam">Islam</option>
          <option value="Hinduism">Hinduism</option>
          <option value="Christianity">Christianity</option>
          <option value="Buddhism">Buddhism</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
      <div class="form-group col-md-6">
        <label for="password-confirm">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password-confirm">
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
      placeholder: "Select a option",
      allowClear: true,
      placeholder: {
        id: '-1', // the value of the option
        text: 'Select an option'
      }
    });
});

  $(document).ready(function() {
    $('#religion-select').select2({
      dropdownCssClass : 'no-search',
      placeholder: "Select a option",
      allowClear: true,
      placeholder: {
        id: '-1', // the value of the option
        text: 'Select religion'
      }
    });
});

   $(document).ready(function() {
    $('#member-select').select2({
      dropdownCssClass : 'no-search',
      placeholder: "Select a option",
      allowClear: true,
      placeholder: {
        id: '-1', // the value of the option
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