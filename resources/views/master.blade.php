<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="app-base-url" content="{{ url('/') }}"/>
        <title>{{env('APP_NAME')}}</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        <div>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
<script src="{{asset('js/app.js')}}"></script>