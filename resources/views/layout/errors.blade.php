<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="beHABITAT">
        <meta name="author" content="Ricardo Mejias">

        <title>beHABITAT-@yield('titulo')</title>

        <link rel="stylesheet" type="text/css" href="assets/css/behabitat.css">
        <!-- <link rel="stylesheet" type="text/css" href="{{ elixir('assets/css/behabitat.css') }}"> -->
        <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
    </head>
    <body>
    	@include('layout.partials.errorsnav')

        @yield('contenido')

        @include('layout.partials.footer')

        <!-- <script type="text/javascript" src="{{ elixir('assets/js/behabitat.js') }}"></script> -->
        <script type="text/javascript" src="assets/js/behabitat.js"></script>
    </body>
</html>

