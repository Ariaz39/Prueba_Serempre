<!DOCTYPE html>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                    <form class="form-inline my-2 my-lg-0">
                        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
                        <a class="btn btn-primary my-2 my-sm-0" href="{{route('client.create')}}">Create</a> &emsp13;
                        <a class="btn btn-primary my-2 my-sm-0" href="{{route('client.index')}}">Back</a>
                    </form>
                </div>
            </nav>

        </div>


        @yield('content')



    </div>
</div>
</body>
</html>
