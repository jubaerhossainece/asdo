@extends('layouts.backend.app')
@section('content')
@push('css')
<link rel="stylesheet" href="{{url('vendor/BVSelect/css/bvselect.css')}}">
@endpush
<div class="card">
  <div class="card-header">
    <h4>Edit Profile</h4>
  </div>
</div>


<form action="{{route('asdo.users.update', $user->id)}}">
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
      <input type="email" class="form-control" id="email">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="guardian">Father/Husband</label>
      <input type="text" name="guardian" class="form-control" id="guardian">
    </div>
    <div class="form-group col-md-6">
      <label for="mother">Mother</label>
      <input type="text" class="form-control" id="mother">
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
      <label for="phoneNumber">Birth Certificate Number</label>
      <input type="text" name="number" class="form-control" id="phoneNumber">
    </div>
    <div class="form-group col-md-6">
      <label for="bloodGroup">Blood group</label>
      <br>
      <select name="" id="blood-group-select">
        <option data-separator="true">Select Option</option>
        <option value="1">A positive (A+)</option>
        <option value="2">A negative (A-)</option>
        <option value="3">B positive (B+)</option>
        <option value="4">B negative (B-)</option>
        <option value="5">AB positive (AB+)</option>
        <option value="6">AB negative (AB-)</option>
        <option value="7">O positive (O+)</option>
        <option value="8">O negative (O-)</option>
      </select>
      <!-- <input type="text" name="blood_group" class="form-control" id="bloodGroup" placeholder="NID number"> -->
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>
</div>

@push('script')
<script src="{{url('vendor/BVSelect/js/bvselect.js')}}"></script>
<script src="{{url('vendor/BVSelect/js/bvselect.polyfill.js')}}"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
      var demo1 = new BVSelect({
        selector: "#blood-group-select",
        width: "100%",
        searchbox: true,
        offset: true,
        placeholder: "Select Option",
        search_placeholder: "Search...",
        search_autofocus: true,
        breakpoint: 450
      });
});
</script>
@endpush
@endsection