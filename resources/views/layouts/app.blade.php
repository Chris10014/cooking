<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    {{-- Font Awesome Kit --}}
    <script src="https://kit.fontawesome.com/c1d2775197.js" crossorigin="anonymous"></script>

    {{-- Styles --}}
    <link href="{{ asset('/public/css/cooking.css') }}" rel="stylesheet">



    <title>@yield('title', "Rezepte")</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/home') }}">Rezeptfinder</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("recipes") }}">Rezepte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("authors") }}">Authoren</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("publishers") }}">Verlage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("incredients") }}">Zutaten</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
<div class="flex-fill">
        @yield('content')

</div>
        <footer>
            <p>This is the footer of my page!</p>
        </footer>


        {{-- jQuery, Popper.js, and Bootstrap JS --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
        </script>
        <script src="{{ asset('/public/js/cooking.js') }}" type="text/javascript" defer></script>
        <script src="{{ asset('/public/js/jquery.validate.min.js') }}" type="text/javascript" defer></script>

    </div>
</body>

</html>
