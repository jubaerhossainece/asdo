@push('css')
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendors/datetimepicker/jquery.datetimepicker.min.css')}}"/>
@endpush
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
			@if(isset($project)) <a href="{{route('asdo.image.projects.show', $project->id)}}" class="btn btn-primary">Gallery</a>@endif
		</div>
		<div class="card-body">
			<form action="{{isset($project) ? route('asdo.projects.update', $project->id) : route('asdo.projects.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				@isset($project)
					@method('PUT')
				@endisset

				<div class="form-group">
					<label for="video-link">Video Link</label>
	        <input type="text" name="video_link" class="form-control" id="video-link" value="{{$project->video_link ?? old('video_link') }}">
	        @error('video_link')
	          <div class="text-danger">
	            <strong>{{$message}}</strong>
	          </div>
	        @enderror
				</div>

        <div class="form-group">
	        <label for="header">Project Heading</label>
	        <input type="text" name="header" class="form-control" id="header" value="{{$project->header ?? old('header') }}">
	        @error('header')
	        	<div class="text-danger">
	            <strong>{{$message}}</strong>
	          </div>
	        @enderror
	      </div>

	      <div class="form-group">
	        <label for="body">Project Detail</label>
	        <textarea name="body" class="form-control" rows="5" id="body">{{$project->body ?? old('body') }}</textarea>
	      </div>

	      <div class="form-group">
	        <label for="location">Project Location</label>
	        <input type="text" name="location" class="form-control" rows="5" id="location" value="{{$project->location ?? old('location') }}">
	      </div>

	      <div class="form-group">
	        <label for="date">Project Date</label>
	        <input type="text" name="date" class="form-control" rows="5" id="date" value="{{$project->date ?? old('date') }}">
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
<script src="{{url('assets/vendors/datetimepicker/jquery.datetimepicker.full.min.js')}}"></script>

<script>
	$(document).ready(function () {
		$('#date').datetimepicker();
	})
 </script>
@endpush
@endsection