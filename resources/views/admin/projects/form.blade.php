@extends('layouts.admin.app')
@section('content')
<div class="card">
	<div class="card-header page-header">
			<h2 class="page-title">
				{{isset($project) ? 'Edit' : 'Add New'}} Project Detail
			</h2>
			<a href="{{route('asdo.projects.index')}}" class="btn btn-secondary float-right">
				<i class="fas fa-arrow-circle-left"></i>
				Back to list
			</a>
	</div>	
</div>


<div class="row">
	<div class="col-md-12">
		<div class="card">
		<div class="card-header">
			<h3 class="card-title">{{isset($project) ? 'Edit' : 'Add New'}} Project Detail</h3>
		</div>
		<div class="card-body">
			<form action="{{isset($project) ? route('asdo.projects.update', $project->id) : route('asdo.projects.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				@isset($project)
					@method('PUT')
				@endisset

				
				<label for="photo">Select Image</label>
				<div class="mb-3">
		    <div class="input-group">
		      <div class="input-group-prepend">
		        <span class="input-group-text">Upload</span>
		      </div>
		      <div class="custom-file">
		        <input type="file" name="photo" class="custom-file-input" id="project-image">
		        <label class="custom-file-label" for="project-image" id="project-image-label">{{ isset($project->photo) ? $project->photo : 'Choose Photo'}}</label>
		      </div>

		    </div>

		    @error('photo')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
        @enderror
        </div>

        <div class="form-group">
	        <label for="header">Project Heading</label>
	        <input type="text" name="header" class="form-control" id="header" value="{{$project->header ?? old('header') }}">
	      </div>

	      <div class="form-group">
	        <label for="body">Project Detail</label>
	        <textarea name="body" class="form-control" rows="5" id="body">{{$project->body ?? old('body') }}</textarea>
	      </div>

				<button type="submit" class="btn btn-primary" id="submit" name="submit">
					@isset($project)
					 <i class="fas fa-arrow-circle-up mr-1"></i>
					 Update
					@else
					<i class="fas fa-plus-circle mr-1"></i>
						Create Project
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

 	document.getElementById("project-image").onchange = function() {
  document.getElementById("project-image-label").innerHTML = this.value;
};
 </script>
@endpush
@endsection