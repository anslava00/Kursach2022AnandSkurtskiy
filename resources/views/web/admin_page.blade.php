<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Профиль</title>
    <link rel="stylesheet" href="/css/admin_css.css">

</head>
<header>
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><a name="backToProfile" href="/profile/"> <<< Назад в профиль: {{$user->name}}</a></li>
            <li name="rightPartLi"><a name="refUpperHeader" href="#">Пользователь: {{$user->name}}</a></li>
            <li name="rightPartLi"><div name="forHeader">Роль: {{$role}}</div></li>
        </tr>
    </ul>
</header>
<body>
<ul name="UpperHeader">
    <tr>
        <li name="leftPartLi">
            <form method="POST" action="" enctype="multipart/form-data">\
                @csrf
                <input type="file" name="image">
                <button type="submit" >Отправить</button>
            </form>
        </li>
    </tr>
</ul>

</body>
