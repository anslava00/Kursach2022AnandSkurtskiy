<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/new_profile_css.css">


</head>
<header>
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><div name = "forLi">Профиль</div></li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li name="rightPartLi"><button type="submit" name="logoutBTN">logout</button></li>
            </form>
            <li name="rightPartLi"><a name="refUpperHeader" href="/profile/">User: {{$user->name}}</a></li>
            <li name="rightPartLi"><div name="forHeader">Role: {{$role}}</div></li>
        </tr>
    </ul>
</header>
