<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>
    <link rel="stylesheet" href="/css/styles_for_auth_pages.css">

</head>
<body>
<form class="form" action="{{route('login.post')}}" method="POST">
    @csrf
    <div name="divAuth">
            Вход
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
    <button class="btn" type="submit">Вход</button>
    <a href="/registration/">Ещё нет аккаунта?</a>
</form>
</body>
</html>
