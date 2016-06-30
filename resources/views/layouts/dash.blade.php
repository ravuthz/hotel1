<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- Styles -->
    {{--
    <link href="{{ elixir('dash/style.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="/dash/style.css">
    <style>
    body {
        padding-top: 70px;
        padding-bottom: 30px;
    }
    
    .theme-dropdown .dropdown-menu {
        position: static;
        display: block;
        margin-bottom: 20px;
    }
    
    .theme-showcase > p > .btn {
        margin: 5px 0;
    }
    
    .theme-showcase .navbar .container {
        width: auto;
    }
    </style>
</head>

<body>
    @include('dash.partials.menubar')
    <div class="container">
        @yield('content')
    </div>
    <!-- JavaScripts -->
    {{-- //
    <script src="{{ elixir('dash/script.js') }}"></script> --}}
    <script type="text/javascript" src="dash/script.js"></script>
</body>

</html>
