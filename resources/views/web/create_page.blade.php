<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CreatingRPD</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/styles_for_web_pages.css">
    <link rel="stylesheet" href="/css/select_css.css">
    <link rel="stylesheet" href="/css/test_ui.css">
    <link rel="stylesheet" href="/css/flex_competencies.css">
    <script src="/js/jutsu.js"></script>
</head>
<body>
<form name="gg" method="POST" action="{{route('create_page.post')}}" enctype="multipart/form-data">
    @csrf
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><a name="backToProfile" href="/profile/"><<< Назад в профиль: {{$user->name}}</a></li> {{--Хз стоит ли сюда вставлять кнопку--}}
            <li name="leftPartLi"><button value='create' type="submit" name="EditFooterBTN" >Создать новый РПУД</button></li>
            <li name="leftPartLi"><button value='download' type="submit" name="EditFooterBTN" >Скачать</button></li>
            <li name="rightPartLi">
                <div class="select" name="splash2">
                    <div name="forHeader">Дисциплины: </div>
                    <select name = "chooseRpd">
                        <option value = 1>@isset($rpd) {{$rpd->discipline}}@endisset</option>
                        <input type="submit" name="EditFooterBTN" value="get">
                    </select>
                </div>
            </li>
        </tr>
    </ul>
{{--    <ul name="SecondUpperHeader">--}}
{{--               <tr>--}}
{{--                    <li name="SecondLeftPartLi"><input value="" class="input2" type="text" placeholder="Дисциплина">--}}
{{--                </li>--}}
{{--            </tr>--}}
{{--    </ul>--}}
    <body>
    <ul name="UpperHeader2">
        <tr>
            <li name="leftPartLi">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image">
                    <button type="submit" class="button11" name = 'EditFooterBTN' value = 'send'>Отправить</button>
                    <input class="input4" name="sheet" @isset($sheet) value="{{$sheet}}" @endisset  type="text" placeholder="название листа">
                    <input class="input5" name="rows" @isset($row) value="{{$row}}"@endisset  type="text" placeholder="номер строки">
                </form>
            </li>
        </tr>
    </ul>
    <div class="tab">
        <button type="button" class="tablinks" onclick="openCity(event, 'time_for_RPD')">Время для РПД</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'total_akadem_hours')">Общее время академических часов</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'form_control')">Форма контроля</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'credit_units')">Зачётные единицы</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'Departament')">Департамент</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'competencies')">Компетенции</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'sub_competencies')">Подкомпетенции</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'basic_information')">Базовая информация</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'valuation_funds')">Фонды оценочных средств</button>
    </div>

    <div id="title_page" class="tabcontent">
        @include('web.check.title')
    </div>

    <div id="time_for_RPD" class="tabcontent">
        @include('web.check.time_for_rpd')
    </div>

    <div id="total_akadem_hours" class="tabcontent">
        @include('web.check.total_akadem_hours')
    </div>

    <div id="form_control" class="tabcontent">
        @include('web.check.form_control')
    </div>

    <div id="credit_units" class="tabcontent">
        @include('web.check.credit_units')
    </div>

    <div id="Departament" class="tabcontent">
        @include('web.check.Departament')
    </div>

    <div id="competencies" class="tabcontent">
        @include('web.check.competencies')
    </div>

    <div id="sub_competencies" class="tabcontent">
        @include('web.check.sub_competencies')
    </div>

    <div id="basic_information" class="tabcontent">
        @include('web.check.basic_information')
    </div>

    <div id="valuation_funds" class="tabcontent">
        @include('web.check.valuation_funds')
    </div>
    </body>
</form>
</body>
</body>
</html>
