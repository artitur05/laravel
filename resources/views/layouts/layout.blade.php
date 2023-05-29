<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Шаблон </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="menu" style="background-color: #a0c3fd; padding: 15px">
    <ul style="display: flex; list-style-type: none; justify-content: space-around">
        <li class="block font-medium text-sm text-gray-700">
            <a href="posts/">Главная</a>
        </li>
        <li class="block font-medium text-sm text-gray-700">
            <a href="categories">Все категории</a>
        </li>
    </ul>
</div>
@yield('content')

</body>
</html>
