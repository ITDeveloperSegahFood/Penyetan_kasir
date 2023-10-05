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
            <div id="right"><a href=""><img id="img_transparent" src="{{url('/assets/images/bg_orange.png')}}" /></a></div>
        </div>
        {{-- <div class="form-floating mb-3 input">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div> --}}
        <div wire:loading>Loading...</div>
        <form action="{{route('login.auth')}}" method="post">
            {{ csrf_field() }}
            <p id="title">masuk</p>
            <div class="form-group input">
                <label for="user_name">User Name <span class="error">{{ (($errors->any()) ? $errors->first('password') : '') }}</span></label>
                <input class="form-control" type="text" name="user_name" value="" placeholder="User Name">
            </div>
            <div class="form-group input">
                <label for="user_name">Sandi <span class="error">{{ (($errors->any()) ? $errors->first('password') : '') }}</span></label>
                <input class="form-control" type="password" name="password" value="" placeholder="Sandi">
            </div>
            
            <div class="form-group button">
                <button type="submit" >masuk</button>
            </div>
        </form>
    </body>
</html>
