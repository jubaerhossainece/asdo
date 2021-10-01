<div class="col-lg-3 email-aside border-lg-right">
              <div class="aside-content">
                <div class="aside-nav collapse">
                  <ul class="nav">
                    <li class="{{Route::is('asdo.contacts.*') ? 'active' : ''}}">
                    	<a href="{{route('asdo.contacts.index')}}">
                    		<span class="icon"><i class="fas fa-inbox"></i></span>
                    		inbox
                    		@if($inbox === 0) @else<span class="badge badge-success">{{$inbox}}</span>@endif
                    	</a>
                  	</li>
                    <li class="">
                    	<a href="#">
                    		<span class="icon"><i class="fas fa-envelope"></i></span>Sent Mail
                    		<span class="badge badge-success">2</span>
                    	</a>
                    </li>
                    <li class="{{Route::is('asdo.important.*') ? 'active' : ''}}">
                    	<a href="{{route('asdo.important.index')}}">
                    		<span class="icon"><i class="fas fa-suitcase"></i></span>Important
                    		@if($important === 0) @else<span class="badge badge-warning">{{$important}}</span>@endif
                    	</a>
                    </li>
                    
                    <li class="{{Route::is('asdo.trashed.*') ? 'active' : ''}}">
                    	<a href="{{route('asdo.trashed.index')}}">
                    		<span class="icon"><i class="fas fa-trash-alt"></i></span>Trash
                    		@if($trashed === 0) @else<span class="badge badge-danger">{{$trashed}}</span>@endif
                    	</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>