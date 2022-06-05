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
    <script src="/js/jutsu.js"></script>
</head>
<header>
    <form method="POST", action="">
        @csrf
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><a name="refUpperHeader" href="/profile/">User: {{$user->name}}</a></li>
            <li name="leftPartLi"><button name="createBTN" type="submit">Create</button></li>
        </tr>
    </ul>
    <ul name="SecondUpperHeader">
        <tr>
{{--            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="Discipline"></li>--}}
{{--            <li name="SecondLeftPartLi"><input class="input2" type="text" placeholder="Department"></li>--}}
        </tr>
    </ul>
    </form>
</header>
<body>
<form name="gg" method="POST" action="{{route('check_page.post')}}">
    @csrf
    <ul name="UpperHeader">
        <tr>
            <li name="leftPartLi"><a name="refUpperHeader" href="/profile/">User: {{$user->name}}</a></li> {{--Хз стоит ли сюда вставлять кнопку--}}
            <li name="leftPartLi"><button value='edit' type="submit" name="EditFooterBTN" >Edit</button></li>
            <li name="rightPartLi">
                <div class="select" name="splash">
                    <select name = "chooseRpd">
                        @foreach($rpds as $rpd)
                            <option @if ($chooseSelect == $rpd->id) selected @endif  value="{{ $rpd->id }}">{{$rpd->discipline}}</option>
                        @endforeach
                        <input type="submit" name="EditFooterBTN" value="get">
                    </select>
                </div>
            </li>
        </tr>
    </ul>
    <ul name="SecondUpperHeader">
        {{--       <tr>--}}
        {{--            <li name="SecondLeftPartLi"><input @unlessrole('admin') readonly @endunlessrole value="" class="input2" type="text" placeholder="{{$rpds->firstWhere('id', '=', $i)->id}}"></li>--}}
        {{--        </tr>--}}
    </ul>


    <body>
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
                    Курс: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_course" @isset($time_for_RPD) value="{{$time_for_RPD->course}}" @endisset class="input3" type="text" placeholder="Курс">
                </h2>
            </div>
            <div >
                <h2>
                    Семестр: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_semester" @isset($time_for_RPD) value="{{$time_for_RPD->semester}}" @endisset class="input3" type="text" placeholder="Семестр">
                </h2>
            </div>
            <div >
                <h2>
                    Зачётные единицы: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_c_u" @isset($time_for_RPD) value="{{$time_for_RPD->c_u}}" @endisset class="input3" type="text" placeholder="Зачётные единицы">
                </h2>
            </div>
            <div >
                <h2>
                    Лекции: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_lectures" @isset($time_for_RPD) value="{{$time_for_RPD->lectures}}" @endisset class="input3" type="text" placeholder="Лекции">
                </h2>
            </div>
            <div >
                <h2>
                    Лабораторные: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_laboratory" @isset($time_for_RPD) value="{{$time_for_RPD->laboratory}}" @endisset class="input3" type="text" placeholder="Лабораторнын">
                </h2>
            </div>
            <div >
                <h2>
                    Лабораторные интер.: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_laboratory_inter" @isset($time_for_RPD) value="{{$time_for_RPD->laboratory_inter}}" @endisset class="input3" type="text" placeholder="Лабараторные интер">
                </h2>
            </div>
            <div >
                <h2>
                    Практика: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_practice" @isset($time_for_RPD) value="{{$time_for_RPD->practice}}" @endisset class="input3" type="text"  placeholder="Практика">
                </h2>
            </div>
            <div >
                <h2>
                    Практика интер.: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_practice_inter" @isset($time_for_RPD) value="{{$time_for_RPD->practice_inter}}" @endisset class="input3" type="text" placeholder="Практика интер">
                </h2>
            </div>
            <div >
                <h2>
                    КСП: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_KSP" @isset($time_for_RPD) value="{{$time_for_RPD->KSP}}" @endisset class="input3" type="text" placeholder="КСП">
                </h2>
            </div>
            <div >
                <h2>
                    ОК: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_OK" @isset($time_for_RPD) value="{{$time_for_RPD->OK}}" @endisset class="input3" type="text" placeholder="ОК">
                </h2>
            </div>
            <div >
                <h2>
                    СП: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_SP" @isset($time_for_RPD) value="{{$time_for_RPD->SP}}" @endisset class="input3" type="text" placeholder="СП">
                </h2>
            </div>
            <div >
                <h2>
                    Контроль: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_control" @isset($time_for_RPD) value="{{$time_for_RPD->control}}" @endisset class="input3" type="text" placeholder="Контроль">
                </h2>
            </div>
        </div>
    </div>

    <div id="total_akadem_hours" class="tabcontent">
        <h1>Общее время академических часов</h1>
        <div>
            <div >
                <h2>
                    Лабораторные интер.: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_experts" @isset($total_akadem_hours) value="{{$total_akadem_hours->experts}}" @endisset class="input3" type="text" placeholder="Эксперты">
                </h2>
            </div>
            <div >
                <h2>
                    Практика: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_to_plan" @isset($total_akadem_hours) value="{{$total_akadem_hours->to_plan}}" @endisset class="input3" type="text" placeholder="В плане">
                </h2>
            </div>
            <div >
                <h2>
                    Практика интер.: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_control_work" @isset($total_akadem_hours) value="{{$total_akadem_hours->control_work}}" @endisset class="input3" type="text" placeholder="Контрольные работы">
                </h2>
            </div>
            <div >
                <h2>
                    Самостоятельные работы: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_SR" @isset($total_akadem_hours) value="{{$total_akadem_hours->SR}}" @endisset class="input3" type="text" placeholder="Самостоятельные работы">
                </h2>
            </div>
            <div >
                <h2>
                    Контрольные: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_kontrol" @isset($total_akadem_hours) value="{{$total_akadem_hours->kontrol}}" @endisset class="input3" type="text" placeholder="Контрольные">
                </h2>
            </div>
            <div >
                <h2>
                    Часы интер.: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_inter_hour" @isset($total_akadem_hours) value="{{$total_akadem_hours->inter_hour}}" @endisset class="input3" type="text" placeholder="Часы интер.">
                </h2>
            </div>
            <div>
                <h2>
                    Пр. подготовки: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_pr_podgot" @isset($total_akadem_hours) value="{{$total_akadem_hours->pr_podgot}}" @endisset class="input3" type="text" placeholder="Пр. подготовки">
                </h2>
            </div>
        </div>
    </div>

    <div id="form_control" class="tabcontent">
        <h1>Форма контроля</h1>
        <div>
            <div >
                <h2>
                    Экзаминация: <input @unlessrole('admin') readonly @endunlessrole name="form_control_examination" @isset($form_control) value="{{$form_control->examination}}" @endisset class="input3" type="text" placeholder="Экзаминация">
                </h2>
            </div>
            <div >
                <h2>
                    Зачёт: <input @unlessrole('admin') readonly @endunlessrole name="form_control_zachet" @isset($form_control) value="{{$form_control->zachet}}" @endisset class="input3"  type="text" placeholder="Зачёт">
                </h2>
            </div>
            <div >
                <h2>
                    Зачёт с оценкой: <input @unlessrole('admin') readonly @endunlessrole name="form_control_zachet_with_grade" @isset($form_control) value="{{$form_control->zachet_with_grade}}" @endisset class="input3" type="text" placeholder="Зачёт с оценкой">
                </h2>
            </div>
            <div >
                <h2>
                    КП: <input @unlessrole('admin') readonly @endunlessrole name="form_control_KP" @isset($form_control) value="{{$form_control->KP}}" @endisset class="input3" type="text" placeholder="КП">
                </h2>
            </div>
            <div >
                <h2>
                    КР: <input @unlessrole('admin') readonly @endunlessrole name="form_control_KR" @isset($form_control) value="{{$form_control->KR}}" @endisset class="input3" type="text" placeholder="КР">
                </h2>
            </div>
            <div >
                <h2>
                    Контроль: <input @unlessrole('admin') readonly @endunlessrole name="form_control_control" @isset($form_control) value="{{$form_control->control}}" @endisset class="input3" type="text" placeholder="Контроль">
                </h2>
            </div>
            <div >
                <h2>
                    РГР: <input @unlessrole('admin') readonly @endunlessrole name="form_control_RGR" @isset($form_control) value="{{$form_control->RGR}}" @endisset class="input3" type="text" placeholder="РГР">
                </h2>
            </div>
        </div>
    </div>

    <div id="credit_units" class="tabcontent">
        <h1>Зачётные единицы</h1>
        <div>
            <div >
                <h3>Эксперты</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="credit_units_experts"  cols="80" rows="2" id="bigWind" placeholder="Эксперты">@isset($credit_units) {{$credit_units->experts}} @endisset </textarea>
            </div>
            <div >
                <h3>Факты</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="credit_units_fackts"  cols="80" rows="2" id="bigWind" placeholder="Факты">@isset($credit_units) {{$credit_units->fackts}} @endisset</textarea>
            </div>
            <div >
                <h3>Часов в зачётной единице</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="credit_units_hour_in_c_u"  cols="80" rows="2" id="bigWind" placeholder="Часов в зачётной единице">@isset($credit_units){{$credit_units->hour_in_c_u}} @endisset</textarea>
            </div>
            {{--                <div >--}}
            {{--                    <h2>--}}
            {{--                        Эксперты: <input @unlessrole('admin') readonly @endunlessrole class="input3" type="text" placeholder="Эксперты">--}}
            {{--                    </h2>--}}
            {{--                </div>--}}
            {{--                <div >--}}
            {{--                    <h2>--}}
            {{--                        Факты: <input @unlessrole('admin') readonly @endunlessrole class="input3" type="text" placeholder="Факты">--}}
            {{--                    </h2>--}}
            {{--                </div>--}}
            {{--                <div >--}}
            {{--                    <h2>--}}
            {{--                        Часов в зачётной единице: <input @unlessrole('admin') readonly @endunlessrole class="input3" type="text" placeholder="Часов в зачётной единице">--}}
            {{--                    </h2>--}}
            {{--                </div>--}}
        </div>
    </div>

    <div id="Departament" class="tabcontent">
        <h1>Департамент</h1>
        <div>
            <div >
                <h3>Аббревиатура</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="departament_abbreviathion"  cols="80" rows="1" id="bigWind" placeholder="Аббревиатура">@isset($departament){{$departament->abbreviathion}} @endisset</textarea>
            </div>
            <div >
                <h3>Титул</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="departament_title"  cols="80" rows="1" id="bigWind" placeholder="Титул">@isset($departament){{$departament->title}}@endisset</textarea>
            </div>
        </div>
    </div>
    <div id="competencies" class="tabcontent">

        <h1>Компетенции</h1>
        @isset($competencies)
            @role('admin')
            <input hidden name="countCompetenciese" id = "countC" value = "{{$competencies->count()}}">
            <input hidden name="countSubCompetenciese" id = "countSubC" value = "{{$sub_competencies->count()}}">
            <button type="button" name="AddBTN" onclick="return addField('comp', {{$competencies->count()}})">Добавить поле</button>
            @endrole
        @endisset
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
            <div class="competencies">
                <div>
                    @isset($competencies)
                        @foreach($competencies as $competencie)
                            <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_title{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Титул">{{$competencie->title}}</textarea>
                        @endforeach
                    @endisset
                </div>
                <div >
                    @isset($competencies)
                        @foreach($competencies as $competencie)
                            <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_type_competencies{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Тип компетенции">{{$competencie->type_competencies}}</textarea>
                        @endforeach
                    @endisset
                </div>
                <div >
                    @isset($competencies)
                        @foreach($competencies as $competencie)
                            <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_task{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Задача">{{$competencie->task}}</textarea>
                        @endforeach
                    @endisset
                </div>
                <div >
                    @isset($competencies)
                        @foreach($competencies as $competencie)
                            <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_source{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Источник">{{$competencie->source}}</textarea>
                        @endforeach
                    @endisset
                </div>
                <div >
                    @isset($competencies)
                        @foreach($competencies as $competencie)
                            <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_object{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Объект">{{$competencie->object}}</textarea>
                        @endforeach
                    @endisset
                </div>
                <div >
                    @isset($competencies)
                        @foreach($competencies as $competencie)
                            <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_type_group{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Тип">{{$competencie->type_group}}</textarea>
                        @endforeach
                    @endisset
                </div>
                @isset($competencies)
                    @foreach($competencies as $competencie)
                        @role('admin')
                        <button type="button" name="DeleteBTN" onclick="return deleteField(this, 'comp')">X</button>
                        @endrole
                    @endforeach
                @endisset
            </div>
        </div>
    </div>

    <div id="sub_competencies" class="tabcontent">
        <h1>Подкомпетенции</h1>
        @isset($sub_competencies)
            @role('admin')
            <button type="button" name="AddBTN" onclick="return addField('sub_comp', {{$sub_competencies->count()}})">Добавить поле</button>
            @endrole
        @endisset

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
                    @isset($sub_competencies)
                        @foreach($sub_competencies as $sub_competencie)
                            <div>
                                <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_title{{$loop->index}}" cols="100" rows="10" id="bigWind" placeholder="Титул">{{$sub_competencie->title}}</textarea>
                                <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_description{{$loop->index}}"  cols="100" rows="10" id="bigWind" placeholder="Описание">{{$sub_competencie->description}}</textarea>
                                <button type="button" name="DeleteBTN2" onclick="return deleteField(this, 'sub_comp')">X</button>
                            </div>
                        @endforeach
                    @endisset
                </div>
                {{--                        <div>--}}
                {{--                            @isset($sub_competencies)--}}
                {{--                                @foreach($sub_competencies as $sub_competencie)--}}
                {{--                                    <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_title" cols="100" rows="10" id="bigWind" placeholder="Титул">{{$sub_competencie->title}}</textarea>--}}
                {{--                                @endforeach--}}
                {{--                            @endisset--}}
                {{--                        </div>--}}
                {{--                        <div >--}}
                {{--                            @isset($sub_competencies)--}}
                {{--                                @foreach($sub_competencies as $sub_competencie)--}}
                {{--                                    <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_description"  cols="100" rows="10" id="bigWind" placeholder="Описание">{{$sub_competencie->description}}</textarea>--}}
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
                <textarea @unlessrole('admin') readonly @endunlessrole name="basic_information_purpose" cols="140" rows="10" id="bigWind" placeholder="Цели"> @isset($basic_information) {{$basic_information->purpose}} @endisset</textarea>
            </div>
            <div >
                <h3>Задачи: </h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="basic_information_task" cols="140" rows="10" id="bigWind" placeholder="Задачи">@isset($basic_information) {{$basic_information->task}} @endisset </textarea>
            </div>
        </div>
        <div>
            <h2>СТРУКТУРА И СОДЕРЖАНИЕ ТЕОРЕТИЧЕСКОЙ ЧАСТИ КУРСА</h2>
            {{--            theoretical_parts --}}
            <div >
                <h3>Лекционные занятия: </h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="theoretical_parts_lectures"  cols="140" rows="10" id="bigWind" placeholder="Лекционные занятия">@isset($theoretical_parts){{$theoretical_parts->lectures}} @endisset</textarea>
            </div>
        </div>
        <div>
            <h2>СТРУКТУРА И СОДЕРЖАНИЕ ПРАКТИЧЕСКОЙ ЧАСТИ КУРСА И САМОСТОЯТЕЛЬНОЙ РАБОТЫ </h2>
            {{--                practical_and_independent_parts--}}
            <div >
                <h3>Лабораторные работы </h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="practical_and_independent_parts_laboratory"  cols="140" rows="10" id="bigWind" placeholder="Лабораторные работы ">@isset($practical_and_independent_parts) {{$practical_and_independent_parts->laboratory}} @endisset</textarea>
            </div>
            <div >
                <h3>Материалы для выполнения лабораторных работ</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="practical_and_independent_parts_tasks_for_independent_work"  cols="140" rows="10" id="bigWind" placeholder="Материалы для выполнения лабораторных работ">@isset($practical_and_independent_parts) {{$practical_and_independent_parts->tasks_for_independent_work}} @endisset</textarea>
            </div>
        </div>
        <div>
            <h2>УЧЕБНО-МЕТОДИЧЕСКОЕ ОБЕСПЕЧЕНИЕ САМОСТОЯТЕЛЬНОЙ РАБОТЫ ОБУЧАЮЩИХСЯ</h2>
            {{--                educational_and_methodological_supports--}}
            <div >
                <h3>План-график выполнения самостоятельной работы по дисциплине</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_graph_for_independent_work"  cols="140" rows="10" id="bigWind" placeholder="План-график выполнения самостоятельной работы по дисциплине">@isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->graph_for_independent_work}} @endisset</textarea>
            </div>
            <div >
                <h3>Рекомендации по самостоятельной работе студентов</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_recomendation_for_independent_work"   cols="140" rows="10" id="bigWind" placeholder="Рекомендации по самостоятельной работе студентов">@isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->recomendation_for_independent_work}} @endisset</textarea>
            </div>
            <div >
                <h3>Методические рекомендации по выполнению заданий для самостоятельной работы и критерии оценки.</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_metodic_recomendation_for_independent_work"   cols="140" rows="10" id="bigWind" placeholder="Методические рекомендации по выполнению заданий для самостоятельной работы и критерии оценки. ">@isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->metodic_recomendation_for_independent_work}} @endisset</textarea>
            </div>
            <div >
                <h3>Методические рекомендации по написанию эссе</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_grade_for_independent_work"   cols="140" rows="10" id="bigWind" placeholder="Методические рекомендации по написанию эссе">@isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->grade_for_independent_work}}@endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценки.</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_metodic_recomendation_for_ecce" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки."> @isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->metodic_recomendation_for_ecce}} @endisset </textarea>
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

                <textarea @unlessrole('admin') readonly @endunlessrole name="list_of_literatures_list_literature" cols="140" rows="10" id="bigWind" placeholder="Основная литература">@isset($list_of_literatures) {{$list_of_literatures->list_literature}} @endisset </textarea>
            </div>
            <div >
                <h3>Дополнительная литература</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="list_of_literatures_more_literature" cols="140" rows="10" id="bigWind" placeholder="Дополнительная литература"> @isset($list_of_literatures) {{$list_of_literatures->more_literature}} @endisset</textarea>
            </div>
            <div >
                <h3>Перечень ресурсов информационно-телекоммуникационной сети
                    «Интернет»
                </h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="list_of_literatures_list_internet" cols="140" rows="10" id="bigWind" placeholder="Перечень ресурсов информационно-телекоммуникационной сети «Интернет»">@isset($list_of_literatures) {{$list_of_literatures->list_internet}} @endisset </textarea>
            </div>

        </div>
        <div>
            <h2>МЕТОДИЧЕСКИЕ УКАЗАНИЯ ПО ОСВОЕНИЮ ДИСЦИПЛИНЫ</h2>
            {{--                methodological_instructions--}}
            <div >
                <h3>Методические инструкции</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="methodological_instructions_metodic_instruction" cols="140" rows="10" id="bigWind" placeholder="Методические инструкции">@isset($methodological_instructions) {{$methodological_instructions->metodic_instruction}} @endisset </textarea>
            </div>
        </div>
        <div>
            <h2>МАТЕРИАЛЬНО-ТЕХНИЧЕСКОЕ ОБЕСПЕЧЕНИЕ ДИСЦИПЛИНЫ</h2>
            {{--                material_tex_productions--}}
            <div >
                <h3>Наименование специальных помещений и помещений для самостоятельной работы</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="material_tex_productions_place" cols="140" rows="10" id="bigWind" placeholder="Наименование специальных помещений и помещений для самостоятельной работы"> @isset($material_tex_productions) {{$material_tex_productions->place}} @endisset</textarea>
            </div>
            <div >
                <h3>Оснащенность специальных помещений и помещений для самостоятельной работы </h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="material_tex_productions_equipment"cols="140" rows="10" id="bigWind" placeholder="Оснащенность специальных помещений и помещений для самостоятельной работы"> @isset($material_tex_productions) {{$material_tex_productions->equipment}} @endisset </textarea>
            </div>
            <div >
                <h3>Перечень лицензионного программного обеспечения.</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="material_tex_productions_licensed_software" cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."> @isset($material_tex_productions) {{$material_tex_productions->licensed_software}} @endisset</textarea>
            </div>
            {{--                <div >--}}
            {{--                    <h3>Реквизиты подтверждающего документа</h3>--}}
            {{--                    <textarea @unlessrole('admin') readonly @endunlessrole name="material_tex_productions_" value="{{$material_tex_productions->}}" cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."></textarea>--}}
            {{--                </div>--}}
        </div>
    </div>

    <div id="valuation_funds" class="tabcontent">
        <div>
            <h2>ФОНДЫ ОЦЕНОЧНЫХ СРЕДСТВ</h2>
            {{--                valuation_funds--}}
            <div >
                <h3>Оценочные средства для промежуточной аттестации</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_evaluation_tools" cols="140" rows="10" id="bigWind" placeholder="Оценочные средства для промежуточной аттестации">@isset($valuation_funds){{$valuation_funds->evaluation_tools}}@endisset </textarea>
            </div>
            <div >
                <h3>Методические указания по сдаче зачета</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_general_information" cols="140" rows="10" id="bigWind" placeholder="Методические указания по сдаче зачета"> @isset($valuation_funds) {{$valuation_funds->general_information}} @endisset</textarea>
            </div>
            <div >
                <h3>Перечень лицензионного программного обеспечения.</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_general_evaluation_tools" cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."> @isset($valuation_funds) {{$valuation_funds->general_evaluation_tools}} @endisset</textarea>
            </div>
            <div >
                <h3>Реквизиты подтверждающего документа</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_methodological_instructions" cols="140" rows="10" id="bigWind" placeholder="Реквизиты подтверждающего документа"> @isset($valuation_funds){{$valuation_funds->methodological_instructions}} @endisset</textarea>
            </div>
            <div >
                <h3>Вопросы к зачету</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_questions_offset" cols="140" rows="10" id="bigWind" placeholder="Вопросы к зачету"> @isset($valuation_funds) {{$valuation_funds->questions_offset}}@endisset</textarea>
            </div>
            <div >
                <h3>Критерии выставления оценки студенту на зачете</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_questions_offset" cols="140" rows="10" id="bigWind" placeholder="Критерии выставления оценки студенту на зачете"> @isset($valuation_funds){{$valuation_funds->grade_questions_offset}} @endisset </textarea>
            </div>
            <div >
                <h3>Оценочные средства для текущей аттестации</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_oral_question" cols="140" rows="10" id="bigWind" placeholder="Оценочные средства для текущей аттестации"> @isset($valuation_funds) {{$valuation_funds->oral_question}} @endisset</textarea>
            </div>
            <div >
                <h3>Вопросы для собеседования / устного опроса</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_oral_question" cols="140" rows="10" id="bigWind" placeholder="Вопросы для собеседования / устного опроса"> @isset($valuation_funds) {{$valuation_funds->grade_oral_question}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценивания</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_presentation" cols="140" rows="10" id="bigWind" placeholder="Критерии оценивания"> @isset($valuation_funds){{$valuation_funds->presentation}} @endisset</textarea>
            </div>
            <div >
                <h3>Тематика презентаций</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_presentation" cols="140" rows="10" id="bigWind" placeholder="Тематика презентаций"> @isset($valuation_funds) {{$valuation_funds->grade_presentation}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценки презентации</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_ecce" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки презентации"> @isset($valuation_funds){{$valuation_funds->ecce}} @endisset</textarea>
            </div>
            <div >
                <h3>Тематика эссе</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_ecce" cols="140" rows="10" id="bigWind" placeholder="Тематика эссе"> @isset($valuation_funds){{$valuation_funds->grade_ecce}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценки эссе</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_laboratory" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки эссе"> @isset($valuation_funds) {{$valuation_funds->laboratory}} @endisset</textarea>
            </div>
            <div >
                <h3>Тематика лабораторных работ</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_laboratory" cols="140" rows="10" id="bigWind" placeholder="Тематика лабораторных работ"> @isset($valuation_funds){{$valuation_funds->grade_laboratory}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценки лабораторных работ</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_coontrol_word" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки лабораторных работ"> @isset($valuation_funds){{$valuation_funds->coontrol_word}} @endisset</textarea>
            </div>
            <div >
                <h3>Тематика контрольно-расчетных работ</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_control_work"  cols="140" rows="10" id="bigWind" placeholder="Тематика контрольно-расчетных работ">@isset($valuation_funds){{$valuation_funds->grade_control_work}} @endisset</textarea>
            </div>
            <div >
                <h3>Критерии оценки контрольно-расчетных работ</h3>

                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_creative_task" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки контрольно-расчетных работ"> @isset($valuation_funds){{$valuation_funds->creative_task}}@endisset</textarea>
            </div>
            <div >
                <h3>Творческие задания</h3>
                <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_creative_task" cols="140" rows="10" id="bigWind" placeholder="Творческие задания"> @isset($valuation_funds) {{$valuation_funds->grade_creative_task}} @endisset</textarea>
            </div>
            {{--                <div >--}}
            {{--                    <h3>Устный опрос</h3>--}}
            {{--                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_" value="{{$valuation_funds->}}" cols="140" rows="10" id="bigWind" placeholder="Устный опрос"></textarea>--}}
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
