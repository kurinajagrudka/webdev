<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>Get schwifty</title>
        @yield('css')
    </head>
    <body>
        @include('includes.navbar')
        <div class="container">
            @include('includes.massages')
            @yield('content')
        </div>
        <div class="foot">
            Authors: Nikita Ulanovs, Valery Zaytsev
        </div>
            <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        @yield('js')
    </body>
</html>
