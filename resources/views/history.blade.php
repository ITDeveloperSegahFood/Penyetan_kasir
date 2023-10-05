<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="{{ asset('libs/bootstrap-5.3.2/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/project.css') }}" rel="stylesheet">
        <script src="{{ asset('libs/jquery-3.7.0.js') }}"></script>
    </head>
    <body id="login">
        <div id="header">
            <div id="left"><a href=""><img id="img_transparent" src="{{url('/assets/images/arrow_left_transparent.png')}}" /></a></div>
            <div id="center">{{$company_full_name}}</div>
            <div id="right"><a href=""><img id="img_transparent" src="{{url('/assets/images/bg_orange.png')}}" /></a></div>
        </div>
        

        <script src="{{ asset('assets/js/project.js') }}"></script>
    </body>
</html>
