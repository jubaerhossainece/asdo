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
    <div class="col-md-5 col-xl-3 profile-image">
      <div class=" profile-img">
        <img class="" src="{{$user->photo ? asset('/storage/asdo/images/'.$user->photo) : url('assets/images/avatar-4.png')}}" alt="">
      </div>
    </div>
    <div class="col-md-7 col-xl-6 short-detail">
      <h3><strong> {{$user->name}} </strong></h3>
      <h5> {{$user->email}}</h5>
      <h5><label for="">Phone :</label> <strong> {{$user->phone}}</strong></h5>
      <h5><label for="">NID : </label><span> {{$user->nid}}</span></h5>
      <h5><label for="">Address : </label> <span> {{$user->present_address}}</span></h5>
    </div>
    <div class="col-md-12 col-xl-3 edit-button">
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
          <div class="col-sm-4">
            <label for="">Name : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->name)
             <span>{{$user->name}}</span>
             @else <span class="text-danger">'No name to show'</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Father/Husband</label>
          </div> 
          <div class="col-sm-8">
             @if($user->guardian)
             <span>{{$user->guardian}}</span>
             @else <span class="text-danger">No husband/father name to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Mother : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->mother)
             <span>{{$user->mother}}</span>
             @else <span class="text-danger">No mother name to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Email-address : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->email)
             <span>{{$user->email}}</span>
             @else <span class="text-danger">No email addressphone to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Phone Number :</label>
          </div> 
          <div class="col-sm-8">
            @if($user->phone)
             <span>{{$user->phone}}</span>
             @else <span class="text-danger">No phone number to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for=""> Birth Certificate ID : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->birth_id)
             <span>{{$user->birth_id}}</span>
             @else <span class="text-danger">No birth certificate ID to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for=""> NID Number : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->nid)
             <span>{{$user->nid}}</span>
             @else <span class="text-danger">No NID number to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for=""> Blood Group : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->blood_group)
             <span>{{$user->blood_group}}</span>
             @else <span class="text-danger">No blood group to show</span>
             @endif
          </div>
        </div>
      </div>


      <div class="col-sm-12 deivider">
        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Member Type : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->member_type)
             <span>{{$user->member_type}}</span>
             @else <span class="text-danger">No member type to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Nationality : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->nationality)
             <span>{{$user->nationality}}</span>
             @else <span class="text-danger">No nationality to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for=""> Religion :</label>
          </div> 
          <div class="col-sm-8">
            @if($user->religion)
             <span>{{$user->religion}}</span>
             @else <span class="text-danger">No religion to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for=""> Facebook Id :</label>
          </div> 
          <div class="col-sm-md-8">
            @if($user->facebook_id)
             <span><a href="{{$user->facebook_id}}" target="_blank" rel="noopener noreferrer">{{$user->facebook_id}}</a></span>
            @else <span class="text-danger">No facebook id to show</span>
            @endif
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
      <div class="col-sm-12">
        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Education : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->education)
             <span>{{$user->education}}</span>
             @else <span class="text-danger">No education info to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Present Address :</label>
          </div> 
          <div class="col-sm-8">
            @if($user->mother)
             <span>{{$user->present_address}}</span>
             @else <span class="text-danger">No present address to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Permanent Address : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->permanent_address)
             <span>{{$user->permanent_address}}</span>
             @else <span class="text-danger">No permanent address to show</span>
             @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection