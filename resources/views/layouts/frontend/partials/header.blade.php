
  <body>
    <!-- preloader -->

    <div class="loadingio-spinner" id="preloader">
      <img src="{{url('/assets/images/preloader.gif')}}">
    </div>
    <!--Header Start-->
    <header>
      <!--Navbar Start-->
      <section class="navbar-wrap">
        <div class="container">
          <div class="row nav-row">  
            <nav class="navbar navbar-expand-md ">
                <div class="nav-logo ">
                  <a href="/">
                    <img src="{{asset('assets/images/logo/logo.jpg')}}" alt="logo-img" />
                  </a>
                </div>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navMenu"
                >
                  <i class="fas fa-bars navbar-toggler"></i>
                </button>
                <div class="collapse navbar-collapse" id="navMenu">
                  <div class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{route('home.about')}}">About</a>
                    </li>

                    <!-- <li class="nav-item">
                      <a class="nav-link" href="{{route('home.school')}}">Alokito School</a>
                    </li> -->

                    <li class="nav-item">
                      <a class="nav-link" href="{{route('campaigns.index')}}">Campaigns</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{route('projects.index')}}">Programs</a>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link" href="{{route('home.contact')}}">Contacts</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                  </div>
                </div>
            </nav>
          </div>
        </div>
      </section>
    </header>  