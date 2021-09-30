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
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="select-all" />
                          <label class="custom-control-label" for="select-all">&nbsp;</label>
                      </div>
                      <button type="button" class="btn btn-light">
                        <span class="fa fa-trash-o"></span>
                      </button>
                      <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                          <span class="fa fa-tags"></span>
                          <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">add label <span class="badge badge-danger"> Home</span></a>
                          <a class="dropdown-item" href="#">add label <span class="badge badge-info"> Job</span></a>
                          <a class="dropdown-item" href="#">add label <span class="badge badge-success"> Clients</span></a>
                          <a class="dropdown-item" href="#">add label <span class="badge badge-warning"> News</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="icons">
                      <a href="#" class="icon">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="email-body">
                <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                    <tbody>
                        <!-- row -->
                        @foreach($messages as $message)
                        <tr class="mail-table-row @if($message->is_seen == false) unread @endif">
                            <!-- label -->
                            <td class="pl-3">
                                <div class="custom-control custom-checkbox mail-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="{{$message->id}}"  value="{{$message->id}}"/>
                                    <label class="custom-control-label" for="{{$message->id}}">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td><i class="fa fa-star text-warning"></i></td>
                            <td>
                                <span class="mb-0 text-muted">{{$message->name}}</span>
                            </td>
                            <!-- Message -->
                            <td class="mail-link">
                                <a class="link" href="{{route('asdo.contacts.show', $message->id)}}">
                                    <span class="text-dark">{{substr($message->message, 0, 40)}}...</span>
                                </a>
                            </td>
                            <!-- Time -->
                            <td class="text-muted">@if(\Carbon\Carbon::now()->format('Y') == $message->created_at->format('Y')){{$message->created_at->format('d M')}} @else {{$message->created_at->format('d/m/y')}} @endif</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
    $('#select-all').click(function(){
        $('.mail-checkbox input[type="checkbox"]').prop('checked', this.checked);
    })
    
 </script>
@endpush
@endsection