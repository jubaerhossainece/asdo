@extends('layouts.backend.app')
@section('content')
@push('css')
  <link rel="stylesheet" href="{{url('css/profile.css')}}">
@endpush

@if(Session::has('alert-success') || Session::has('alert-danger'))
<div class="alert {{Session::has('alert-success') ? 'alert-success' : 'alert-danger'}} alert-dismissible fade show" role="alert">
  <strong>{{Session::has('alert-success') ? 'Success!' : 'Danger!'}}</strong> {{Session::has('alert-success') ? Session::get('alert-success') : Session::get('alert-danger')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="card profile-nav">
  <div class="row">
    <div class="col-sm-3 profile-image">
      <div class="">
        <img class="profile-img" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
      </div>
    </div>
    <div class="col-sm-6 short-detail">
      <h3><strong> {{$user->name}} </strong></h3>
      <h5><label for="">Email-address : </label> {{$user->email}}</h5>
      <h5><label for="">Phone :</label> <strong> {{$user->phone}}</strong></h5>
      <h5><label for="">NID : </label><span> {{$user->nid}}</span></h5>
      <h5><label for="">Address : </label> <span> {{$user->present_address}}</span></h5>
    </div>
    <div class="col-sm-3 edit-button">
      <a href="{{route('asdo.users.edit', $user->id)}}" class="btn edit-profile"><i class="fas fa-edit pr-2"></i>Edit Profile</a>
    </div>
  </div>
</div>
      

<div class="card" id="personal-details">
  <div class="card-header">
    <h3>Personal Information</h3>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        
        <div class="row profile-info">
          <div class="col-4">
            <label for="">Name : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->name}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for="">Father/Husband</label>
          </div> 
          <div class="col-8">
            <strong> {{$user->guardian}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for="">Mother : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->mother}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for="">Email-address : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->email}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for="">Phone Number :</label>
          </div> 
          <div class="col-8">
            <strong> {{$user->phone}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for=""> Birth Certificate Number : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->birth_id}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for=""> NID Number : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->nid}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for=""> Blood Group : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->blood_group}}</strong>
          </div>
        </div>
      </div>


      <div class="col-12 deivider">
        <div class="row profile-info">
          <div class="col-4">
            <label for="">Member Type : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->member_type}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for="">Nationality : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->nationality}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for=""> Religion :</label>
          </div> 
          <div class="col-8">
            <strong> {{$user->religion}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for=""> Facebook Id :</label>
          </div> 
          <div class="col-8">
            <strong> <a href="{{$user->facebook_id}}" target="_blank" rel="noopener noreferrer">{{$user->facebook_id}}</a> </strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="card" id="personal-details">
  <div class="card-header">
    <h3>Address & Education</h3>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="row profile-info">
          <div class="col-4">
            <label for="">Education : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->education}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for="">Present Address :</label>
          </div> 
          <div class="col-8">
            <strong> {{$user->present_address}}</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-4">
            <label for="">Permanent Address : </label>
          </div> 
          <div class="col-8">
            <strong> {{$user->permanent_address}}</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection