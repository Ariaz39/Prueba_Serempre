<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">PRUEBA SEREMPRE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item @yield('pageClient')">
                            <a class="nav-link" href="{{route('client.index')}}">Client <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item @yield('pageCities')">
                            <a class="nav-link" href="{{route('cities.index')}}">Cities</a>
                        </li>
                        <!-- <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li> -->
                    </ul>

                    <ul class="navbar-nav ml-auto">
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
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                    <!-- <form class="form-inline my-2 my-lg-0"> -->
                        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
                        <!-- <a class="btn btn-primary my-2 my-sm-0" href="{{route('client.create')}}">Create</a> &emsp13; -->
                        <!-- <a class="btn btn-primary my-2 my-sm-0" href="{{route('client.index')}}">Back</a> -->
                        <!-- </form> -->
                </div>
            </nav>

        </div>


        @yield('content')


    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatableAll').DataTable( {
            "order": [ 0, "desc" ],
            "language": {
                "lengthMenu": 'Show <select class="form-control input-sm">'+
                    '<option value="5">5</option>'+
                    '<option value="10">10</option>'+
                    '<option value="25">25</option>'+
                    '<option value="50">50</option>'+
                    '</select> entries',
            }

        } );
    } );
</script>
</body>
</html>
