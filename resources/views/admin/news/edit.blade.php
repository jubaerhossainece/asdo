@extends('layouts.admin.app')
@section('content')
@push('css')
<link rel="stylesheet" type="text/css" href="{{url('assets/vendors/datetimepicker/jquery.datetimepicker.min.css')}}"/>
<style>
     h2.page-title span {
		color: #4e4ed1;
		font-weight: 600;
	}
</style>
@endpush

<div class="card">
	<div class="card-header page-header">	
		<h2 class="page-title"></span>Edit news </h2>
        <a href="{{route('asdo.news.index')}}" class="btn btn-light">All news</a>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h3 class="card-title">Edit news</h3>
	</div>

	<div class="card-body">
        <form method="post" action="{{route('asdo.news.update', $news->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="heading" class="form-label">News heading</label>
                <textarea class="form-control" name="heading" id="heading" aria-describedby="heading">{{old('heading') ?? $news->heading}}</textarea>
                @error('heading')
                    <div class="text-danger">
                    <strong>{{$message}}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">News description</label>
                <textarea type="text" name="description" class="form-control" id="description">{{old('description') ?? $news->description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Photo</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" id="image-label" for="image">{{$news->image ? $news->image : 'Choose file...'}}</label>
                </div>
                @error('image')
                    <div class="text-danger">
                    <strong>{{$message}}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="publishing-date" class="form-label">Publishing Date</label>
                <input type="text" name="publishing_date" class="form-control" id="publishing-date" value="{{old('publishing_date') ?? $news->date}}">
                @error('publishing_date')
                    <div class="text-danger">
                    <strong>{{$message}}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="lifetime" class="form-label">Life Time (In days)</label>
                <input type="number" name="lifetime" class="form-control" id="lifetime" value="{{old('lifetime') ?? $news->lifetime}}">
                @error('lifetime')
                    <div class="text-danger">
                    <strong>{{$message}}</strong>
                    </div>
                @enderror
            </div>
            
            <div class="custom-control custom-checkbox my-1 mr-sm-2 mb-3">
                <input type="checkbox" class="custom-control-input" id="islive">
                <label class="custom-control-label" for="islive">Keep this news live</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
	</div>
</div>

@push('script')
<script src="{{url('assets/vendors/datetimepicker/jquery.datetimepicker.full.min.js')}}"></script>

<script>
	$(document).ready(function () {
		$('#publishing-date').datetimepicker();
	});

    document.getElementById("image").onchange = function() {
      document.getElementById("image-label").innerHTML = this.value;
    };
 </script>
@endpush

@endsection
