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
<h2>Список данных об экономике:</h2>
<table border="1">
    <thread>
        <td>id</td>
        <td>Страна</td>
        <td>Год</td>
        <td>ВВП (ППС) млрд. долл.</td>
        <td>ВВП/чел (ППС) долл.</td>
        <td>Действия</td>
    </thread>
    @foreach ($economies as $economy)
        <tr>
            <td>{{$economy->id}}</td>
            <td>{{$economy->country->name}}</td>
            <td>{{$economy->year}}</td>
            <td>{{$economy->GDP}}</td>
            <td>{{$economy->GDP_person}}</td>
            <td><a href="{{url('economy/destroy/'.$economy->id)}}">Удалить</a>
                <a href="{{url('economy/edit/'.$economy->id)}}">Изменить</a></td>
        </tr>
    @endforeach
</table>
<br>
<button onclick="location.href='{{url('economy/create')}}'">Создать</button>
</body>
</html>
