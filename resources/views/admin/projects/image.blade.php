@extends('layouts.admin.app')
@section('content')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
  <link rel="stylesheet" href="{{url('css/backend/member.css')}}">
  <style type="text/css">
    .img-fluid {
        max-width: 100%;
        height: auto;
        border: 2px solid lightgray;
        border-radius: 5px;
        height: 150px;
    }

    .col-md-3.col-sm-2 {
        text-align: center;
        margin-bottom: 10px;
    }

    .btn.btn-remove{
      margin-top: 10px;
      padding: 4px 15px;
      color: #5969ff;
    }

    .btn.btn-remove:hover{
      text-decoration: underline;
      color: rgb(37 52 158);
    }
  </style>
@endpush
<div class="card">
  <div class="card-header page-header">
    <h2 class="float-left">Add photos for this program</h2>
    <a href="{{route('asdo.projects.index')}}" class="btn btn-secondary">All programs</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script>
      Dropzone.options.projectDropzone = {
        autoProcessQueue : false,
        acceptedFiles : ".jpg, .jpeg, .gif, .png, .bmp",
        addRemoveLinks: true,
        uploadMultiple: true,
        parallelUploads: 10,

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
            innerHtml(response);
          }
        });
      }

      function innerHtml(response){
        showSection = document.getElementById('uploaded-image-section');
        showSection.innerHTML = "";
        response.forEach((data) =>{
          showSection.innerHTML += "<div class='col-md-3 col-sm-2'><img src='/storage/asdo/images/projects/"+data.file_name+"' class='img-fluid'><div><button type='submit' class='btn btn-remove' onclick='remove_image("+data.id+")' id='"+data.id+"'>remove</button></div></div>";
        })
      }

      function remove_image(id){
        $.ajax({
          type:'GET',
          url:"/asdo/image/projects/"+id+"/delete",
          success:function(response){
            // alert(response);
            show_images();
          }
        })
      }


      //function execution after document is ready
      $(document).ready(function() {
          show_images();
      });
    </script>
@endpush
@endsection