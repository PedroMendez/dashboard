<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group" onclick="document.getElementById('searchModal').classList.toggle('show');">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item pointer" id="notificationsDropdown" onclick="document.getElementById('notificationsDropdown').classList.toggle('show');">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <a><i class="tim-icons icon-sound-wave"></i></a>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar show">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item pointer" id="logOutDropdown" onclick="document.getElementById('logOutDropdown').classList.toggle('show');">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="/img/img.jpeg" alt="Profile Photo">
                  </div>
                  <a>
                    <b class="caret d-none d-lg-block d-xl-block"></b>
                  </a>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar show">
                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                    <li class="dropdown-divider"></li>
                    <li class="nav-link"><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" class="nav-item dropdown-item">Log out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf

                        </form>
                    </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
        </div>
    </div>
</nav>

@include ('layouts.search')

