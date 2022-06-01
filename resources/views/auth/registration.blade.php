<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="/css/styles_for_auth_pages.css">

</head>
<body>
<form class="form" action="{{route('registration.post')}}" method="POST">
    @csrf
    <div name="divAuth">
        Регистрация
    </div>
    <div>
        <input name = "name" class="input" value="{{old('name')}}" placeholder="Ваше имя"/>
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div>
        <input name = "email" class="input" type="email" value="{{old('email')}}" placeholder="Ваш e-mail">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div>
        <input name = "password" class="input" type="password" value="{{old('password')}}" placeholder="Пароль">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
{{--    <div>--}}
{{--        <input class="input" type="password" placeholder="Пароль еще раз">--}}
{{--    </div>--}}
    <button class="btn" type="submit">Регистрация</button>
    <a href="/login/">Уже зарегистрированы?</a>
</form>
{{--<form method="POST" action="{{route('registration.post')}}">--}}
{{--    @csrf--}}
{{--    <div>--}}
{{--        <label>Name</label>--}}
{{--        <input type="text" name="name" value="{{old('name')}}" maxlength="255"/>--}}
{{--        @error('name')--}}
{{--        <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <label>E-mail</label>--}}
{{--        <input type="text" name="email" value="{{old('email')}}" maxlength="255"/>--}}
{{--        @error('email')--}}
{{--        <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <label>Password</label>--}}
{{--        <input name="password" value="{{old('password')}}" maxlength="2000"></textarea>--}}
{{--        @error('password')--}}
{{--        <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <a href="/login/">login</a>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <input type="submit"/>--}}
{{--    </div>--}}
{{--</form>--}}
</body>
</html>
