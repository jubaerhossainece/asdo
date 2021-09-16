@extends('layouts.admin.app')
@section('content')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
  <link rel="stylesheet" href="{{url('css/backend/member.css')}}">
@endpush
<div class="card">
  <div class="card-header page-header">
    <h2 class="float-left">Add photos</h2>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="float-left">{{$project->header}}</h3>
  </div>
  <div class="card-body">  
    <form action="{{route('asdo.image.projects.store')}}" method="POST" enctype="multipart/form-data" class="dropzone" id="projectDropzone">
      @csrf
      <input type="hidden" name="project_id" value="{{$project->id}}">
    </form>
    <button type="submit" id="upload-project-image" class="btn btn-primary"><i class="fas fa-upload mr-2"></i>Upload</button>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h3>Uploaded images</h3>
  </div>
  <div class="card-body">
    
  </div>
</div>
  
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script>
      Dropzone.options.projectDropzone = {
        autoProcessQueue : false,
        acceptedFiles : ".jpg, .jpeg, .gif, .png, .bmp",

        init:function(){
          let submitButton = document.querySelector("#upload-project-image");
          myDropzone = this;

          submitButton.addEventListener('click', function(){
            myDropzone.processQueue();
          });

           this.on('complete', function(){
            if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0){
              var _this = this;
              _this.removeAllFiles();
            }
           })
        },

        success: function(file, response){
            //Here you can get your response.
            console.log(response);
        }
      }

      function fetch_image(){
        $.ajax({
          
        })
      }
    </script>
@endpush
@endsection