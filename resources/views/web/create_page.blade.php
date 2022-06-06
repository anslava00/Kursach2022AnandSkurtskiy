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
<form name="gg" method="POST" action="{{route('create_page.post')}}">
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
                <form method="POST" action="" enctype="multipart/form-data">\
                    @csrf
                    <input type="file" name="image">
                    <button type="submit" >Отправить</button>
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

    <div id="time_for_RPD" class="tabcontent">
        <h1>Время для РПД</h1>
        <div >
            <div>
                <h2>
                    Курс: <input name="time_for_RPD_course" class="input3" type="text" placeholder="Курс">
                </h2>
            </div>
            <div >
                <h2>
                    Семестр: <input name="time_for_RPD_semester" class="input3" type="text" placeholder="Семестр">
                </h2>
            </div>
            <div >
                <h2>
                    Зачётные единицы: <input name="time_for_RPD_c_u" class="input3" type="text" placeholder="Зачётные единицы">
                </h2>
            </div>
            <div >
                <h2>
                    Лекции: <input name="time_for_RPD_lectures" class="input3" type="text" placeholder="Лекции">
                </h2>
            </div>
            <div >
                <h2>
                    Лабораторные: <input name="time_for_RPD_laboratory" class="input3" type="text" placeholder="Лабораторнын">
                </h2>
            </div>
            <div >
                <h2>
                    Лабораторные интер.: <input name="time_for_RPD_laboratory_inter" class="input3" type="text" placeholder="Лабараторные интер">
                </h2>
            </div>
            <div >
                <h2>
                    Практика: <input name="time_for_RPD_practice" class="input3" type="text"  placeholder="Практика">
                </h2>
            </div>
            <div >
                <h2>
                    Практика интер.: <input name="time_for_RPD_practice_inter" class="input3" type="text" placeholder="Практика интер">
                </h2>
            </div>
            <div >
                <h2>
                    КСП: <input name="time_for_RPD_KSP" class="input3" type="text" placeholder="КСП">
                </h2>
            </div>
            <div >
                <h2>
                    ОК: <input name="time_for_RPD_OK" class="input3" type="text" placeholder="ОК">
                </h2>
            </div>
            <div >
                <h2>
                    СП: <input name="time_for_RPD_SP" class="input3" type="text" placeholder="СП">
                </h2>
            </div>
            <div >
                <h2>
                    Контроль: <input name="time_for_RPD_control" class="input3" type="text" placeholder="Контроль">
                </h2>
            </div>
        </div>
    </div>

    <div id="total_akadem_hours" class="tabcontent">
        <h1>Общее время академических часов</h1>
        <div>
            <div >
                <h2>
                    Лабораторные интер.: <input name="total_akadem_hours_experts" class="input3" type="text" placeholder="Эксперты">
                </h2>
            </div>
            <div >
                <h2>
                    Практика: <input name="total_akadem_hours_to_plan" class="input3" type="text" placeholder="В плане">
                </h2>
            </div>
            <div >
                <h2>
                    Практика интер.: <input name="total_akadem_hours_control_work" class="input3" type="text" placeholder="Контрольные работы">
                </h2>
            </div>
            <div >
                <h2>
                    Самостоятельные работы: <input name="total_akadem_hours_SR" class="input3" type="text" placeholder="Самостоятельные работы">
                </h2>
            </div>
            <div >
                <h2>
                    Контрольные: <input name="total_akadem_hours_kontrol" class="input3" type="text" placeholder="Контрольные">
                </h2>
            </div>
            <div >
                <h2>
                    Часы интер.: <input name="total_akadem_hours_inter_hour" class="input3" type="text" placeholder="Часы интер.">
                </h2>
            </div>
            <div>
                <h2>
                    Пр. подготовки: <input name="total_akadem_hours_pr_podgot" class="input3" type="text" placeholder="Пр. подготовки">
                </h2>
            </div>
        </div>
    </div>

    <div id="form_control" class="tabcontent">
        <h1>Форма контроля</h1>
        <div>
            <div >
                <h2>
                    Экзаминация: <input name="form_control_examination" class="input3" type="text" placeholder="Экзаминация">
                </h2>
            </div>
            <div >
                <h2>
                    Зачёт: <input name="form_control_zachet" class="input3"  type="text" placeholder="Зачёт">
                </h2>
            </div>
            <div >
                <h2>
                    Зачёт с оценкой: <input name="form_control_zachet_with_grade" class="input3" type="text" placeholder="Зачёт с оценкой">
                </h2>
            </div>
            <div >
                <h2>
                    КП: <input name="form_control_KP" class="input3" type="text" placeholder="КП">
                </h2>
            </div>
            <div >
                <h2>
                    КР: <input name="form_control_KR" class="input3" type="text" placeholder="КР">
                </h2>
            </div>
            <div >
                <h2>
                    Контроль: <input name="form_control_control" class="input3" type="text" placeholder="Контроль">
                </h2>
            </div>
            <div >
                <h2>
                    РГР: <input name="form_control_RGR" class="input3" type="text" placeholder="РГР">
                </h2>
            </div>
        </div>
    </div>

    <div id="credit_units" class="tabcontent">
        <h1>Зачётные единицы</h1>
        <div>
            <div >
                <h3>Эксперты</h3>

                <textarea name="credit_units_experts"  cols="80" rows="2" id="bigWind" placeholder="Эксперты"></textarea>
            </div>
            <div >
                <h3>Факты</h3>

                <textarea name="credit_units_fackts"  cols="80" rows="2" id="bigWind" placeholder="Факты"></textarea>
            </div>
            <div >
                <h3>Часов в зачётной единице</h3>

                <textarea name="credit_units_hour_in_c_u"  cols="80" rows="2" id="bigWind" placeholder="Часов в зачётной единице"></textarea>
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
        <h1>Департамент</h1>
        <div>
            <div >
                <h3>Аббревиатура</h3>

                <textarea name="departament_abbreviathion"  cols="80" rows="1" id="bigWind" placeholder="Аббревиатура"></textarea>
            </div>
            <div >
                <h3>Титул</h3>

                <textarea name="departament_title"  cols="80" rows="1" id="bigWind" placeholder="Титул"></textarea>
            </div>
        </div>
    </div>
    <div id="competencies" class="tabcontent">

        <h1>Компетенции</h1>
{{--        @isset($competencies)--}}
{{--            <input hidden name="countCompetenciese" id = "countC" value = "{{$competencies->count()}}">--}}
{{--            <input hidden name="countSubCompetenciese" id = "countSubC" value = "{{$sub_competencies->count()}}">--}}
{{--        @endisset--}}
        <button type="button" name="AddBTN" onclick="return addField('comp', 1)">Добавить поле</button>

        <div class="competencies_titles">
            <div class="comp_item">
                <h3>Титул</h3>
            </div>
            <div class="comp_item">
                <h3>Тип компетенции</h3>
            </div>
            <div class="comp_item">
                <h3>Задача</h3>
            </div>
            <div class="comp_item">
                <h3>Источник</h3>
            </div>
            <div class="comp_item">
                <h3>Объект</h3>
            </div>
            <div class="comp_item">
                <h3>Тип</h3>
            </div>
        </div>
        <div id="parentId2">
{{--            <div class="competencies">--}}
{{--                <div>--}}
{{--                    <textarea class="text_area_noresize" name="competencies_title"  cols="30" rows="10" id="bigWind" placeholder="Титул"></textarea>--}}
{{--                </div>--}}
{{--                <div >--}}
{{--                    <textarea class="text_area_noresize" name="competencies_type_competencies"  cols="30" rows="10" id="bigWind" placeholder="Тип компетенции"></textarea>--}}
{{--                </div>--}}
{{--                <div >--}}
{{--                            <textarea class="text_area_noresize" name="competencies_task"  cols="30" rows="10" id="bigWind" placeholder="Задача"></textarea>--}}
{{--                </div>--}}
{{--                <div >--}}
{{--                    <textarea class="text_area_noresize" name="competencies_source"  cols="30" rows="10" id="bigWind" placeholder="Источник"></textarea>--}}
{{--                </div>--}}
{{--                <div >--}}
{{--                    <textarea class="text_area_noresize" name="competencies_object"  cols="30" rows="10" id="bigWind" placeholder="Объект"></textarea>--}}
{{--                </div>--}}
{{--                <div >--}}
{{--                    <textarea class="text_area_noresize" name="competencies_type_group"  cols="30" rows="10" id="bigWind" placeholder="Тип"></textarea>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    <div id="sub_competencies" class="tabcontent">
        <h1>Подкомпетенции</h1>
{{--        @isset($sub_competencies)--}}
            <button type="button" name="AddBTN" onclick="return addField('sub_comp', 1)">Добавить поле</button>
{{--        @endisset--}}

        <div class="competencies_titles">
            <div class="comp_item">
                <h3>Титул</h3>
            </div>
            <div class="comp_item">
                <h3>Описание</h3>
            </div>
        </div>
        <div id="parentId">

            <div class="competencies">
                <div>
{{--                    @isset($sub_competencies)--}}
{{--                        @foreach($sub_competencies as $sub_competencie)--}}
{{--                            <div>--}}
{{--                                <textarea class="text_area_noresize" name="sub_competencies_title{{$loop->index}}" cols="100" rows="10" id="bigWind" placeholder="Титул">{{$sub_competencie->title}}</textarea>--}}
{{--                                <textarea class="text_area_noresize" name="sub_competencies_description{{$loop->index}}"  cols="100" rows="10" id="bigWind" placeholder="Описание">{{$sub_competencie->description}}</textarea>--}}
{{--                                <button type="button" name="DeleteBTN2" onclick="return deleteField(this, 'sub_comp')">X</button>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    @endisset--}}
                </div>
                {{--                        <div>--}}
                {{--                            @isset($sub_competencies)--}}
                {{--                                @foreach($sub_competencies as $sub_competencie)--}}
                {{--                                    <textarea class="text_area_noresize" name="sub_competencies_title" cols="100" rows="10" id="bigWind" placeholder="Титул">{{$sub_competencie->title}}</textarea>--}}
                {{--                                @endforeach--}}
                {{--                            @endisset--}}
                {{--                        </div>--}}
                {{--                        <div >--}}
                {{--                            @isset($sub_competencies)--}}
                {{--                                @foreach($sub_competencies as $sub_competencie)--}}
                {{--                                    <textarea class="text_area_noresize" name="sub_competencies_description"  cols="100" rows="10" id="bigWind" placeholder="Описание">{{$sub_competencie->description}}</textarea>--}}
                {{--                                @endforeach--}}
                {{--                            @endisset--}}
                {{--                        </div>--}}
                {{--                        @isset($competencies)--}}
                {{--                            @foreach($sub_competencies as $sub_competencie)--}}
                {{--                                @role('admin')--}}
                {{--                                <button type="button" name="DeleteBTN" onclick="return deleteField(this)">X</button>--}}
                {{--                                @endrole--}}
                {{--                            @endforeach--}}
                {{--                        @endisset--}}

            </div>
        </div>
    </div>

    <div id="basic_information" class="tabcontent">
        <h1>Базовая информация</h1>
        <div>
            {{--                basic_information--}}
            <div >
                <h3>Цели: </h3>
                <textarea name="basic_information_purpose" cols="140" rows="10" id="bigWind" placeholder="Цели"></textarea>
            </div>
            <div >
                <h3>Задачи: </h3>
                <textarea name="basic_information_task" cols="140" rows="10" id="bigWind" placeholder="Задачи"> </textarea>
            </div>
        </div>
        <div>
            <h2>СТРУКТУРА И СОДЕРЖАНИЕ ТЕОРЕТИЧЕСКОЙ ЧАСТИ КУРСА</h2>
            {{--            theoretical_parts --}}
            <div >
                <h3>Лекционные занятия: </h3>
                <textarea name="theoretical_parts_lectures"  cols="140" rows="10" id="bigWind" placeholder="Лекционные занятия"></textarea>
            </div>
        </div>
        <div>
            <h2>СТРУКТУРА И СОДЕРЖАНИЕ ПРАКТИЧЕСКОЙ ЧАСТИ КУРСА И САМОСТОЯТЕЛЬНОЙ РАБОТЫ </h2>
            {{--                practical_and_independent_parts--}}
            <div >
                <h3>Лабораторные работы </h3>
                <textarea name="practical_and_independent_parts_laboratory"  cols="140" rows="10" id="bigWind" placeholder="Лабораторные работы "></textarea>
            </div>
            <div >
                <h3>Материалы для выполнения лабораторных работ</h3>
                <textarea name="practical_and_independent_parts_tasks_for_independent_work"  cols="140" rows="10" id="bigWind" placeholder="Материалы для выполнения лабораторных работ"></textarea>
            </div>
        </div>
        <div>
            <h2>УЧЕБНО-МЕТОДИЧЕСКОЕ ОБЕСПЕЧЕНИЕ САМОСТОЯТЕЛЬНОЙ РАБОТЫ ОБУЧАЮЩИХСЯ</h2>
            {{--                educational_and_methodological_supports--}}
            <div >
                <h3>План-график выполнения самостоятельной работы по дисциплине</h3>
                <textarea name="educational_and_methodological_supports_graph_for_independent_work"  cols="140" rows="10" id="bigWind" placeholder="План-график выполнения самостоятельной работы по дисциплине"></textarea>
            </div>
            <div >
                <h3>Рекомендации по самостоятельной работе студентов</h3>
                <textarea name="educational_and_methodological_supports_recomendation_for_independent_work"   cols="140" rows="10" id="bigWind" placeholder="Рекомендации по самостоятельной работе студентов"></textarea>
            </div>
            <div >
                <h3>Методические рекомендации по выполнению заданий для самостоятельной работы и критерии оценки.</h3>
                <textarea name="educational_and_methodological_supports_metodic_recomendation_for_independent_work"   cols="140" rows="10" id="bigWind" placeholder="Методические рекомендации по выполнению заданий для самостоятельной работы и критерии оценки. "></textarea>
            </div>
            <div >
                <h3>Методические рекомендации по написанию эссе</h3>
                <textarea name="educational_and_methodological_supports_grade_for_independent_work"   cols="140" rows="10" id="bigWind" placeholder="Методические рекомендации по написанию эссе"></textarea>
            </div>
            <div >
                <h3>Критерии оценки.</h3>
                <textarea name="educational_and_methodological_supports_metodic_recomendation_for_ecce" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки."></textarea>
            </div>
        </div>
        <div>
            <h2>КОНТРОЛЬ ДОСТИЖЕНИЯ ЦЕЛЕЙ КУРСА</h2>
            <h3></h3>
        </div>
        <div>
            <h2>СПИСОК УЧЕБНОЙ ЛИТЕРАТУРЫ И ИНФОРМАЦИОННО-МЕТОДИЧЕСКОЕ ОБЕСПЕЧЕНИЕ ДИСЦИПЛИНЫ</h2>
            {{--                list_of_literatures--}}
            <div >
                <h3>Основная литература</h3>

                <textarea name="list_of_literatures_list_literature" cols="140" rows="10" id="bigWind" placeholder="Основная литература"></textarea>
            </div>
            <div >
                <h3>Дополнительная литература</h3>
                <textarea name="list_of_literatures_more_literature" cols="140" rows="10" id="bigWind" placeholder="Дополнительная литература"></textarea>
            </div>
            <div >
                <h3>Перечень ресурсов информационно-телекоммуникационной сети
                    «Интернет»
                </h3>
                <textarea name="list_of_literatures_list_internet" cols="140" rows="10" id="bigWind" placeholder="Перечень ресурсов информационно-телекоммуникационной сети «Интернет»"></textarea>
            </div>

        </div>
        <div>
            <h2>МЕТОДИЧЕСКИЕ УКАЗАНИЯ ПО ОСВОЕНИЮ ДИСЦИПЛИНЫ</h2>
            {{--                methodological_instructions--}}
            <div >
                <h3>Методические инструкции</h3>

                <textarea name="methodological_instructions_metodic_instruction" cols="140" rows="10" id="bigWind" placeholder="Методические инструкции"></textarea>
            </div>
        </div>
        <div>
            <h2>МАТЕРИАЛЬНО-ТЕХНИЧЕСКОЕ ОБЕСПЕЧЕНИЕ ДИСЦИПЛИНЫ</h2>
            {{--                material_tex_productions--}}
            <div >
                <h3>Наименование специальных помещений и помещений для самостоятельной работы</h3>
                <textarea name="material_tex_productions_place" cols="140" rows="10" id="bigWind" placeholder="Наименование специальных помещений и помещений для самостоятельной работы"> </textarea>
            </div>
            <div >
                <h3>Оснащенность специальных помещений и помещений для самостоятельной работы </h3>
                <textarea name="material_tex_productions_equipment"cols="140" rows="10" id="bigWind" placeholder="Оснащенность специальных помещений и помещений для самостоятельной работы"></textarea>
            </div>
            <div >
                <h3>Перечень лицензионного программного обеспечения.</h3>
                <textarea name="material_tex_productions_licensed_software" cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."></textarea>
            </div>
            {{--                <div >--}}
            {{--                    <h3>Реквизиты подтверждающего документа</h3>--}}
            {{--                    <textarea name="material_tex_productions_" value="{{$material_tex_productions->}}" cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."></textarea>--}}
            {{--                </div>--}}
        </div>
    </div>

    <div id="valuation_funds" class="tabcontent">
        <div>
            <h2>ФОНДЫ ОЦЕНОЧНЫХ СРЕДСТВ</h2>
            {{--                valuation_funds--}}
            <div >
                <h3>Оценочные средства для промежуточной аттестации</h3>

                <textarea name="valuation_funds_evaluation_tools" cols="140" rows="10" id="bigWind" placeholder="Оценочные средства для промежуточной аттестации">@isset($valuation_funds){{$valuation_funds->evaluation_tools}}@endisset </textarea>
            </div>
            <div >
                <h3>Методические указания по сдаче зачета</h3>
                <textarea name="valuation_funds_general_information" cols="140" rows="10" id="bigWind" placeholder="Методические указания по сдаче зачета"> @isset($valuation_funds) {{$valuation_funds->general_information}} @endisset</textarea>
            </div>
            <div >
                <h3>Перечень лицензионного программного обеспечения.</h3>
                <textarea name="valuation_funds_general_evaluation_tools" cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."> @isset($valuation_funds) {{$valuation_funds->general_evaluation_tools}} @endisset</textarea>
            </div>
            <div >
                <h3>Реквизиты подтверждающего документа</h3>
                <textarea name="valuation_funds_methodological_instructions" cols="140" rows="10" id="bigWind" placeholder="Реквизиты подтверждающего документа"> @isset($valuation_funds){{$valuation_funds->methodological_instructions}} @endisset</textarea>
            </div>
            <div >
                <h3>Вопросы к зачету</h3>

                <textarea name="valuation_funds_questions_offset" cols="140" rows="10" id="bigWind" placeholder="Вопросы к зачету"> @isset($valuation_funds) {{$valuation_funds->questions_offset}}@endisset</textarea>
            </div>
            <div >
                <h3>Критерии выставления оценки студенту на зачете</h3>

                <textarea name="valuation_funds_grade_questions_offset" cols="140" rows="10" id="bigWind" placeholder="Критерии выставления оценки студенту на зачете"> @isset($valuation_funds){{$valuation_funds->grade_questions_offset}} @endisset </textarea>
            </div>
            <div >
                <h3>Оценочные средства для текущей аттестации</h3>

                <textarea name="valuation_funds_oral_question" cols="140" rows="10" id="bigWind" placeholder="Оценочные средства для текущей аттестации"> @isset($valuation_funds) {{$valuation_funds->oral_question}} @endisset</textarea>
            </div>
            <div >
                <h3>Вопросы для собеседования / устного опроса</h3>

                <textarea name="valuation_funds_grade_oral_question" cols="140" rows="10" id="bigWind" placeholder="Вопросы для собеседования / устного опроса"> @isset($valuation_funds) {{$valuation_funds->grade_oral_question}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценивания</h3>
                <textarea name="valuation_funds_presentation" cols="140" rows="10" id="bigWind" placeholder="Критерии оценивания"> @isset($valuation_funds){{$valuation_funds->presentation}} @endisset</textarea>
            </div>
            <div >
                <h3>Тематика презентаций</h3>
                <textarea name="valuation_funds_grade_presentation" cols="140" rows="10" id="bigWind" placeholder="Тематика презентаций"> @isset($valuation_funds) {{$valuation_funds->grade_presentation}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценки презентации</h3>
                <textarea name="valuation_funds_ecce" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки презентации"> @isset($valuation_funds){{$valuation_funds->ecce}} @endisset</textarea>
            </div>
            <div >
                <h3>Тематика эссе</h3>

                <textarea name="valuation_funds_grade_ecce" cols="140" rows="10" id="bigWind" placeholder="Тематика эссе"> @isset($valuation_funds){{$valuation_funds->grade_ecce}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценки эссе</h3>

                <textarea name="valuation_funds_laboratory" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки эссе"> @isset($valuation_funds) {{$valuation_funds->laboratory}} @endisset</textarea>
            </div>
            <div >
                <h3>Тематика лабораторных работ</h3>

                <textarea name="valuation_funds_grade_laboratory" cols="140" rows="10" id="bigWind" placeholder="Тематика лабораторных работ"> @isset($valuation_funds){{$valuation_funds->grade_laboratory}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценки лабораторных работ</h3>

                <textarea name="valuation_funds_coontrol_word" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки лабораторных работ"> @isset($valuation_funds){{$valuation_funds->coontrol_word}} @endisset</textarea>
            </div>
            <div >
                <h3>Тематика контрольно-расчетных работ</h3>
                <textarea name="valuation_funds_grade_control_work"  cols="140" rows="10" id="bigWind" placeholder="Тематика контрольно-расчетных работ">@isset($valuation_funds){{$valuation_funds->grade_control_work}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценки контрольно-расчетных работ</h3>

                <textarea name="valuation_funds_creative_task" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки контрольно-расчетных работ"> @isset($valuation_funds){{$valuation_funds->creative_task}}@endisset</textarea>
            </div>
            <div >
                <h3>Творческие задания</h3>
                <textarea name="valuation_funds_grade_creative_task" cols="140" rows="10" id="bigWind" placeholder="Творческие задания"> @isset($valuation_funds) {{$valuation_funds->grade_creative_task}} @endisset</textarea>
            </div>
            {{--                <div >--}}
            {{--                    <h3>Устный опрос</h3>--}}
            {{--                    <textarea name="valuation_funds_" value="{{$valuation_funds->}}" cols="140" rows="10" id="bigWind" placeholder="Устный опрос"></textarea>--}}
            {{--                </div>--}}
            {{--                <h3>Устный опрос </h3>--}}
            {{--                <h3>Письменные работы</h3>--}}
        </div>
    </div>

    </body>
</form>
</body>
</body>
</html>
