<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>{{ $titulo or 'Tasks.go' }}</title>

        <link rel="stylesheet" href="{{ asset("/css/tasks.go.css") }}">
    </head>

    <body>
        @yield('navbar')

        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('/js/tasks.go.js') }}"></script>
    </body>
</html>
