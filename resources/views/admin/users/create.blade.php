@extends('layouts.admin.app')
@section('content')
@push('css')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{url('css/backend/member.css')}}">
@endpush

<div class="card">
  <div class="card-header">
    <h4 class="float-left">Add new user</h4>
  </div>
</div>


<form method="POST" action="{{route('asdo.users.store')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="user_type" value="member">

<div class="card">
  <div class="card-header">
    <h4>Personal Information</h4>
  </div>
  <div class="card-body">
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
        <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" value="{{old('name')}}">
        @error('email')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="phoneNumber">Phone number</label>
        <input type="text" name="phone" class="form-control" id="phoneNumber"value="{{old('phone')}}">
      </div>

      <div class="form-group col-md-6">
        <label for="gender">Gender</label>
        <br>
        <select name="gender" id="gender-select" id="gender" style="width: 100%;">
          <option value="0"></option>
            <option @if(old('gender') === 'Male') selected @endif value="Male">Male</option>
            <option @if(old('gender') === 'Female') selected @endif value="Female">Female</option>
            <option @if(old('gender') === 'Other') selected @endif value="Other">Other</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password"value="{{old('password')}}">
      </div>

      <div class="form-group col-md-6">
        <label>Member Type</label>
        <br>
        <select name="member_type" id="member-select" style="width: 100%;">
          <option value="0"></option>
          @foreach($member_types as $member)
          <option @if(old('member_type') == $member->name) selected @endif value="{{$member->id}}">{{$member->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="father">Father</label>
        <input type="text" name="father" class="form-control" id="father"value="{{old('father')}}">
      </div>
      <div class="form-group col-md-6">
        <label for="mother">Mother</label>
        <input type="text" name="mother" class="form-control" id="mother"value="{{old('mother')}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="husband">Husband</label>
        <input type="text" name="husband" class="form-control" id="husband"value="{{old('husband')}}">
      </div>

      <div class="form-group col-md-6">
        <label for="nidNumber">NID number</label>
        <input type="text" name="nid" class="form-control" id="nidNumber"value="{{old('nid')}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="birth_certificate_id">Birth Certificate ID</label>
        <input type="text" name="birth_id" class="form-control" id="birth_id"value="{{old('birth_id')}}">
      </div>
      <div class="form-group col-md-6">
        <label for="bloodGroup">Blood group</label>
        <br>
        <select name="blood_group" id="blood-group-select" style="width: 100%;">
          <option value="0"></option>
          @foreach($blood_groups as $bg)
            <option @if(old('blood_group') == $bg->id) selected @endif value="{{$bg->id}}">{{$bg->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" class="form-control" id="nationality"value="{{old('nationality')}}">
      </div> 

      <div class="form-group col-md-6">
        <label for="birth_date">Date of birth</label>
        <input type="text" name="birth_date" class="form-control" id="birth_date"value="{{old('birth_date')}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="facebookId">Facebook ID</label>
        <input type="text" name="facebook_id" class="form-control" id="facebookId"value="{{old('facebook_id')}}">
      </div>
      <div class="form-group col-md-6">
        <label>Religion</label>
        <br>
        <select name="religion" id="religion-select"  style="width: 100%;">
          <option value="0"></option>
          @foreach($religions as $religion)
            <option @if(old('religion') == $religion->id) selected @endif value="{{$religion->id}}">{{$religion->name}}</option>
           @endforeach
        </select>
      </div>
    </div>
</div>

<div class="card">
  <div class="card-header">
    <h4>Photo & Others</h4>
  </div>
  <div class="card-body">
    <label for="photo">Profile Photo</label>
    <div class="mb-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
          <input type="file" name="photo" class="custom-file-input" id="profile-image">
          <label class="custom-file-label" for="profile-image" id="profile-image-label">Choose File</label>
        </div>
      </div>

      @error('photo')
        <div class="text-danger">
          <strong>{{$message}}</strong>
        </div>
      @enderror
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="education">Education</label>
        <input type="text" name="education" class="form-control" id="education"value="{{old('education')}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="occupation">Occupation</label>
        <input type="text" name="occupation" class="form-control" id="occupation"value="{{old('occupation')}}">
      </div>
    </div>


    <div class="form-group">
      <label for="present_address">Present address</label>
      <textarea rows="4" name="present_address" class="form-control" id="present_address">{{old('present_address')}}</textarea>
    </div>

    <div class="form-group">
      <label for="permanent_address">Permanent address</label>
      <textarea rows="4" name="permanent_address" class="form-control" id="permanent_address">{{old('permanent_address')}}</textarea>
    </div>
    <button type="submit" class="btn common-btn">Create Account</button> 
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

  $(document).ready(function() {
    $('#gender-select').select2({
      dropdownCssClass : 'no-search',
      allowClear: true,
      placeholder: {
        id: '0', // the value of the option
        text: 'Select Your Gender'
      }
    });
  }); 

document.getElementById("profile-image").onchange = function() {
  document.getElementById("profile-image-label").innerHTML = this.value;
};


</script>
@endpush
@endsection