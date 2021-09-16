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
      <input type="hidden" name="project_id" id="project-id" value="{{$project->id}}">
    </form>
    <button type="submit" id="upload-project-image" class="btn btn-primary"><i class="fas fa-upload mr-2"></i>Upload</button>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h3>Uploaded images</h3>
  </div>
  <div class="card-body">
    <div class="row" id="uploaded-image-section">
      
    </div>
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
          show_images();
        }
      }

      function show_images(){
        id = document.getElementById('project-id').value;
        console.log(id);
        $.ajax({
          url:"/asdo/image/projects/"+id+"/fetch",
          success:function(response){
            console.log(response);
            alert(response);
            innerHtml(response);
          }
        });
      }

      function innerHtml(response){
        showSection = document.getElementById('uploaded-image-section');
        showSection.innerHTML = "";
        response.forEach((data) =>{
          showSection.innerHTML += "<div class='col-md-3 col-sm-2'><img src='/storage/asdo/images/projects/"+data.file_name+"' class='img-fluid'><button>remove</button></div>";
        })
      }


      //function execution after document is ready
      $(document).ready(function() {
          show_images();
      });
    </script>
@endpush
@endsection