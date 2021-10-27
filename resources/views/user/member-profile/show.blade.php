@extends('layouts.user.app')
@section('content')
@push('css')
  <link rel="stylesheet" href="{{url('css/profile.css')}}">
@endpush

<div class="card profile-nav">
  <div class="row">
    <div class="col-md-5 col-xl-3 profile-image">
      <?php 
       $reg_url = '/(((http|https|ftp|ftps)\:\/\/)|(www\.))[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\:[0-9]+)?(\/\S*)?/';

       if(preg_match($reg_url, $user->photo, $url)){
        $url = $url[0];
        ?>
          <div class="circle-cropper" style="background-image: url({{$url}})">        
          </div>
        <?php  
         }else{
        ?>
          <div class="circle-cropper" style="background-image: url('{{$user->photo ? asset('/storage/asdo/images/users/'.$user->photo) : asset('assets/images/avatar-4.png')}}')">        
          </div>
        <?php 
          }
        ?>
    </div>
    <div class="col-md-7 col-xl-6 short-detail">
      <h2><strong> {{$user->name}} </strong></h2>
      <h3> {{$user->email}}</h3>
      @if($user->phone) <h3><strong> {{$user->phone}}</strong></h3> @endif
      @if($user->present_address) <h4><span> {{$user->present_address}}</span></h4> @endif
    </div>
    <div class="col-md-12 col-xl-3 edit-button">
      <a href="{{route('member.profile.edit')}}" class="btn common-btn"><i class="fas fa-edit pr-2"></i>Edit Profile</a>
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
            <label for="">Father</label>
          </div> 
          <div class="col-sm-8">
             @if($user->father)
             <span>{{$user->father}}</span>
             @else <span class="text-danger">No father name to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Husband</label>
          </div> 
          <div class="col-sm-8">
             @if($user->husband)
             <span>{{$user->husband}}</span>
             @else <span class="text-danger">No husband name to show</span>
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
            <label for=""> Gender : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->gender)
             <span>{{$user->gender}}</span>
             @else <span class="text-danger">No gender to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for=""> Blood Group : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->blood_group)
             @foreach($blood_groups as $blood_group)
             <span>{{$blood_group->name}}</span>
             @endforeach
             @else <span class="text-danger">No blood group to show</span>
             @endif
          </div>
        </div>
      </div>

      <div class="col-sm-12 deivider">

      @if(auth()->user()->user_type === 'member')
        <div class="row profile-info">
          <div class="col-sm-4">
            <label for="">Member Type : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->member_type)
             @foreach($member_types as $member_type)
             <span>{{$member_type->name}}</span>
             @endforeach
             @else <span class="text-danger">No member type to show</span>
             @endif
          </div>
        </div>
      @endif

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
            <label for="">Occupation : </label>
          </div> 
          <div class="col-sm-8">
            @if($user->occupation)
             <span>{{$user->occupation}}</span>
             @else <span class="text-danger">No occupation to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for=""> Religion :</label>
          </div> 
          <div class="col-sm-8">
            @if($user->religion)
             @foreach($religions as $religion)
             <span>{{$religion->name}}</span>
             @endforeach
             @else <span class="text-danger">No religion to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for=""> Religion :</label>
          </div> 
          <div class="col-sm-8">
            @if($user->birth_date)
             <span>{{$user->birth_date}}</span>
             @else <span class="text-danger">No birth_date to show</span>
             @endif
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-sm-4">
            <label for=""> Facebook Id :</label>
          </div> 
          <div class="col-sm-8">
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
            @if($user->present_address)
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