@extends('layouts.backend.app')
@section('content')
@push('css')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush


<div class="card">
  <div class="card-header">
    <h4 class="float-left">Update your profile</h4>
  </div>
</div>


<div class="card">
  <div class="card-header">
    <h4>Personal Information</h4>
  </div>
  <div class="card-body">
  <form method="POST" action="{{route('profile.update', auth()->user()->id)}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$user->name ? $user->name : ''}}" class="form-control @error('name') is-invalid @enderror" id="name">
        @error('name')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
      </div>

      <div class="form-group col-md-6">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$user->email ? $user->email : ''}}">
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
        <input type="text" name="guardian" class="form-control" id="guardian" value="{{$user->guardian ? $user->guardian : ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="mother">Mother</label>
        <input type="text" name="mother" class="form-control" id="mother" value="{{$user->mother ? $user->mother : ''}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="phoneNumber">Phone number</label>
        <input type="text" name="phone" class="form-control" id="phoneNumber" value="{{$user->phone ? $user->phone : ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="nidNumber">NID number</label>
        <input type="text" name="nid" class="form-control" id="nidNumber" value="{{$user->nid ? $user->nid : ''}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="birth_certificate_id">Birth Certificate ID</label>
        <input type="text" name="birth_id" class="form-control" id="birth_id" value="{{$user->birth_id ? $user->birth_id : ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="bloodGroup">Blood group</label>
        <br>
        <select name="blood_group" id="blood-group-select" style="width: 100%;">
          <option value="0"></option>
          @foreach($blood_groups as $bg)
            <option value="{{$bg->id}}" {{$user->blood_group == $bg->id ? 'selected' : ''}}>{{$bg->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" class="form-control" id="nationality" value="{{$user->nationality ? $user->nationality : ''}}">
      </div>
      <div class="form-group col-md-6">
        <label>Member Type</label>
        <br>
        <select name="member_type" id="member-select" style="width: 100%;">
          <option value="0"></option>
          @foreach($member_types as $member)
          <option value="{{$member->id}}" {{$user->member_type == $member->id ? 'selected' : ''}}>{{$member->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="facebookId">Facebook ID</label>
        <input type="text" name="facebook_id" class="form-control" id="facebookId" value="{{$user->facebook_id ? $user->facebook_id : ''}}">
      </div>
      <div class="form-group col-md-6">
        <label>Religion</label>
        <br>
        <select name="religion" id="religion-select"  style="width: 100%;">
          <option value="0"></option>
          @foreach($religions as $religion)
            <option value="{{$religion->id}}" {{$user->religion == $religion->id ? 'selected' : ''}}>{{$religion->name}}</option>
           @endforeach
        </select>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h4>Photo & Others</h4>
  </div>
  <div class="card-body">
    <label for="photo">Profile Image</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Upload</span>
      </div>
      <div class="custom-file">
        <input type="file" name="photo" class="custom-file-input" id="profile-image">
        <label class="custom-file-label" for="profile-image" id="profile-image-label">{{$user->photo ? $user->photo : 'Choose file'}}</label>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="education">Education</label>
        <input type="text" name="education" class="form-control" id="education" value="{{$user->education ? $user->education : ''}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="present_address">Present address</label>
        <input type="text" name="present_address" class="form-control" id="present_address" value="{{$user->present_address ? $user->present_address : ''}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="permanent_address">Permanent address</label>
        <input type="text" name="permanent_address" class="form-control" id="permanent_address" value="{{$user->permanent_address ? $user->permanent_address : ''}}">
      </div>
    </div>
<button type="submit" class="btn btn-primary">Update Account</button>
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