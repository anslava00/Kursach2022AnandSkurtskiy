<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Профиль</title>
    <link rel="stylesheet" href="/css/new_profile_css.css">

</head>
<header>
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><div name = "forLi">Профиль</div></li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li name="rightPartLi"><button type="submit" name="logoutBTN">Выйти</button></li>
            </form>
            <li name="rightPartLi"><a name="refUpperHeader" href="/profile/">Пользователь: {{$user->name}}</a></li>
            <li name="rightPartLi"><div name="forHeader">Роль: {{$role}}</div></li>
        </tr>
    </ul>
</header>
<body>
<ul name="side_Bar">
    <tr>
        <form method="GET" action="{{route('create_page')}}">
            @csrf
            <li>
                <button name="createBTN">Создать новый РПУД</button>
            </li>
        </form>
        <form method="GET" action="{{route('edit_page')}}">
            @csrf
            <li>
                <button name="editBTN">Редактировать мои РПУДы</button>
            </li>
        </form>
        <form method="GET" action="{{route('check_page')}}">
            @csrf
            <li>
                <button name="editBTN">Посмотреть все РПУДы</button>
            </li>
        </form>
        <form method="GET" action="{{route('how_to_use')}}">
            @csrf
            <li>
                <button name="editBTN">Как пользоваться?</button>
            </li>
        </form>
        @role('admin')
        <form method="GET" action="{{route('admin_page')}}">
            @csrf
            <li>
                <button name="toAdminBTN">Перейти в панель администратора</button>
            </li>
        </form>
        @endrole
    </tr>
</ul>

</body>
</html>

