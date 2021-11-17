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
                                <a class="nav-link {{Route::is('asdo.dashboard') ? 'active' : ''}}" href="{{route('asdo.dashboard')}}"><img src="{{asset('assets/images/icons/dashboard.png')}}" style="height:17px"><span>Dashboard</span></a>
                            </li>

                            @can('app.contacts.index')
                            <li class="nav-item">
                                <a class="nav-link {{Route::is('asdo.contacts.*') ? 'active' : ''}}" href="{{route('asdo.contacts.index')}}"><img src="{{asset('assets/images/icons/new-message.png')}}"><span><span>Messages</span></a>
                            </li>
                            @endcan

                            @can('app.members.index')
                            <li class="nav-item">
                                <a class="nav-link {{Route::is('asdo.members.*') ? 'active' : ''}}" href="{{route('asdo.members.index')}}"><img src="{{asset('assets/images/icons/volunteer.png')}}" style="height:25px"><span>Members</span></a>
                            </li>
                            @endcan

                            @can('app.volunteers.index')
                            <li class="nav-item">
                                <a class="nav-link {{Route::is('asdo.volunteers.*') ? 'active' : ''}}" href="{{route('asdo.volunteers.index')}}"><img src="{{asset('assets/images/icons/love.png')}}"><span>Volunteers</span></a>
                            </li>
                            @endcan

                            @can('app.bloodDonors.index')
                            <li class="nav-item">
                                <a class="nav-link {{Route::is('asdo.bloodDonors.*') ? 'active' : ''}}" href="{{route('asdo.bloodDonors.index')}}"><img src="{{asset('assets/images/icons/blood-donation.png')}}"><span>Blood Donors</span></a>
                            </li>
                            @endcan
                        
                            <li class="nav-divider">
                                Access Control
                            </li>
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    @can('app.roles.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.roles.*') ? 'active' : ''}}" href="{{route('asdo.roles.index')}}"><img src="{{asset('assets/images/icons/gear.png')}}"><span>Roles</span></a>
                                    </li>
                                    @endcan

                                    @can('app.admins.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.admins.*') ? 'active' : ''}}" href="{{route('asdo.admins.index')}}"><img src="{{asset('assets/images/icons/admin.png')}}"><span>Admin Panel</span></a>
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
                                        <a class="nav-link {{Route::is('asdo.sliders.*') ? 'active' : ''}}" href="{{route('asdo.sliders.index')}}"><img src="{{asset('assets/images/icons/photos.png')}}"><span>Slider Images</span></a>
                                    </li>
                                    @endcan

                                    @can('app.projects.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.projects.*') ? 'active' : ''}}" href="{{route('asdo.projects.index')}}"><img src="{{asset('assets/images/icons/code.png')}}"><span>Programs</span></a>
                                    </li>
                                    @endcan

                                    @can('app.campaigns.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.campaigns.*') ? 'active' : ''}}" href="{{route('asdo.campaigns.index')}}"><img src="{{asset('assets/images/icons/campaign.png')}}"><span>Campaigns</span></a>
                                    </li>
                                    @endcan
                                    @can('app.news.index')
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.news.*') ? 'active' : ''}}" href="{{route('asdo.news.index')}}"> <img src="{{asset('assets/images/icons/news-report.png')}}"> <span>Latest News</span></a>
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
                                        <a class="nav-link {{Route::is('asdo.profile.show') ? 'active' : ''}}" href="{{route('asdo.profile.show')}}"><img src="{{asset('assets/images/icons/user.png')}}"><span><span>My Profile</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.profile.edit') ? 'active' : ''}}" href="{{route('asdo.profile.edit')}}"><img src="{{asset('assets/images/icons/system-update.png')}}"><span><span>Update Profile</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.password.edit') ? 'active' : ''}}" href="{{route('asdo.password.edit')}}"><img src="{{asset('assets/images/icons/padlock(1).png')}}"><span>Change Password</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{Route::is('asdo.photo.*') ? 'active' : ''}}" href="{{route('asdo.photo.edit')}}"><img src="{{asset('assets/images/icons/photo-camera.png')}}"><span>Change Photo</span></a>
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