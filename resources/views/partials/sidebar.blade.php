<nav id="sidebar" class="bg-dark navbar-dark">
    <a href="/" class="nav-link text-white"><h2 class="p-2">
        <i class="fa-solid fa-square-rss"></i>Cinema Sala</h2>
    </a>
    <ul class="nav flex-column">
        {{-- <li class="nav-item">
          <a class="nav-link text-white {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i>Dashboard</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link  text-white {{Route::currentRouteName() == 'admin.movies.index' ? 'active' : ''}}" href="{{route('admin.movies.index')}}"> <i class="fa-solid fa-film fa-lg fa-fw"></i>Film</a>
        </li>
        <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.reviews.index' ? 'active' : '' }}" href="{{ route('admin.reviews.index') }}">
                <i class="fa-solid fa-comments fa-lg fa-fw"></i> Recensioni
            </a>
        </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.halls.index' ? 'active' : '' }}" href="{{ route('admin.halls.index') }}">
            <i class="fa-solid fa-door-open fa-lg fa-fw"></i> Sale
        </a>
    </li>
      </ul>
    </nav>