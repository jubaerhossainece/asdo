@extends('layouts.admin.app')
@section('content')
<div class="card">
	<div class="card-header page-header">
			<h2 class="page-title">
				{{isset($slider) ? 'Edit' : 'Add New'}} Slider Image
			</h2>
			<a href="{{route('asdo.sliders.index')}}" class="btn btn-secondary float-right">
				<i class="fas fa-arrow-circle-left"></i>
				Back to list
			</a>
	</div>	
</div>


<div class="row">
	<div class="col-md-12">
		<div class="card">
		<div class="card-header">
			<h3 class="card-title">{{isset($slider) ? 'Edit' : 'Upload New'}} Slider Image</h3>
		</div>
		<div class="card-body">
			<form action="{{isset($slider) ? route('asdo.sliders.update', $slider->id) : route('asdo.sliders.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				@isset($slider)
					@method('PUT')
				@endisset

				
				<label for="photo">Select Image</label>
				<div class="mb-3">
		    <div class="input-group">
		      <div class="input-group-prepend">
		        <span class="input-group-text">Upload</span>
		      </div>
		      <div class="custom-file">
		        <input type="file" name="photo" class="custom-file-input" id="slider-image">
		        <label class="custom-file-label" for="slider-image" id="slider-image-label">{{ isset($slider->photo) ? $slider->photo : 'Choose Photo'}}</label>
		      </div>

		    </div>

		    @error('photo')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
        </div>

        <div class="form-group">
	        <label for="caption_header">Caption Header</label>
	        <input type="text" name="caption_header" class="form-control" id="caption_header" value="{{$slider->caption_header ?? old('caption_header') }}">
	      </div>

	      <div class="form-group">
	        <label for="caption_text">Caption Text</label>
	        <input type="text" name="caption_text" class="form-control" id="caption_text" value="{{$slider->caption_text ?? old('caption_text') }}">
	      </div>

				<button type="submit" class="btn btn-primary" id="submit" name="submit">
					@isset($slider)
					 <i class="fas fa-arrow-circle-up mr-1"></i>
					 Update
					@else
					<i class="fas fa-plus-circle mr-1"></i>
					Upload Image
					@endisset
				</button>
			</form>
		</div>
	</div>
	</div>
</div>

@push('script')
<script>
 	// Listen for click on toggle checkbox
 	$("#select-all-permissions").click(function(event){
 		if(this.checked) {
 			// Iterate eache checkbox
 			$(':checkbox').each(function() {
 				this.checked = true;
 			});
 		}else{
 			$(':checked').each(function() {
 				this.checked = false;
 			});
 		}
 	});

 	document.getElementById("slider-image").onchange = function() {
  document.getElementById("slider-image-label").innerHTML = this.value;
};
 </script>
@endpush
@endsection