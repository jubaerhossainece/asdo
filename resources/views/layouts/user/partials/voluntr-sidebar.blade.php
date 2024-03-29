<!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
            

                            <li class="nav-divider">
                                Settings
                            </li>
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('volunteer.profile.show') ? 'active' : ''}}" href="{{route('volunteer.profile.show')}}"><i class="fas fa-user mr-2"></i><span>My Profile</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('volunteer.profile.edit') ? 'active' : ''}}" href="{{route('volunteer.profile.edit')}}"><i class="fas fa-cog mr-2"></i><span>Update Profile</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('volunteer.password.edit') ? 'active' : ''}}" href="{{route('volunteer.password.edit')}}"><i class="fas fa-lock mr-2"></i><span>Change Password</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('volunteer.photo.edit') ? 'active' : ''}}" href="{{route('volunteer.photo.edit')}}"><i class="fas fa-camera"></i><span>Change Photo</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href=""
                                               onclick="event.preventDefault();
                                                             document.getElementById('volunteer-logout').submit();">
                                        <i class="fas fa-sign-out-alt mr-2"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                    <form id="volunteer-logout" action="{{ route('volunteer.logout') }}" method="GET" class="d-none">
                                        @csrf
                                    </form>

                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ==============================================================