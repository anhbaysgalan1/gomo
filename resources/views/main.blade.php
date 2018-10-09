<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Gomo learning | @yield('title')</title>
</head>
<body
>
    @include('navigation')

    <div class="ui container">
        @yield('content')
    </div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/semantic.min.js') }}"></script>
<script src="{{ asset('js/tablesort.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
