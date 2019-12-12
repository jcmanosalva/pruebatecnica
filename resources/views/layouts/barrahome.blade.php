<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Prueba</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
    <script type="text/javascript">      
  window.csrf_token = "{{ csrf_token() }}"
</script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .colores{
            background:#007bff !important;
            color: white !important;
        }       

        .margin-top10{
                    margin-top:10px;
                }
              
    </style>

</head>
<body>
    <div id="app">

<nav class="navbar navbar-inverse ">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="{{ url('/') }}">
                    Prueba Técnicas 
                </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">          
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                <ul class="dropdown-menu">
                  <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
               
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>



      

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
