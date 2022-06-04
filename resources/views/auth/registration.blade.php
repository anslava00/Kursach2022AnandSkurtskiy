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
</body>
</html>
