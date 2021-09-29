@extends('layouts.admin.app')
@section('content')
@push('css')
  <link rel="stylesheet" href="{{url('css/backend/message.css')}}">
@endpush
<div class="col-md-12">
<div class="row inbox-wrapper">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3 email-aside border-lg-right">
              <div class="aside-content">
                <div class="aside-nav collapse">
                  <ul class="nav">
                    <li class="active">
                    	<a href="../../../demo_1/pages/email/inbox.html">
                    		<span class="icon"><i class="fas fa-inbox"></i></span>
                    		inbox
                    		<span class="badge badge-success">2</span>
                    	</a>
                  	</li>
                    <li>
                    	<a href="#">
                    		<span class="icon"><i class="fas fa-envelope"></i></span>Sent Mail
                    		<span class="badge badge-success">2</span>
                    	</a>
                    </li>
                    <li>
                    	<a href="#">
                    		<span class="icon"><i class="fas fa-suitcase"></i></span>Important
                    		<span class="badge badge-success">2</span>
                    	</a>
                    </li>
                    
                    <li>
                    	<a href="#">
                    		<span class="icon"><i class="fas fa-trash-alt"></i></span>Trash
                    		<span class="badge badge-success">2</span>
                    	</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-9 email-content">
              <div class="email-head">
                <div class="email-head-subject">
                  <div class="title d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <span>New Project</span>
                    </div>
                    <div class="icons">
                      <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share text-muted hover-primary-muted" data-toggle="tooltip" title="" data-original-title="Forward"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg></a>
                      <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer text-muted" data-toggle="tooltip" title="" data-original-title="Print"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg></a>
                      <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash text-muted" data-toggle="tooltip" title="" data-original-title="Delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="email-head-sender d-flex align-items-center justify-content-between flex-wrap">
                  <div class="d-flex align-items-center">
                    <div class="avatar">
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Avatar" class="rounded-circle user-avatar-md">
                    </div>
                    <div class="sender d-flex align-items-center">
                      <span class="text-muted">johndoe@example.com</span>
                    </div>
                  </div>
                  <div class="date">Nov 20, 11:20</div>
                </div>
              </div>
              <div class="email-body">
                <p>Hello,</p>
                <br>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <br>
                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                <br>
                <p><strong>Regards</strong>,<br> John Doe</p>
              </div>
            </div>
          </div>
            
        </div>
      </div>
    </div>
  </div>
</div>
@push('script')
<script>
	
</script>
@endpush
@endsection