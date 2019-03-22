<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="{{ asset("/assets/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" rel="stylesheet" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Posts</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <span>
                        @if(auth()->check())
                            {{ auth()->user()->name }}
                        @endif
                    </span>
                </li>
            </ul>

        </div>
    </nav>
    <br/>

    <div class="container">


        @include('alerts')


        @yield('content')
    </div>
    <script src="{{ asset("/assets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("/assets/js/popper.min.js") }}"></script>
    <script src="{{ asset("/assets/plugins/bootstrap/js/bootstrap.min.js") }}"></script>
</body>
</html>
