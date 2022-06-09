<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редактировать РПД</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/styles_for_web_pages.css">
    <link rel="stylesheet" href="/css/select_css.css">
    <link rel="stylesheet" href="/css/test_ui.css">
    <link rel="stylesheet" href="/css/flex_competencies.css">
    <link rel="stylesheet" href="/css/search_css.css">
    <script src="/js/jutsu.js"></script>
</head>
<body>
    <form name="gg" method="POST" action="{{route('edit_page.post')}}">
    @csrf
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><a name="backToProfile" href="/profile/"><<< Назад в профиль: {{$user->name}}</a></li> {{--Хз стоит ли сюда вставлять кнопку--}}
            <li name="leftPartLi"><button value='edit' type="submit" name="EditFooterBTN" >Применить редактирование</button></li>
            <li name="leftPartLi"><button value='download' type="submit" name="EditFooterBTN" >Скачать</button></li>
            <li name="rightPartLi">
                <div class="select" name="splash2">
                    <input id="search" type="text" name="search_field" placeholder="Поиск" onclick="select_Finder()">
                    <select id="discipline_selector" name = "chooseRpd">
                        @foreach($rpds as $rpd)
                            <option @if ($chooseSelect == $rpd->id) selected @endif  value="{{ $rpd->id }}">{{$rpd->discipline}}</option>
                        @endforeach
                        <input type="submit" name="EditFooterBTN" value="get">
                    </select>
                </div>
            </li>
        </tr>
    </ul>
{{--    <ul name="SecondUpperHeader">--}}
{{--               <tr>--}}
{{--                    <li name="SecondLeftPartLi"><input value="" class="input2" type="text" placeholder="Дисциплина"></li>--}}
{{--                </tr>--}}
{{--    </ul>--}}


        <body>
    <div class="tab">
        <button type="button" class="tablinks" onclick="openCity(event, 'time_for_RPD')">Время расчитанное на отдельный курс</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'total_akadem_hours')">Общее время академических часов</button>
        <button type="button" class="tablinks" onclick="openCity(event, 'form_control')">Форма контроля</button>
{{--        <button type="button" class="tablinks" onclick="openCity(event, 'credit_units')">Зачётные единицы</button>--}}
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
</html>
