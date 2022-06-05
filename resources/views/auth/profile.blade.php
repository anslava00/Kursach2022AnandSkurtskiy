<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <ul name="UpperHeader">
            <tr>
                <li name="leftPartLi"><div name = "forLi">РПУД</div></li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li name="rightPartLi"><button type="submit" name="logoutBTN">logout</button></li>
                </form>
                <li name="rightPartLi"><a name="refUpperHeader" href="/profile/">User: {{$user->name}}</a></li>
                <li name="rightPartLi"><div name="forHeader">Role: {{$role}}</div></li>
            </tr>
        </ul>
    </header>
    <main>

    </main>
    <footer>
        <ul name="LowerFooter">
            <tr>
                <form method="GET" action="{{route('create_page')}}">
                    @csrf
                    <li name="rightPartLi"><button name="CreateFooterBTN" type="submit">Create New RPD</button></li>
                </form>
                <form method="GET" action="{{route('edit_page')}}">
                    @csrf
                <li name="rightPartLi"><button name="EditFooterBTN">Edit RPD</button></li>
                </form>
                <form method="GET" action="{{route('check_page')}}">
                    @csrf
                    <li name="rightPartLi"><button name="EditFooterBTN">Check All RPD</button></li>
                </form>
            </tr>
        </ul>
    </footer>
</body>
</html>
