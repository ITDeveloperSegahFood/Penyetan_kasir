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
    <body id="information">
        <div id="header">
            <div id="left"><a href=""><img id="img_transparent" src="{{url('/assets/images/bg_orange.png')}}" /></a></div>
            <div id="center">{{$company_full_name}}</div>
            <div id="right"><a href=""><img id="img_transparent" src="{{url('/assets/images/bg_orange.png')}}" /></a></div>
        </div>
        
        <form action="{{route('login.index')}}" method="get">
            {{ csrf_field() }}
            <p id="title">informasi</p>

            <p id="sub_title">{{$title}}</p>

            <p id="description">{{$body}}</p>
            
            <div class="form-group button">
                <div class="form-group button">
                    <button type="submit" >masuk</button>
                </div>
            </div>
        </form>
    </body>
</html>
