<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>
    <link rel="stylesheet" href="/css/test_ui.css">
    <link rel="stylesheet" href="/css/flex_competencies.css">
    <link rel="stylesheet" href="/css/search_css.css">
    <script src="/js/jutsu.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Москва')">Москва</button>
    <button class="tablinks" onclick="openCity(event, 'Берлин')">Берлин</button>
    <button class="tablinks" onclick="openCity(event, 'Пекин')">Пекин</button>
    <button class="tablinks" onclick="openCity(event, 'Собака')">Собака</button>
</div>

<div id="Москва" class="tabcontent">
    <h3>Москва</h3>
    <p>Москва это столица России.</p>
    <h1>sub_competencies</h1>
    <button name="AddBTN" onclick="return addField('Moscow')">Добавить поле</button>

    <div id="parentId">
        <div class="competencies">
            <div>
                <h3>Титул</h3>
                @isset($sub_competencies)
                    @foreach($sub_competencies as $sub_competencie)
                        <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_title" cols="100" rows="10" id="bigWind" placeholder="Титул">{{$sub_competencie->title}}</textarea>
                    @endforeach
                @endisset
            </div>
            <div >
                <h3>Описание</h3>
                @isset($sub_competencies)
                    @foreach($sub_competencies as $sub_competencie)
                        <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_description"  cols="100" rows="10" id="bigWind" placeholder="Описание">{{$sub_competencie->description}}</textarea>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
{{--        <div class="competencies">--}}
{{--            <div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <input class="s" type="submit" value="GO!" />--}}
{{--    <a onclick="return addField('Moscow')" href="#">Добавить поле</a>--}}
</div>

<div id="Берлин" class="tabcontent">
    <h3>Берлин</h3>
    <input type="email">
    <p>Берлин это столица Германии.</p>
    <button name="AddBTN" onclick="return addField('Berlin')">Добавить поле</button>
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
        <div class="competencies" >
            <div>
                @isset($competencies)
                    @foreach($competencies as $competencie)
                        <textarea class="text_area_noresize" name="competencies_title{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Титул">{{$competencie->title}}</textarea>
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
                <button name="DeleteBTN" onclick="return deleteField(this)">Удалить поле</button>
            @endisset
{{--            <button name="EditBTN" onclick="return deleteField(this)">Удалить поле</button>--}}
{{--            <a onclick="return deleteField(this)" href="#">[X]</a>--}}
        </div>
    </div>
    <input class="s" type="submit" value="GO!" />
    <a onclick="return addField('Berlin')" href="#">Добавить поле</a>
</div>

<div id="Пекин" class="tabcontent">
    <h3>Пекин</h3>
    <p>Пекин это столица Китая.</p>

{{--    <select>--}}
{{--        <input list="uu">--}}
{{--        <option value="asd"></option>--}}
{{--        <option value="ghj"></option>--}}
{{--        <option value="ooo"></option>--}}
{{--    </select>--}}

{{--    <select class="js-example-basic-single">--}}
{{--        <option>Иван</option>--}}
{{--        <option>Андрей</option>--}}
{{--    </select>--}}
{{--    <input list="my-list">--}}
{{--    <datalist id="my-list">--}}
{{--        <option value="Абакан">--}}
{{--        <option value="Азов">--}}
{{--        <option value="Александров">--}}
{{--        <option value="Алексин">--}}
{{--        <option value="Альметьевск">--}}
{{--        <option value="Братск">--}}
{{--        <option value="Брянск">--}}
{{--        <option value="Бугульма">--}}
{{--        <option value="Буденновск">--}}
{{--        <option value="Бузулук">--}}
{{--        <option value="Магадан">--}}
{{--        <option value="Магнитогорск">--}}
{{--        <option value="Майкоп">--}}
{{--        <option value="Махачкала">--}}
{{--        <option value="Междуреченск">--}}
{{--        <option value="Абакан">--}}
{{--        <option value="Азов">--}}
{{--        <option value="Александров">--}}
{{--        <option value="Алексин">--}}
{{--        <option value="Альметьевск">--}}
{{--        <option value="Братск">--}}
{{--        <option value="Брянск">--}}
{{--        <option value="Бугульма">--}}
{{--        <option value="Буденновск">--}}
{{--        <option value="Бузулук">--}}
{{--        <option value="Магадан">--}}
{{--        <option value="Магнитогорск">--}}
{{--        <option value="Майкоп">--}}
{{--        <option value="Махачкала">--}}
{{--        <option value="Междуреченск">--}}
{{--        <option value="Абакан">--}}
{{--        <option value="Азов">--}}
{{--        <option value="Александров">--}}
{{--        <option value="Алексин">--}}
{{--        <option value="Альметьевск">--}}
{{--        <option value="Братск">--}}
{{--        <option value="Брянск">--}}
{{--        <option value="Бугульма">--}}
{{--        <option value="Буденновск">--}}
{{--        <option value="Бузулук">--}}
{{--        <option value="Магадан">--}}
{{--        <option value="Магнитогорск">--}}
{{--        <option value="Майкоп">--}}
{{--        <option value="Махачкала">--}}
{{--        <option value="Междуреченск">--}}
{{--    </datalist>--}}


{{--    <form action="http://" name="f">--}}
{{--        <select name="name_ob">--}}
{{--            <option value="214">Nissan</option>--}}
{{--            <option value="215">Toyota</option>--}}
{{--            <option value="40">Новооскольский филиал</option>--}}
{{--            <option value="42">НоваяФирма</option>--}}
{{--            <option value="92">Агрохолдинг какой-то</option>--}}
{{--                    <option value="asd">Hello</option>--}}
{{--                    <option value="ghj">My</option>--}}
{{--                    <option value="ooo">Name</option>--}}
{{--            <option value="93">Агрохолдинг другой</option>--}}
{{--            <option><input type="text" name="opt"></option>--}}
{{--        </select>--}}
{{--    </form>--}}
        <select id="mySelect">
            <option value="JS" selected="selected">JavaScript</option>
            <option value="Java">Java</option>
            <option value="C#">C#</option>
            <option value="C++">C++</option>
        </select>
        <input type="text" id="search" name="search_field" placeholder="поиск" onclick="select_Finder()">
    <button type="button" id="gg" onclick="select_Finder()">push</button>
</div>
{{--<script>--}}
{{--    var f = document.forms["f"],--}}
{{--    s = f["name_ob"], o = s.querySelectorAll("option"),--}}
{{--    inp = f["opt"],--}}
{{--    reg;--}}
{{--    inp.oninput = function() {--}}
{{--        reg = new RegExp(this.value, "ig");  //если искать только в начале  "^" + this.value, "ig"--}}
{{--        s.options.length = 0;--}}
{{--        for (var i=0; i<o.length; i++)  {--}}
{{--            reg.test(o[i].text) && s.options.add(o[i]);--}}
{{--            reg.lastIndex = 0;--}}
{{--        }--}}
{{--    };--}}
{{--</script>--}}
</body>
</html>





