
  <body>
    <!--Header Start-->
    <header>
      <!--Navbar Start-->
      <section class="navbar-wrap">
        <div class="container">
          <div class="row nav-row">  
            <nav class="navbar navbar-expand-md ">
                <div class="nav-logo ">
                  <a href="/">
                    <img src="{{asset('assets/images/frontend/logo.jpg')}}" alt="logo-img" />
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
                      <a class="nav-link" href="/about">About</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                      >
                        Programs
                      </a>
                      <ul class="dropdown-menu">
                        <li class="dropown-item">
                          <a href="alokito-school.html" class="dropdown-link">Alokito School</a>
                        </li>
                        <li class="dropown-item">
                          <a href="awerness.html" class="dropdown-link">Awareness Programs</a>
                        </li>
                      </ul>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="#">Board of Directors</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contacts</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="login.html">Login</a>
                    </li>
                  </div>
                </div>
            </nav>
          </div>
        </div>
      </section>