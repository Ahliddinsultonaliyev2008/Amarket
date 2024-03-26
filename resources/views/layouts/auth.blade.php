<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/bootstrap/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/amarket.css')}}">
</head>
<body>



@yield('content')
<script src="{{asset('static/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('static/js/amarket.js')}}"></script>
</body>
</html>
