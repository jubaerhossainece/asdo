@if(Session::has('alert-success') || Session::has('alert-danger'))
<div class="alert {{Session::has('alert-success') ? 'alert-success' : 'alert-danger'}} alert-dismissible fade show" role="alert" id="alert-box">
  <strong>{{Session::has('alert-success') ? 'Success!' : 'Alert!'}}</strong> {{Session::has('alert-success') ? Session::get('alert-success') : Session::get('alert-danger')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif