<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>
    <link rel="stylesheet" href="/css/test_ui.css">
    <script src="/js/jutsu.js"></script>

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
</div>

<div id="Берлин" class="tabcontent">
    <h3>Берлин</h3>
    <input type="email">
    <p>Берлин это столица Германии.</p>
</div>

<div id="Пекин" class="tabcontent">
    <h3>Пекин</h3>
    <p>Пекин это столица Китая.</p>
</div>


</body>
</html>





