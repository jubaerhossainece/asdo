@if(Session::has('alert-success') || Session::has('alert-danger'))
<div id="toast-container" style="position: fixed; overflow: visible; z-index: 1000; top: 5rem; right: 1rem; min-width: 20rem">
<div class="toast {{Session::has('alert-success') ? 'toast-success' : 'toast-danger'}}" data-autohide="false">
  <div class="toast-header {{Session::has('alert-success') ? 'header-success' : 'header-danger'}}">
    <strong class="mr-auto {{Session::has('alert-success') ? 'text-success' : 'text-danger'}}">{{Session::has('alert-success') ? 'Success message!' : 'Alert message!'}}
    </strong>
    <small class="text-muted">5 mins ago</small>
    <button type="button" class="ml-2 close" data-dismiss="toast">&times;</button>
  </div>
  <div class="toast-body {{Session::has('alert-success') ? 'body-success' : 'body-danger'}}">
    <span>{{Session::has('alert-success') ? Session::get('alert-success') : Session::get('alert-danger')}}
      </span>
  </div>
</div>
</div>

@endif