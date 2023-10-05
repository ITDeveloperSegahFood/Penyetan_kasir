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
            <div id="left"><a href=""><img id="img_transparent" src="{{url('/assets/images/bg_orange.png')}}" /></a></div>
            <div id="center">{{$company_full_name}}</div>
            <div id="right"><a href="{{route('history.index')}}"><img id="img_transparent" src="{{url('/assets/images/history_transparent.png')}}" /></a></div>
        </div>
        <div class="row justify-content-md-center list-square-parent">
            @foreach($datas as $data)
                <div id={{$data[1]}} class="list-square marketplace col col-6" data-value={{$data[1]}}>
                    <div class="top">
                        <img id="{{$data[1]}}" src="{{url('/assets/images/'.$data[4])}}" alt="">
                    </div>
                    <div class="bottom"><p>{{$data[2]}}</p></div>
                </div>
            @endforeach
        </div>

        <script src="{{ asset('assets/js/project.js') }}"></script>
    </body>
</html>
