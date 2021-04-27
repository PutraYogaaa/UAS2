<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">

</head>
<body>

    @include('layouts.header')

    <main class="container">
        <div class="bg-ligth p-5 rounded">
            @yield('content')
        </div>
    </main>


    @include('layouts.footer')

    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>
