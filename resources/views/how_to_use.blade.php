<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Как изпользовать?</title>
    <link rel="stylesheet" href="/css/new_profile_css.css">

</head>
<header>
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><a name="backToProfile" href="/profile/"><<< Назад в профиль: {{$user->name}}</a></li>
        </tr>
    </ul>
</header>
<body>
<div name="instruction">
    <div>1. Пункт первый</div>
    <div>2. Пункт второй</div>
    <div>3. Пункт третий</div>
    <div>4. Пункт четвёртый</div>
    <div>5. Пункт пятый</div>
</div>
</body>
</html>
