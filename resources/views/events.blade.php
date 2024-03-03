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
    <h2>Список событий:</h2>
    <table border="1">
        <thread>
            <td>id</td>
            <td>Страна</td>
            <td>Описание</td>
            <td>Дата</td>
            <td>Действия</td>
        </thread>
    @foreach ($events as $event)
        <tr>
            <td>{{$event->id}}</td>
            <td>{{$event->country->name}}</td>
            <td>{{$event->description}}</td>
            <td>{{$event->date}}</td>
            <td><a href="{{url('event/destroy/'.$event->id)}}">Удалить</a>
                <a href="{{url('event/edit/'.$event->id)}}">Изменить</a></td>
        </tr>
    @endforeach
    </table>
    <br>
    <button onclick="location.href='{{url('event/create')}}'">Создать</button>
</body>
</html>
