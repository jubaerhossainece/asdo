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
            @include('layouts.admin.partials.mail-sidebar')
            <div class="col-lg-9 email-content">
              <div class="email-head">
                <div class="email-head-subject">
                  <div class="title d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <span>{{$message->subject}}</span>
                    </div>
                    <div class="icons">
                      <a href="#" class="icon">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="email-head-sender d-flex align-items-center justify-content-between flex-wrap">
                  <div class="d-flex align-items-center">
                    <div class="avatar">
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Avatar" class="rounded-circle user-avatar-md">
                    </div>
                    <div class="senderalign-items-center">
                      <h4 class="text-muted"><strong>{{$message->name}}</strong></h4>
                      <h4 class="text-muted">{{$message->email}}</h4>
                    </div>
                  </div>
                  <div class="date">{{$message->created_at->format('d M, y, g:i A')}}</div>
                </div>
              </div>
              <div class="email-body">
                <p>
                  {{$message->message}}
                </p>
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