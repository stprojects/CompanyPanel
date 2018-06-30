<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kreacja App</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <link href="{{ elixir('css/materialize.css') }}" rel="stylesheet">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
</head>
<body id="app-layout">
    <div class="navbar-fixed">
      <nav class="blue darken-1">
            <ul id="authdropdown" class="dropdown-content darken-4 learn-nav">
                <li><a href="{{ url('/logout') }}">Wyloguj się</a></li>
            </ul>
            <div class="nav-wrapper">
                @if (Auth::guest())
                    @include('nav.main');
                @else
                    @include('nav.dashboard');
                @endif
            </div>
        </nav>
    </div>

    <div class="site-content">
        @yield('content')
    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
