<link href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap" rel="stylesheet">

<nav class="navbar sticky-top">
  <a class="navbar-brand" href="/">Anthony's Blog</a>
  <a href="#" class="toggle-button">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </a>
  <div class="navbar-links">
    <ul>
      <li><a href="/posts">Blog Posts</a></li>
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
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        * {
          box-sizing: border-box;
      }

      body {
          margin: 0;
          padding: 0;
      }

      .navbar {
          display: flex;
          position: sticky;
          justify-content: space-between;
          align-items: center;
          background-color: #1c2836;
          color: white;
          min-height: 50px;
      }

      .navbar-brand {
          font-size: 1.15rem;
          margin: .5rem;
          color: aliceblue;
          font-family: 'Shojumaru', cursive;
      }

      .navbar-links {
          height: 100%;
      }

      .navbar-links ul {
          display: flex;
          margin: 0;
          padding: 0;
      }

      .navbar-links li {
          list-style: none;
      }

      .navbar-links li a {
          display: block;
          text-decoration: none;
          color: white;
          padding: 1rem;
      }

      .navbar-links li:hover {
          background-color: #2b3d52;
      }

      .toggle-button {
          position: absolute;
          top: .75rem;
          right: 1rem;
          display: none;
          flex-direction: column;
          justify-content: space-between;
          width: 30px;
          height: 21px;
      }

      .toggle-button .bar {
          height: 3px;
          width: 100%;
          background-color: white;
          border-radius: 10px;
      }

      .dropdown-menu {
          background-color: #1c2836;
          color: white;
      }

      .dropdown-menu a:hover {
          background-color: #2b3d52;
          color: white;
      }

      @media (max-width: 800px) {
      .navbar {
          flex-direction: column;
          align-items: flex-start;
      }

      .toggle-button {
          display: flex;
      }

      .navbar-links {
          display: none;
          width: 100%;
      }

      .navbar-links ul {
          width: 100%;
          flex-direction: column;
      }

      .navbar-links ul li {
          text-align: center;
      }

      .navbar-links ul li a {
          padding: .5rem 1rem;
      }

      .navbar-links.active {
          display: flex;
      }
}
</style>

<script>
  const toggleButton = document.getElementsByClassName('toggle-button')[0]
  const navbarLinks = document.getElementsByClassName('navbar-links')[0]

  toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
  })
</script>