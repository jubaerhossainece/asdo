@extends('layouts.admin.app')
@section('content')
@push('css')
  <link rel="stylesheet" href="{{url('css/backend/member.css')}}">
@endpush

<div class="card">
  <div class="card-header">
    <h2 class="float-left">Add photos for this project</h2>
  </div>
</div>


<form method="POST" action="{{route('asdo.users.store')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="user_type" value="member">
  
</form>

@endpush
@endsection