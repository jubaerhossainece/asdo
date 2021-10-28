@extends('layouts.user.voluntr-app')
@section('content')
@push('css')
<style>
	.circle-cropper {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50%;
    border-radius: 50%;
    width: 100%;
    padding-top: 100%;
}

.choose-photo{
    display: flex;
    justify-content: center;
}

.choose-photo:hover{	
    cursor: pointer !important;
}


</style>
@endpush

<div class="card">
	<div class="card-header">
		<h2>Update profile image</h2>
	</div>
	<div class="card-body">
		<form action="{{route('volunteer.photo.update')}}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="col-md-5 col-xl-4 profile-image-change">
				<?php 
       $reg_url = '/(((http|https|ftp|ftps)\:\/\/)|(www\.))[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\:[0-9]+)?(\/\S*)?/';

       if(preg_match($reg_url, $user->photo, $url)){
        $url = $url[0];
        ?>
          <div id="circle-cropper" class="circle-cropper" style="background-image: url({{$url}})">        
          </div>
        <?php  
         }else{
        ?>
          <div id="circle-cropper" class="circle-cropper mb-3" style="background-image: url('{{$user->photo ? asset('/storage/asdo/images/volunteers/'.$user->photo) : asset('assets/images/avatar-4.png')}}')">        
          </div>
        <?php 
          }
        ?>
		    @error('photo')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
		    
		    <div class="input-group mb-3">
				  <div class="custom-file">
				    <input type="file" name="photo" class="custom-file-input @error('photo') is-invalid @enderror" onchange="readURL(this)" id="profile-image">
				    <label class="custom-file-label choose-photo" id="choose-photo">Change photo</label>
				  </div>
				</div>

			<button type="submit" class="btn volunteer-btn">Update Photo</button>
			</div>
		</form>
	</div>
</div>

@push('script')
	<script>
		function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
    	// $('#circle-cropper').style.backgroundImage = '';
    	// alert(e.target.result);
    	var base64image = e.target.result;
    	
    	var img = "url('"+base64image+"')";
    	// alert(img);
    	// $('#circle-cropper').style.backgroundImage = '';
    	document.getElementById('circle-cropper').style.backgroundImage = img;
      };

    reader.readAsDataURL(input.files[0]);
  }
}
		
	</script>
@endpush

@endsection