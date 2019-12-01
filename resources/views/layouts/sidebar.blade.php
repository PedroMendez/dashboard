<div class="sidebar-wrapper">
  <div class="logo">
    <a href="{{ url('home') }}" class="simple-text logo-normal">
      Home
    </a>
  </div>
  <ul class="nav">
    <li class="active ">
      <a href="{{ url('home') }}">
        <i class="tim-icons icon-chart-pie-36"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li>
      <a href="{{ route('profiles.create') }}">
        <i class="tim-icons icon-pin"></i>
        <p>Create Profile</p>
      </a>
    </li>
    <li>
      <a href="./map.html">
        <i class="tim-icons icon-atom"></i>
        <p>View Resourses</p>
      </a>
    </li>
    <li>
      <a href="">
        <i class="tim-icons icon-bell-55"></i>
        <p>Notifications</p>
      </a>
    </li>
    <li>
      <a href="{{ route('profiles.show', $profile ?? '') }}">
        <i class="tim-icons icon-single-02"></i>
        <p>User Profile</p>
      </a>
    </li>
    <li>
      <a href="./tables.html">
        <i class="tim-icons icon-puzzle-10"></i>
        <p>Table List</p>
      </a>
    </li>
    <li>
      <a href="./typography.html">
        <i class="tim-icons icon-align-center"></i>
        <p>Typography</p>
      </a>
    </li>
  </ul>
</div>
</div>
