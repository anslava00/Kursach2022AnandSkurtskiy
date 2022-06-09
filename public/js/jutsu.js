function openCity(evt, cityName)
{
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


var countOfFields = 1; // Текущее число полей
var countOfSubFields = 1; // Текущее число полей
var curFieldNameId = 1; // Уникальное значение для атрибута name
var curFieldSubNameId = 1; // Уникальное значение для атрибута name
var maxFieldLimit = 100; // Максимальное число возможных полей
function deleteField(a, menuNamme)
{
    // Получаем доступ к ДИВу, содержащему поле
    var contDiv = a.parentNode;
    // Удаляем этот ДИВ из DOM-дерева
    contDiv.parentNode.removeChild(contDiv);
    // Уменьшаем значение текущего числа полей
    if (menuName == 'sub_comp')
    {
        countOfSubFields--;
    }
    else if (menuName == 'comp')
    {
        countOfFields--;
    }
    // Возвращаем false, чтобы не было перехода по сслыке
    return false;
}
function addField(menuName, FieldID = null)
{
    // Проверяем, не достигло ли число полей максимума
    if (countOfFields >= maxFieldLimit) {
        alert("Число полей достигло своего максимума = " + maxFieldLimit);
        return false;
    }
    var div = document.createElement("div");
    if (menuName == 'sub_comp')
    {
        countOfSubFields++;
        curFieldSubNameId++;
        // document.getElementById("countSubC").value = FieldID + countOfSubFields - 1;
        if (FieldID != null)
        {
            div.innerHTML = '<div class="competencies"><div><textarea class="text_area_noresize" name="sub_competencies_title' + (FieldID + curFieldSubNameId - 1) + '" cols="100" rows="10" id="bigWind" placeholder="Титул"></textarea></div>' +
                '<div><textarea class="text_area_noresize" name="sub_competencies_description' + (FieldID + curFieldSubNameId - 1) + '" cols="100" rows="10" id="bigWind" placeholder="Титул"></textarea></div>' +
                '<button name="DeleteBTN" onclick="return deleteField(this)">X</button></div>';
            document.getElementById("parentId").appendChild(div);
        }
    }
    else if (menuName == 'comp')
    {
        curFieldNameId++;
        countOfFields++;
        // document.getElementById("countC").value = FieldID + countOfFields - 1;
        if (FieldID != null)
        {
        div.innerHTML = '<div class="competencies"><textarea class="text_area_noresize" name="competencies_title' + (FieldID + curFieldNameId - 1)+ '"  cols="30" rows="10" id="bigWind" placeholder="Титул"></textarea>' +
            '<textarea class="text_area_noresize" name="competencies_type_competencies' + (FieldID + curFieldNameId - 1)+ '"  cols="30" rows="10" id="bigWind" placeholder="Тип компетенции"></textarea>' +
            '<textarea class="text_area_noresize" name="competencies_task' + (FieldID + curFieldNameId - 1) + '"  cols="30" rows="10" id="bigWind" placeholder="Задача"></textarea>' +
            '<textarea class="text_area_noresize" name="competencies_source' + (FieldID + curFieldNameId - 1) + '"  cols="30" rows="10" id="bigWind" placeholder="Источник"></textarea>' +
            '<textarea class="text_area_noresize" name="competencies_object' + (FieldID + curFieldNameId - 1) + '"  cols="30" rows="10" id="bigWind" placeholder="Объект"></textarea>' +
            '<textarea class="text_area_noresize" name="competencies_type_group' + (FieldID + curFieldNameId - 1) + '"  cols="30" rows="10" id="bigWind" placeholder="Тип"></textarea>' +
            '<button name="DeleteBTN" onclick="return deleteField(this)">X</button></div>';
        document.getElementById("parentId2").appendChild(div);
        }
    }
    // Возвращаем false, чтобы не было перехода по сслыке
    return false;
}

function change_input_width(inp)
{
    inp.onclick = function ()
    {
        // compStyle.width = 200 + 'px';
        inp.style.width = 200 + 'px';
    }
    inp.onblur = function ()
    {
        // compStyle.width = 70 + 'px';
        inp.style.width = 70 + 'px';
    }


}

function select_Finder()
{
    var sel = document.getElementById('discipline_selector'),
        opt = sel.querySelectorAll("option"),
        inp = document.getElementById('search'),
        reg;
    inp.style.width = 200 + 'px';
    change_input_width(inp);
    inp.oninput = function()
    {
        reg = new RegExp(this.value, "ig");
        sel.options.length = 0;
        for (var i = 0; i < opt.length; i++)
        {
            reg.test(opt[i].text) && sel.options.add(opt[i]);
            reg.lastIndex = 0;
        }
    }
}
