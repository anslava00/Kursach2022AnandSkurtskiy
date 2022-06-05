function openCity(evt, cityName) {
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
var curFieldNameId = 1; // Уникальное значение для атрибута name
var maxFieldLimit = 100; // Максимальное число возможных полей
function deleteField(a) {
    // Получаем доступ к ДИВу, содержащему поле
    var contDiv = a.parentNode;
    // Удаляем этот ДИВ из DOM-дерева
    contDiv.parentNode.removeChild(contDiv);
    // Уменьшаем значение текущего числа полей
    countOfFields--;
    // Возвращаем false, чтобы не было перехода по сслыке
    return false;
}
function addField(menuName, FieldID = null) {
    // Проверяем, не достигло ли число полей максимума
    if (countOfFields >= maxFieldLimit) {
        alert("Число полей достигло своего максимума = " + maxFieldLimit);
        return false;
    }
    // Увеличиваем текущее значение числа полей
    countOfFields++;
    // Увеличиваем ID
    curFieldNameId++;
    // Создаем элемент ДИВ
    var div = document.createElement("div");
    if (menuName == 'sub_comp')
    {
        if (FieldID != null) {
            div.innerHTML = '<div class="competencies"><div><textarea class="text_area_noresize" name="sub_competencies_title' + (FieldID + curFieldNameId - 1) + '" cols="100" rows="10" id="bigWind" placeholder="Титул"></textarea></div>' +
                '<div><textarea class="text_area_noresize" name="sub_competencies_description' + (FieldID + curFieldNameId - 1) + '" cols="100" rows="10" id="bigWind" placeholder="Титул"></textarea></div>' +
                '<button name="DeleteBTN" onclick="return deleteField(this)">X</button></div>';
            document.getElementById("parentId").appendChild(div);
        }
    }
    else if (menuName == 'comp')
    {
        if (FieldID != null) {
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
