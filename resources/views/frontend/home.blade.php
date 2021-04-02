@extends('layouts.frontend.app')
@section('content')
@push('css')
<style>
  .carousel-inner img{
    width: 100%;
    height: 80%;
  }
</style>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

<!--==========
     carousel started
  ===============-->

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    
    @foreach($sliders as $key => $slider)
    <li data-target="#carouselExampleCaptions" data-slide-to="{{$key}}" class="@if($key == 0)active @endif"></li>
    @endforeach
  </ol>
  <div class="carousel-inner">
    @foreach($sliders as $key => $slider)
    
    <div class="carousel-item @if($key == 0)active @endif">
      <img src = "{{asset('/storage/asdo/images/sliders/'.$slider->photo)}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$slider->caption_header}}</h5>
        <p>{{$slider->caption_text}}</p>
      </div>
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span  aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span  aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!--==========
     carousel end
  ===============-->

@push('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  

  $(document).ready(function() {
    $('#role-select').select2({
      dropdownCssClass : 'no-search',
      allowClear: true,
      placeholder: {
        id: '0', // the value of the option
        text: 'Select Role'
      }
    });
});

</script>
@endpush
@endsection