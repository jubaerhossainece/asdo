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
                      <button type="button" class="btn btn-light mr-2" onclick="make_trash()" data-toggle="tooltip" data-placement="bottom" title="Move message to trashbox">
                        <i class="fas fa-trash"></i>
                      </button>
                      <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                          <span class="fa fa-tags"></span>
                          <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="javascript: void(0);" onclick="mark_read()">Mark as read</a>
                          <a class="dropdown-item" href="javascript: void(0);" onclick="mark_unread()">Mark as unread</a>
                          <a class="dropdown-item" href="javascript: void(0);" onclick="mark_unimportant()">Mark as unimportant</a>
                        </div>
                      </div>
                    </div>
                    <div class="icons">
                      <a href="#" class="icon">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="email-body">
                @if(!$messages->isEmpty())
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
                                <a class="link" href="{{route('asdo.important.show', $message->id)}}">
                                    <span class="text-dark">{{substr($message->message, 0, 40)}}...</span>
                                </a>
                            </td>
                            <!-- Time -->
                            <td class="text-muted">@if(\Carbon\Carbon::now()->format('Y') == $message->created_at->format('Y')){{$message->created_at->format('d M')}} @else {{$message->created_at->format('d/m/y')}} @endif</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="container-fluid pt-4" id="pagination">
                  <?php $users = $messages;
                    $offset = 3; 
                  ?>
                  @include('layouts.admin.partials.pagination')                  
                </div>
                @else
                <div class="p-5 text-center">
                  <h2>No message in your important box!</h2>
                </div>
                @endif
              </div>
            </div>
          </div>
            
        </div>
      </div>
    </div>
  </div>
</div>

<!-- form for message read, unread, important -->
<form method="POST" id="action-form" class="d-none">
  @csrf
    <input type="hidden" name="mail_array[]" id="mail-array"></input>
    <input type="hidden" name="_method" id="mail-method"></input>
</form>
@push('script')
<script src="{{url('js/email.js')}}"></script>
<script>
    $('#select-all').click(function(){
        $('.mail-checkbox input[type="checkbox"]').prop('checked', this.checked);
    })
</script>
@endpush
@endsection