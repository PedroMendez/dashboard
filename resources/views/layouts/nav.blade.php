<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand">
          <?xml version="1.0" encoding="iso-8859-1"?>
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; width: 13%;" xml:space="preserve">
            <path style="fill:#263740;" d="M76,348c-20.932,0-32-11.068-32-32c0-116.9,95.1-212,212-212s212,95.1,212,212
              c0,20.932-11.068,32-32,32H76z"/>
            <path style="fill:#1E2C33;" d="M256,104c-2.012,0-4,0.092-6,0.152C364.128,107.348,456,201.108,456,316c0,20.932-11.068,32-32,32h12
              c20.932,0,32-11.068,32-32C468,199.1,372.9,104,256,104z"/>
            <path style="fill:#F5F5F5;" d="M76,316c0-99.416,80.588-180,180-180s180,80.584,180,180H76z"/>
            <path style="fill:#E6E6E6;" d="M264,136.204c-2.656-0.12-5.316-0.204-8-0.204c-99.412,0-180,80.584-180,180h16
              C92,219.272,168.304,140.392,264,136.204z"/>
            <path style="fill:#CC6152;" d="M168.728,199.66c-22.692,16.332-40.496,39.22-50.7,66.788c-3.072,8.28,1.164,17.488,9.452,20.556
              c8.252,3.076,17.488-1.16,20.556-9.452c8.348-22.56,22.772-40.872,41.292-53.584L168.728,199.66z"/>
            <path style="fill:#74B340;" d="M363.964,277.552c2.388,6.456,8.5,10.452,15.004,10.452c1.848,0,3.724-0.32,5.552-1
              c8.288-3.068,12.524-12.268,9.452-20.556c-8.916-24.084-23.68-44.528-42.384-60.216l-21.916,23
              C344.828,241.544,356.704,257.928,363.964,277.552z"/>
            <path style="fill:#E78244;" d="M168.728,199.764l20.54,24.268C208,211.156,230.924,204,256,204v-32
              C223.464,172,193.264,182.084,168.728,199.764z"/>
            <path style="fill:#FFD464;" d="M329.676,229.244l21.916-23.008C325.736,184.548,292.312,172,256,172v32
              C284.264,204,309.796,213.092,329.676,229.244z"/>
            <g>
              <path style="fill:#E16B5A;" d="M268.372,316c-0.112-2.536-0.984-5.052-2.736-7.148L166.564,190.1
                c-1.028-1.24-2.84-1.532-4.216-0.624c-1.476,0.968-1.888,2.952-0.916,4.428L241.664,316H268.372z"/>
              <path style="fill:#E16B5A;" d="M228,316c0-15.464,12.536-28,28-28s28,12.536,28,28H228z"/>
            </g>
          </svg>
          {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto"></ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group" onclick="document.getElementById('searchModal').classList.toggle('show');">
                <div class="search-icon pointer">
                  <a><i class="tim-icons icon-zoom-split"></i></a>
                  <span class="d-lg-none d-md-block">Search</span>
                <div>
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
                    <img src="/img/profile.png" alt="Profile Photo">
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

@include ('components.search')

