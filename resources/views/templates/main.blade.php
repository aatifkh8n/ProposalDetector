<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | @yield('subtitle')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <h1 class="bg-info p-5 text-light">@yield('heading')</h1>
        
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
            {{Session::put('success', null)}}
        </div>
        @endif
        
        
        <div class="container my-5" style="min-height: 54vh;">
            @yield('content')
        </div>
        <footer class="p-3 text-center bg-dark text-light">
             &copy; <a href="https://linkedin/in/atif-jamil-41770a230" class="text-light">Atif Jamil</a> 2023
        </footer>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>