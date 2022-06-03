<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ViewsRPD</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/styles_for_web_pages.css">
    <link rel="stylesheet" href="/css/dropdown_menu.css">
    <link rel="stylesheet" href="/css/inputDropDownMenu.css">
    <link rel="stylesheet" href="/css/select_css.css">
    <link rel="stylesheet" href="/css/test_ui.css">
    <script src="/js/jutsu.js"></script>
</head>
<body>
<header></header>
<form name="gg" method="POST" action="{{route('check_page')}}">
    @csrf
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><a name="refUpperHeader" href="/profile/">User: {{$user->name}}</a></li> {{--Хз стоит ли сюда вставлять кнопку--}}
            <li name="rightPartLi">
{{--                <ul id="RPDList" >--}}
{{--                    <li><div name="splash">Список РПУД</div>--}}
{{--                    <li><div name="splash">{{$rpds->firstWhere('id', '=', 1)->abbreviathion}}</div>--}}
{{--                        <ul class="layer">--}}
{{--                            @for ($i = 1; $i < 10; $i++)--}}
{{--                                <li>--}}
{{--                                    <form name="ddGET" method="POST" action="{{route('create_page')}}">--}}
{{--                                        @csrf--}}
{{--                                        <div name = "specialForDropDown">--}}
{{--                                            <button name="DropDownBTN" type="submit" formaction="{{route('check_page')}}">--}}
{{--                                                {{$rpds->firstWhere('id', '=', $i)->id}}--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </li>--}}
{{--                            @endfor--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}

                <div class="select" name="splash">
                    <select>
                        @for ($i = 1; $i < 10; $i++)
                            <option value="{{$rpds->firstWhere('id', '=', $i)->id}}">{{$rpds->firstWhere('id', '=', $i)->abbreviathion}}</option>
                        @endfor
                        <input type="submit" value="send">
                    </select>
                </div>
            </li>
        </tr>
    </ul>
    <ul name="SecondUpperHeader">
        <tr>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="{{$rpds->firstWhere('id', '=', $i)->id}}"></li>
            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="{{$rpds->firstWhere('id', '=', $i)->abbreviathion}}"></li>
        </tr>
    </ul>
</form>

<body>
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'time_for_RPD')">time_for_RPD</button>
            <button class="tablinks" onclick="openCity(event, 'total_akadem_hours')">total_akadem_hours</button>
            <button class="tablinks" onclick="openCity(event, 'form_control')">form_control</button>
            <button class="tablinks" onclick="openCity(event, 'credit_units')">credit_units</button>
            <button class="tablinks" onclick="openCity(event, 'Departament')">Departament</button>
            <button class="tablinks" onclick="openCity(event, 'rpd_and_competencies')">rpd_and_competencies</button>
            <button class="tablinks" onclick="openCity(event, 'sub_competencies')">rpd_and_competencies</button>
            <button class="tablinks" onclick="openCity(event, 'basic_information')">basic_information</button>
            <button class="tablinks" onclick="openCity(event, 'valuation_funds')">valuation_funds</button>
        </div>

        <div id="time_for_RPD" class="tabcontent">
            <h1>time_for_RPD</h1>
            <div>
                <h2>Курс</h2>
                <h2>Семестр</h2>
                <h2>Зачётные единицы</h2>
                <h2>Лекции</h2>
                <h2>Лабораторные</h2>
                <h2>Лабораторные интер.</h2>
                <h2>Практика</h2>
                <h2>Практика интер.</h2>
                <h2>КСП</h2>
                <h2>ОК</h2>
                <h2>СП</h2>
                <h2>Контроль</h2>
            </div>
        </div>

        <div id="total_akadem_hours" class="tabcontent">
            <h1>total_akadem_hours</h1>
            <div>
                <h2>Эксперты</h2>
                <h2>В плане</h2>
                <h2>Контрольные работы</h2>
                <h2>Самостоятельные работы</h2>
                <h2>Контрольные</h2>
                <h2>Часы интер.</h2>
                <h2>Пр. подготовки</h2>
            </div>
        </div>

        <div id="form_control" class="tabcontent">
            <h1>total_akadem_hours</h1>
            <div>
                <h2>Экзаминация</h2>
                <h2>Зачёт</h2>
                <h2>Зачёт с оценкой</h2>
                <h2>КП</h2>
                <h2>КР</h2>
                <h2>Контроль</h2>
                <h2>РГР</h2>
                <h2>Контроль</h2>
            </div>
        </div>

        <div id="credit_units" class="tabcontent">
            <h1>total_akadem_hours</h1>
            <div>
                <h2>Эксперты</h2>
                <h2>Факты</h2>
                <h2>Часов в зачётной единице</h2>
            </div>
        </div>

        <div id="Departament" class="tabcontent">
            <h1>total_akadem_hours</h1>
            <div>
                <h2>Эксперты</h2>
                <h2>Аббревиатура</h2>
                <h2>Титул</h2>
            </div>
        </div>

        <div id="rpd_and_competencies" class="tabcontent">
            <h1>total_akadem_hours</h1>
            <div>
                <h2>Титул</h2>
                <h2>Тип компетенции</h2>
                <h2>Задача</h2>
                <h2>Источник</h2>
                <h2>Объект</h2>
                <h2>Тип</h2>
            </div>
        </div>

        <div id="sub_competencies" class="tabcontent">
            <h1>total_akadem_hours</h1>
            <div>
                <h2>Титул</h2>
                <h2>Описание</h2>
            </div>
        </div>

        <div id="basic_information" class="tabcontent">
            <h1>Базовая информация</h1>
            <div>
                <h2>СТРУКТУРА И СОДЕРЖАНИЕ ТЕОРЕТИЧЕСКОЙ ЧАСТИ КУРСА</h2>
                <h4>Лекционные занятия</h4>
            </div>
            <div>
                <h2>СТРУКТУРА И СОДЕРЖАНИЕ ПРАКТИЧЕСКОЙ ЧАСТИ КУРСА И САМОСТОЯТЕЛЬНОЙ РАБОТЫ </h2>
                <h4>Лабораторные работы </h4>
                <h4>Материалы для выполнения лабораторных работ</h4>
            </div>
            <div>
                <h2>УЧЕБНО-МЕТОДИЧЕСКОЕ ОБЕСПЕЧЕНИЕ САМОСТОЯТЕЛЬНОЙ РАБОТЫ ОБУЧАЮЩИХСЯ</h2>
                <h4>План-график выполнения самостоятельной работы по дисциплине</h4>
                <h4>Рекомендации по самостоятельной работе студентов</h4>
                <h4>Методические рекомендации по выполнению заданий для самостоятельной работы и критерии оценки.</h4>
                <h4>Критерии оценки.</h4>
                <h4>Методические рекомендации по написанию эссе</h4>
            </div>
            <div>
                <h2>КОНТРОЛЬ ДОСТИЖЕНИЯ ЦЕЛЕЙ КУРСА</h2>
                <h4></h4>
            </div>
            <div>
                <h2>СПИСОК УЧЕБНОЙ ЛИТЕРАТУРЫ И ИНФОРМАЦИОННО-МЕТОДИЧЕСКОЕ ОБЕСПЕЧЕНИЕ ДИСЦИПЛИНЫ</h2>
                <h4>Основная литература</h4>
                <h4>Дополнительная литература</h4>
                <h4>Перечень ресурсов информационно-телекоммуникационной сети
                    «Интернет»
                </h4>
            </div>
            <div>
                <h2>МЕТОДИЧЕСКИЕ УКАЗАНИЯ ПО ОСВОЕНИЮ ДИСЦИПЛИНЫ</h2>
                <h4>Методические инструкции</h4>
            </div>
            <div>
                <h2>МАТЕРИАЛЬНО-ТЕХНИЧЕСКОЕ ОБЕСПЕЧЕНИЕ ДИСЦИПЛИНЫ</h2>
                <h4>Наименование специальных помещений и помещений для самостоятельной работы
                    Оснащенность специальных помещений и помещений для самостоятельной работы	Перечень лицензионного программного обеспечения.
                    Реквизиты подтверждающего документа
                </h4>
                <h4>Оснащенность специальных помещений и помещений для самостоятельной работы</h4>
                <h4>Перечень лицензионного программного обеспечения.
                    Реквизиты подтверждающего документа
                </h4>
            </div>
        </div>
        <div id="valuation_funds" class="tabcontent">
            <div>
                <h2>ФОНДЫ ОЦЕНОЧНЫХ СРЕДСТВ</h2>
                {{--                <h4>Устный опрос </h4>--}}
                {{--                <h4>Письменные работы</h4>--}}
                <h4>Оценочные средства для промежуточной аттестации</h4>
                <h4>Методические указания по сдаче зачета</h4>
                <h4>Вопросы к зачету</h4>
                <h4>Критерии выставления оценки студенту на зачете</h4>
                <h4>Оценочные средства для текущей аттестации</h4>
                <h4>Вопросы для собеседования / устного опроса</h4>
                <h4>Критерии оценивания</h4>
                <h4>Тематика презентаций</h4>
                <h4>Критерии оценки презентации</h4>
                <h4>Тематика эссе</h4>
                <h4>Критерии оценки эссе</h4>
                <h4>Тематика лабораторных работ</h4>
                <h4>Критерии оценки лабораторных работ</h4>
                <h4>Тематика контрольно-расчетных работ</h4>
                <h4>Критерии оценки контрольно-расчетных работ</h4>
                <h4>Творческие задания</h4>
                <h4>Критерии оценки творческого задания
                    по построению геоморфологической карты
                </h4>
            </div>
        </div>

    </body>

{{--    <ul id="navbar2">--}}
{{--        <li><a href="#">SomeData</a>--}}
{{--            <ul id="input_navbar" class = "layer" name = "InputField">--}}
{{--                       @for($i = 0; $i < 100; $i++)--}}
{{--                           <input class="input2" type="text" placeholder="{{$i}}">--}}
{{--                       @endfor--}}
{{--                <li name="ss">--}}
{{--                    content here--}}
{{--                </li>--}}
{{--                <li name="ss">--}}
{{--                    content here--}}
{{--                </li>--}}
{{--                <li name="ss">--}}
{{--                    content here--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="#">SomeData</a>--}}
{{--            <ul id="input_navbar" class = "layer" name = "InputField">--}}
{{--                @for($i = 0; $i < 100; $i++)--}}
{{--                    <input class="input2" type="text" placeholder="{{$i}}">--}}
{{--                @endfor--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="#">SomeData</a>--}}
{{--            <ul id="input_navbar" class="layer" name = "InputField">--}}
{{--                @for($i = 0; $i < 100; $i++)--}}
{{--                    <input class="input2" type="text" placeholder="{{$i}}">--}}
{{--                @endfor--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="#">SomeData</a>--}}
{{--            <ul id="input_navbar" class = "layer" name = "InputField">--}}
{{--                @for($i = 0; $i < 100; $i++)--}}
{{--                    <input class="input2" type="text" placeholder="{{$i}}">--}}
{{--                @endfor--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--    </ul>--}}
    <main>
    </main>
</body>
</html>
