<nav id="sidebar" class="bg-dark navbar-dark">
  <a href="/" class="nav-link text-white"><h2 class="p-2">
      <i class="fa-solid fa-square-rss"></i>Cinema Sala</h2>
  </a>
  <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-white {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i>Dashboard</a>
      </li>
  </li>
    </ul>
  </nav>