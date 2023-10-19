<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proposal Detector</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <a class="btn btn-success" href="{{URL::to('/proposals/')}}">Proposals</a>

        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
