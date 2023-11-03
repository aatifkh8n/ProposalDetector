<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | @yield('subtitle')</title>

        <link rel="stylesheet" href="/css/style.css">
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body class="text-center">

        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
            @include('includes.header')
            
            @if (Session::has('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{Session::get('success')}}
                {{Session::put('success', null)}}
            </div>
            @endif

            @if (Session::has('failure'))
            <div class="alert alert-danger mt-3" role="alert">
                {{Session::get('failure')}}
                {{Session::put('failure', null)}}
            </div>
            @endif
        
            @yield('content')

            @include('includes.footer')
        </div>

        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>