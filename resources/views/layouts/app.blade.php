<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="{{asset('estilo.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="fondo navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #ffffff; font-weight: 800; font-size: 30px;">
                   SCE
                </a>
               

                <div >
                    <!-- Left Side Of Navbar -->
               <a class="navbar-brand"  href="/user" style="color: #fff; font-weight: 600;">
                      SCE
                </a>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navegacion navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: #ffffff">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('carreras') }}" style="color: #ffffff">Carreras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('areas') }}" style="color: #ffffff">Areas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('mension') }}" style="color: #ffffff">Mension</a>
          </li> 
          <li class="nav-item">

          <a class="nav-link" href="{{ URL::to('seccions') }}" style="color: #ffffff">Secciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('horarios') }}" style="color: #ffffff">Horarios</a>
        </li>

       
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('pensum') }}" style="color: #ffffff">Pensun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('reg-acedm') }}" style="color: #ffffff">Reg Academido</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="{{ URL::to('turnos') }}" style="color: #ffffff">Turnos</a>
          </li> -->
         
          <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('materias')}}" style="color: #ffffff">Materias</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
