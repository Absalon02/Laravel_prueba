<!doctype html>
<html lang="en" class="h-100">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="generator" content="Hugo 0.101.0">
      <title>C.R.U.D</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
      <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>

      <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sticky-footer-navbar/">

      
      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>

    
    </head>
    <body class="d-flex flex-column h-100">
      
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #0074E4">
      <a class="navbar-brand" href="#">{{ config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"  aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url ('/student')}}">Registro de estudiantes</a>
          </li>
          </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Estudiante
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('student/create')}}">Agregar estudiante</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url ('/group')}}">Registro de grupo</a>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Grupo
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('group/create')}}">Agregar grupo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
      <br>
      <br>
      <br>
      <div class="container">
        @yield('content')
      </div>
      
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted">CRUD Maria Patricia Ceballos Absalon</span>
    </div>
  </footer>
    </body>
</html>
