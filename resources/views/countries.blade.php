<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
</head>
<body>
<div>
    <button onclick="location.href='{{url('country')}}'">Страны</button>
    <button onclick="location.href='{{url('event')}}'">События</button>
    <button onclick="location.href='{{url('turnover')}}'">Товарооборот</button>
    <button onclick="location.href='{{url('economy')}}'">Экономика</button>
</div>
<h2>Список стран:</h2>
<table border="1">
    <thread>
        <td>id</td>
        <td>Название</td>
        <td>Столица</td>
        <td>Население</td>
        <td>Площадь</td>
        <td>Действия</td>
    </thread>
    @foreach ($countries as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td><button onclick="location.href='{{url('country/'.$country->id)}}'">{{$country->name}}</button></td>
            <td>{{$country->capital}}</td>
            <td>{{$country->population}}</td>
            <td>{{$country->area}}</td>
            <td><a href="{{url('country/destroy/'.$country->id)}}">Удалить</a>
                <a href="{{url('country/edit/'.$country->id)}}">Изменить</a></td>
        </tr>
    @endforeach
</table>
<br>
<button onclick="location.href='{{url('country_create')}}'">Создать</button>
</body>
</html>
