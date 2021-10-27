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
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Route::is('asdo.dashboard') ? 'active' : ''}}" href="{{route('asdo.dashboard')}}"><i class="fas fa-fw fa-user-circle"></i><span>Dashboard</span></a>
                            </li>

                            @can('app.contacts.index')
                            <li class="nav-item">
                                <a class="nav-link {{Route::is('asdo.contacts.*') ? 'active' : ''}}" href="{{route('asdo.contacts.index')}}"><i class="fas fa-envelope"></i><span>Messages</span></a>
                            </li>
                            @endcan

                            @can('app.members.index')
                            <li class="nav-item">
                                <a class="nav-link {{Route::is('asdo.users.*') ? 'active' : ''}}" href="{{route('asdo.users.index')}}"><i class="fas fa-hands-helping"></i><span>Members</span></a>
                            </li>
                            @endcan

                            @can('app.volunteers.index')
                            <li class="nav-item">
                                <a class="nav-link {{Route::is('asdo.volunteers.*') ? 'active' : ''}}" href="{{route('asdo.volunteers.index')}}"><i class="fas fa-hands-helping"></i><span>Volunteers</span></a>
                            </li>
                            @endcan

                            <li class="nav-item">
                                <a class="nav-link {{Route::is('asdo.bloodDonors.*') ? 'active' : ''}}" href="{{route('asdo.bloodDonors.index')}}"><img src="{{asset('assets/images/icons/blood-donation .png')}}" alt=""><span>Blood Donors</span></a>
                            </li>
                        
                            <li class="nav-divider">
                                Access Control
                            </li>
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    @can('app.roles.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.roles.*') ? 'active' : ''}}" href="{{route('asdo.roles.index')}}"><i class="fas fa-user-cog mr-2"></i><span>Roles</span></a>
                                    </li>
                                    @endcan

                                    @can('app.users.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.users.*') ? 'active' : ''}}" href="{{route('asdo.users.index')}}"><i class="fas fa-users mr-2"></i><span>Members</span></a>
                                    </li>
                                    @endcan

                                    @can('app.admins.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.admins.*') ? 'active' : ''}}" href="{{route('asdo.admins.index')}}"><i class="fas fa-users mr-2"></i><span>Admin Panel</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </li>

                            <li class="nav-divider">
                                Settings
                            </li>
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    @can('app.sliders.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.sliders.*') ? 'active' : ''}}" href="{{route('asdo.sliders.index')}}"><i class="fas fa-images"></i><span>Slider Images</span></a>
                                    </li>
                                    @endcan

                                    @can('app.projects.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.projects.*') ? 'active' : ''}}" href="{{route('asdo.projects.index')}}"><i class="fas fa-tasks"></i><span>Programs</span></a>
                                    </li>
                                    @endcan

                                    @can('app.campaigns.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.campaigns.*') ? 'active' : ''}}" href="{{route('asdo.campaigns.index')}}"><i class="fas fa-award"></i><span>Campaigns</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </li>

                            <li class="nav-divider">
                                Profile
                            </li>
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.profile.show') ? 'active' : ''}}" href="{{route('asdo.profile.show')}}"><i class="fas fa-user mr-2"></i><span>My Profile</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.profile.edit') ? 'active' : ''}}" href="{{route('asdo.profile.edit')}}"><i class="fas fa-cog mr-2"></i><span>Update Profile</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.password.edit') ? 'active' : ''}}" href="{{route('asdo.password.edit')}}"><i class="fas fa-lock mr-2"></i><span>Change Password</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.photo.*') ? 'active' : ''}}" href="{{route('asdo.photo.edit')}}"><i class="fas fa-camera"></i><span>Change Photo</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->