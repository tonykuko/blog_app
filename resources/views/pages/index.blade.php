<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

        <title>Anthony's Blog</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/cover/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        <!-- Custom styles for this template -->
        <link href="css/landing.css" rel="stylesheet">
    </head>

    <body class="text-center" data-gr-c-s-loaded="true">

        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse nav-links" id="navbarTogglerDemo02">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                              <li>
                                <a href="/posts">Blog</a>
                              </li>
                              @guest
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
                </div>
            </header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading">ANTHONY'S BLOG</h1>
                <p class="lead">This is the web app I will be deploying to Amazon Web Services as part of my Cloud Security Project.</p>
                <p class="lead">
                    <a href="/login" class="btn btn-lg btn-secondary">Login here</a>
                </p>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p>Anthony Kukoyi | <a href="https://www.linkedin.com/in/anthonykukoyi">LinkedIn</a>, <a href="https://github.com/tonykuko/blog_app">Github</a></p>      
                </div>
            </footer>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
