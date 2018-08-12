<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"
        
        @yield('stylesheets')
    </head>
    <body>
        <header>
            @include('partials.header')
        </header>
        
        @yield('content')

        <footer>
            @include('partials.footer')
        </footer>
        
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>