<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ViewsRPD</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/styles_for_web_pages.css">
    <link rel="stylesheet" href="/css/select_css.css">
    <link rel="stylesheet" href="/css/test_ui.css">
    <script src="/js/jutsu.js"></script>
</head>
<body>
<header></header>
<form name="gg" method="POST" action="{{route('check_page.post')}}">
    @csrf
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><a name="refUpperHeader" href="/profile/">User: {{$user->name}}</a></li> {{--Хз стоит ли сюда вставлять кнопку--}}
            @role('admin')
            <li name="leftPartLi"><a name="refUpperHeader" href="#">Edit</a></li>
            @endrole
            <li name="rightPartLi">
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
            <button class="tablinks" onclick="openCity(event, 'competencies')">competencies</button>
            <button class="tablinks" onclick="openCity(event, 'sub_competencies')">sub_competencies</button>
            <button class="tablinks" onclick="openCity(event, 'basic_information')">basic_information</button>
            <button class="tablinks" onclick="openCity(event, 'valuation_funds')">valuation_funds</button>
        </div>

        <div id="time_for_RPD" class="tabcontent">
            <h1>time_for_RPD</h1>
            <div >
                <div>
                    <h2>
                        Курс: <input class="input3" type="text" placeholder="Курс">
                    </h2>
                </div>
                <div >
                    <h2>
                        Семестр: <input class="input3" type="text" placeholder="Семестр">
                    </h2>
                </div>
                <div >
                    <h2>
                        Зачётные единицы: <input class="input3" type="text" placeholder="Зачётные единицы">
                    </h2>
                </div>
                <div >
                    <h2>
                        Лекции: <input class="input3" type="text" placeholder="Лекции">
                    </h2>
                </div>
                <div >
                    <h2>
                        Лабораторные: <input class="input3" type="text" placeholder="Лабораторнын">
                    </h2>
                </div>
                <div >
                    <h2>
                        Лабораторные интер.: <input class="input3" type="text" placeholder="Лабараторные интер">
                    </h2>
                </div>
                <div >
                    <h2>
                        Практика: <input class="input3" type="text" placeholder="Практика">
                    </h2>
                </div>
                <div >
                    <h2>
                        Практика интер.: <input class="input3" type="text" placeholder="Практика интер">
                    </h2>
                </div>
                <div >
                    <h2>
                        КСП: <input class="input3" type="text" placeholder="КСП">
                    </h2>
                </div>
                <div >
                    <h2>
                        ОК: <input class="input3" type="text" placeholder="ОК">
                    </h2>
                </div>
                <div >
                    <h2>
                        СП: <input class="input3" type="text" placeholder="СП">
                    </h2>
                </div>
                <div >
                    <h2>
                        Контроль: <input class="input3" type="text" placeholder="Контроль">
                    </h2>
                </div>
            </div>
        </div>

        <div id="total_akadem_hours" class="tabcontent">
            <h1>total_akadem_hours</h1>
            <div>
                <div >
                    <h2>
                        Лабораторные интер.: <input class="input3" type="text" placeholder="Эксперты">
                    </h2>
                </div>
                <div >
                    <h2>
                        Практика: <input class="input3" type="text" placeholder="В плане">
                    </h2>
                </div>
                <div >
                    <h2>
                        Практика интер.: <input class="input3" type="text" placeholder="Контрольные работы">
                    </h2>
                </div>
                <div >
                    <h2>
                        Самостоятельные работы: <input class="input3" type="text" placeholder="Самостоятельные работы">
                    </h2>
                </div>
                <div >
                    <h2>
                        Контрольные: <input class="input3" type="text" placeholder="Контрольные">
                    </h2>
                </div>
                <div >
                    <h2>
                        Часы интер.: <input class="input3" type="text" placeholder="Часы интер.">
                    </h2>
                </div>
                <div >
                    <h2>
                        Пр. подготовки: <input class="input3" type="text" placeholder="Пр. подготовки">
                    </h2>
                </div>
            </div>
        </div>

        <div id="form_control" class="tabcontent">
            <h1>form_control</h1>
            <div>
                <div >
                    <h2>
                        Экзаминация: <input class="input3" type="text" placeholder="Экзаминация">
                    </h2>
                </div>
                <div >
                    <h2>
                        Зачёт: <input class="input3" type="text" placeholder="Зачёт">
                    </h2>
                </div>
                <div >
                    <h2>
                        Зачёт с оценкой: <input class="input3" type="text" placeholder="Зачёт с оценкой">
                    </h2>
                </div>
                <div >
                    <h2>
                        КП: <input class="input3" type="text" placeholder="КП">
                    </h2>
                </div>
                <div >
                    <h2>
                        КР: <input class="input3" type="text" placeholder="КР">
                    </h2>
                </div>
                <div >
                    <h2>
                        Контроль: <input class="input3" type="text" placeholder="Контроль">
                    </h2>
                </div>
                <div >
                    <h2>
                        РГР: <input class="input3" type="text" placeholder="РГР">
                    </h2>
                </div>
                <div >
                    <h2>
                        Контроль: <input class="input3" type="text" placeholder="Контроль">
                    </h2>
                </div>
            </div>
        </div>

        <div id="credit_units" class="tabcontent">
            <h1>credit_units</h1>
            <div>
                <div >
                    <h3>Эксперты</h3>

                    <textarea cols="80" rows="2" id="bigWind" placeholder="Эксперты"></textarea>
                </div>
                <div >
                    <h3>Факты</h3>

                    <textarea cols="80" rows="2" id="bigWind" placeholder="Факты"></textarea>
                </div>
                <div >
                    <h3>Часов в зачётной единице</h3>

                    <textarea cols="80" rows="2" id="bigWind" placeholder="Часов в зачётной единице"></textarea>
                </div>
{{--                <div >--}}
{{--                    <h2>--}}
{{--                        Эксперты: <input class="input3" type="text" placeholder="Эксперты">--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div >--}}
{{--                    <h2>--}}
{{--                        Факты: <input class="input3" type="text" placeholder="Факты">--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div >--}}
{{--                    <h2>--}}
{{--                        Часов в зачётной единице: <input class="input3" type="text" placeholder="Часов в зачётной единице">--}}
{{--                    </h2>--}}
{{--                </div>--}}
            </div>
        </div>

        <div id="Departament" class="tabcontent">
            <h1>Departament</h1>
            <div>
                <div >
                    <h3>Аббревиатура</h3>

                    <textarea cols="80" rows="1" id="bigWind" placeholder="Аббревиатура"></textarea>
                </div>
                <div >
                    <h3>Титул</h3>

                    <textarea cols="80" rows="1" id="bigWind" placeholder="Титул"></textarea>
                </div>
            </div>
        </div>

        <div id="competencies" class="tabcontent">
            <h1>competencies</h1>
            <div>
                <div >
                    <h3>Титул</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Титул"></textarea>
                </div>
                <div >
                    <h3>Тип компетенции</h3>

                    <textarea cols="40" rows="3" id="bigWind" placeholder="Тип компетенции"></textarea>
                </div>
                <div >
                    <h3>Задача</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Задача"></textarea>
                </div>
                <div >
                    <h3>Источник</h3>

                    <textarea cols="40" rows="3" id="bigWind" placeholder="Источник"></textarea>
                </div>
                <div >
                    <h3>Объект</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Объект"></textarea>
                </div>
                <div >
                    <h3>Тип</h3>

                    <textarea cols="40" rows="3" id="bigWind" placeholder="Тип"></textarea>
                </div>
            </div>
        </div>

        <div id="sub_competencies" class="tabcontent">
            <h1>sub_competencies</h1>
            <div>
                <div >
                    <h3>Титул</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Титул"></textarea>
                </div>
                <div >
                    <h3>Описание</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Описание"></textarea>
                </div>
            </div>
        </div>

        <div id="basic_information" class="tabcontent">
            <h1>Базовая информация</h1>
            <div>
                <h2>СТРУКТУРА И СОДЕРЖАНИЕ ТЕОРЕТИЧЕСКОЙ ЧАСТИ КУРСА</h2>
                <div >
                    <h3>Лекционные занятия: </h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Лекционные занятия"></textarea>
                </div>
            </div>
            <div>
                <h2>СТРУКТУРА И СОДЕРЖАНИЕ ПРАКТИЧЕСКОЙ ЧАСТИ КУРСА И САМОСТОЯТЕЛЬНОЙ РАБОТЫ </h2>
                <div >
                    <h3>Лабораторные работы </h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Лабораторные работы "></textarea>
                </div>
                <div >
                    <h3>Материалы для выполнения лабораторных работ</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Материалы для выполнения лабораторных работ"></textarea>
                </div>
            </div>
            <div>
                <h2>УЧЕБНО-МЕТОДИЧЕСКОЕ ОБЕСПЕЧЕНИЕ САМОСТОЯТЕЛЬНОЙ РАБОТЫ ОБУЧАЮЩИХСЯ</h2>
                <div >
                    <h3>План-график выполнения самостоятельной работы по дисциплине</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="План-график выполнения самостоятельной работы по дисциплине"></textarea>
                </div>
                <div >
                    <h3>Рекомендации по самостоятельной работе студентов</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Рекомендации по самостоятельной работе студентов"></textarea>
                </div>
                <div >
                    <h3>Методические рекомендации по выполнению заданий для самостоятельной работы и критерии оценки.</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Методические рекомендации по выполнению заданий для самостоятельной работы и критерии оценки. "></textarea>
                </div>
                <div >
                    <h3>Методические рекомендации по написанию эссе</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Методические рекомендации по написанию эссе"></textarea>
                </div>
                <div >
                    <h3>Критерии оценки.</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Критерии оценки."></textarea>
                </div>
            </div>
            <div>
                <h2>КОНТРОЛЬ ДОСТИЖЕНИЯ ЦЕЛЕЙ КУРСА</h2>
                <h3></h3>
            </div>
            <div>
                <h2>СПИСОК УЧЕБНОЙ ЛИТЕРАТУРЫ И ИНФОРМАЦИОННО-МЕТОДИЧЕСКОЕ ОБЕСПЕЧЕНИЕ ДИСЦИПЛИНЫ</h2>
                <div >
                    <h3>Основная литература</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Основная литература"></textarea>
                </div>
                <div >
                    <h3>Дополнительная литература</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Дополнительная литература"></textarea>
                </div>
                <div >
                    <h3>Перечень ресурсов информационно-телекоммуникационной сети
                        «Интернет»
                    </h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Перечень ресурсов информационно-телекоммуникационной сети «Интернет»"></textarea>
                </div>

            </div>
            <div>
                <h2>МЕТОДИЧЕСКИЕ УКАЗАНИЯ ПО ОСВОЕНИЮ ДИСЦИПЛИНЫ</h2>
                <div >
                    <h3>Методические инструкции</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Методические инструкции"></textarea>
                </div>
            </div>
            <div>
                <h2>МАТЕРИАЛЬНО-ТЕХНИЧЕСКОЕ ОБЕСПЕЧЕНИЕ ДИСЦИПЛИНЫ</h2>
                <div >
                    <h3>Наименование специальных помещений и помещений для самостоятельной работы</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Наименование специальных помещений и помещений для самостоятельной работы"></textarea>
                </div>
                <div >
                    <h3>Оснащенность специальных помещений и помещений для самостоятельной работы </h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Оснащенность специальных помещений и помещений для самостоятельной работы"></textarea>
                </div>
                <div >
                    <h3>Перечень лицензионного программного обеспечения.</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."></textarea>
                </div>
                <div >
                    <h3>Реквизиты подтверждающего документа</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."></textarea>
                </div>
            </div>
        </div>

        <div id="valuation_funds" class="tabcontent">
            <div>
                <h2>ФОНДЫ ОЦЕНОЧНЫХ СРЕДСТВ</h2>
                <div >
                    <h3>Оценочные средства для промежуточной аттестации</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Оценочные средства для промежуточной аттестации"></textarea>
                </div>
                <div >
                    <h3>Методические указания по сдаче зачета</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Методические указания по сдаче зачета"></textarea>
                </div>
                <div >
                    <h3>Перечень лицензионного программного обеспечения.</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."></textarea>
                </div>
                <div >
                    <h3>Реквизиты подтверждающего документа</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Реквизиты подтверждающего документа"></textarea>
                </div>
                <div >
                    <h3>Вопросы к зачету</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Вопросы к зачету"></textarea>
                </div>
                <div >
                    <h3>Критерии выставления оценки студенту на зачете</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Критерии выставления оценки студенту на зачете"></textarea>
                </div>
                <div >
                    <h3>Оценочные средства для текущей аттестации</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Оценочные средства для текущей аттестации"></textarea>
                </div>
                <div >
                    <h3>Вопросы для собеседования / устного опроса</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Вопросы для собеседования / устного опроса"></textarea>
                </div>
                <div >
                    <h3>Критерии оценивания</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Критерии оценивания"></textarea>
                </div>
                <div >
                    <h3>Тематика презентаций</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Тематика презентаций"></textarea>
                </div>
                <div >
                    <h3>Критерии оценки презентации</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Критерии оценки презентации"></textarea>
                </div>
                <div >
                    <h3>Тематика эссе</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Тематика эссе"></textarea>
                </div>
                <div >
                    <h3>Критерии оценки эссе</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Критерии оценки эссе"></textarea>
                </div>
                <div >
                    <h3>Тематика лабораторных работ</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Тематика лабораторных работ"></textarea>
                </div>
                <div >
                    <h3>Критерии оценки лабораторных работ</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Критерии оценки лабораторных работ"></textarea>
                </div>
                <div >
                    <h3>Тематика контрольно-расчетных работ</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Тематика контрольно-расчетных работ"></textarea>
                </div>
                <div >
                    <h3>Критерии оценки контрольно-расчетных работ</h3>

                    <textarea cols="140" rows="10" id="bigWind" placeholder="Критерии оценки контрольно-расчетных работ"></textarea>
                </div>
                <div >
                    <h3>Творческие задания</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Творческие задания"></textarea>
                </div>
                <div >
                    <h3>Критерии оценки творческого задания по построению геоморфологической карты</h3>
                    <textarea cols="140" rows="10" id="bigWind" placeholder="Критерии оценки творческого задания по построению геоморфологической карты"></textarea>
                </div>
                {{--                <h3>Устный опрос </h3>--}}
                {{--                <h3>Письменные работы</h3>--}}
            </div>
        </div>

    </body>
</body>
</html>
