<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id='app'>
            <nav-component></nav-component>
             
             <router-view></router-view>

             <footer-component></footer-component>
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
