@extends('layouts.admin.app')
@section('content')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
  <link rel="stylesheet" href="{{url('css/backend/member.css')}}">
@endpush
<div class="card">
  <div class="card-header">
    <h2 class="float-left">Add photos</h2>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h3 class="float-left">{{$project->header}}</h3>
  </div>
  <div class="card-body">  
    <form action="" method="POST" enctype="multipart/form-data" class="dropzone" id="project-dropzone">
    </form>
  </div>
</div>
  
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script>
      $("#project-dropzone").dropzone({ url: "/file/post" });
    </script>
@endpush
@endsection