@extends('layouts.backend.app')
@section('content')
@push('css')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{url('css/profile.css')}}">
@endpush
<div class="card profile-nav">
  <div class="row">
    <div class="col-sm-3 profile-image">
      <div class="">
        <img class="profile-img" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
      </div>
    </div>
    <div class="col-sm-6 short-detail">
      <h3><strong> Md. Jubaer Hossain</strong></h3>
      <h5><label for="">Email-address : </label> <strong> jubaer@example.com</strong></h5>
      <h5><label for="">Phone :</label> <strong> 01754633041</strong></h5>
      <h5><label for="">NID : </label><span> 097421309472304</span></h5>
      <h5><label for="">Address : </label> <span> Mirpur-1, dhaka, bangladesh</span></h5>
    </div>
    <div class="col-sm-3 edit-button">
      <a href="{{route('asdo.users.edit', $user->id)}}" class="btn edit-profile">Edit Profile</a>
    </div>
  </div>
</div>
      

<div class="card" id="personal-details">
  <div class="card-header">
    <h3>Personal Details</h3>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="row profile-info">
          <div class="col-sm-6 col-6">
            <label for="">Name : </label>
          </div> 
          <div class="col-sm-6 col-6">
            <strong> Md. Jubaer Hossain</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for="">Email-address : </label>
          </div> 
          <div class="col-6">
            <strong> jubaer@example.com</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for="">Phone Number :</label>
          </div> 
          <div class="col-6">
            <strong> 01754633041</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for=""> Birth Certificate Number : </label>
          </div> 
          <div class="col-6">
            <strong> 097421309472304</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for=""> NID Number : </label>
          </div> 
          <div class="col-6">
            <strong> 0834698534985</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for=""> Blood Group : </label>
          </div> 
          <div class="col-6">
            <strong> B+</strong>
          </div>
        </div>
      </div>


      <div class="col-12 deivider">
        <div class="row profile-info">
          <div class="col-6">
            <label for="">Member Type : </label>
          </div> 
          <div class="col-6">
            <strong> General Member</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for="">Father/Husband</label>
          </div> 
          <div class="col-6">
            <strong> Jahir Uddin</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for="">Mother : </label>
          </div> 
          <div class="col-6">
            <strong> Rahima Khatun</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for="">Nationality : </label>
          </div> 
          <div class="col-6">
            <strong> Bangladeshi</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for=""> Religion :</label>
          </div> 
          <div class="col-6">
            <strong> Islam</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for=""> Facebook Id :</label>
          </div> 
          <div class="col-6">
            <strong> <a href="./www.facebook.com/jubaer.hossain.7">www.facebook.com/jubaer.hossain.7</a> </strong>
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
          <div class="col-6">
            <label for="">Education : </label>
          </div> 
          <div class="col-6">
            <strong> BSc Engineering</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for="">Present Address :</label>
          </div> 
          <div class="col-6">
            <strong> Tupipara, Sreepur, Magura</strong>
          </div>
        </div>

        <div class="row profile-info">
          <div class="col-6">
            <label for="">Permanent Address : </label>
          </div> 
          <div class="col-6">
            <strong> Tupipara, sreepur, magura</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection