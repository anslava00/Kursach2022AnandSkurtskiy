<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CreatingRPD</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/styles_for_web_pages.css">
    <link rel="stylesheet" href="/css/dropdown_menu.css">
</head>
<body>
<header></header>
<form method="POST", action="">
    @csrf
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><a name="refUpperHeader" href="/profile/">User: {{$user->name}}</a></li>
            <li name="rightPartLi">
                <ul id="RPDList" >
                    <li ><div>Список РПУД</div>
                        <ul>
{{--                            <li><a href="#">SomeData</a></li>--}}
{{--                            <li><a href="#">SomeData</a></li>--}}
                            <li>
                                <div class="layer">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem
                                    nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat.
                                    Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit
                                    lobortis nisl ut aliquip ex ea commodo consequat.
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem
                                    nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat.
                                    Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit
                                    lobortis nisl ut aliquip ex ea commodo consequat.
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </tr>
    </ul>
    <ul name="SecondUpperHeader">
        <tr>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="RPD-Name"></li>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="SomeData"></li>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="SomeData"></li>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="SomeData"></li>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="SomeData"></li>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="SomeData"></li>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="SomeData"></li>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="SomeData"></li>
        </tr>
    </ul>
    <ul id="navbar">
        <li><a href="#">SomeData</a></li>
        <li><a href="#">SomeData</a></li>
        <li><a href="#">SomeData</a>
            <ul>
                <li><a href="#">SomeData</a></li>
                <li><a href="#">SomeData</a></li>
                <li><a href="#">SomeData</a></li>
            </ul>
        </li>
        <li><a href="#">SomeData</a></li>
    </ul>
    </header>
    <main>
    </main>
</form>
</body>
</html>
