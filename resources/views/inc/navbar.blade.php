<link href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="/">Tony's Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse nav-links" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li>
        <a href="/posts">Blog Posts</a>
      </li>
      @guest
        <li>
          <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
          <li>
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        @endif
          @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/home">Dashboard</a>
                  @can('manage-users')  
                      <a class="dropdown-item" href="{{ route('admin.users.index') }}">Manage Users</a>
                  @endcan
                  @can('view-users')  
                      <a class="dropdown-item" href="{{ route('author.users.index') }}">View Users</a>
                  @endcan
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </div>
        </li>
      @endguest
    </ul>
  </div>
</nav>

<style>
  .bg-dark {
    background-color: rgb(56, 56, 61) !important;
    opacity: 0.95;
  }

  .navbar-brand {
    color: aliceblue;
    font-family: 'Shojumaru', cursive;
  }

  .nav-links li a {
    display: block;
    text-decoration: none;
    color: white;
    padding: 1rem;
  }

  .nav-links li:hover {
    background-color: rgb(64, 64, 70);
  }

  .dropdown-menu {
    background-color: rgb(56, 56, 61);
    color: white;
  }

  .dropdown-menu a:hover {
    background-color: rgb(64, 64, 70);
    color: white;
  }
</style>