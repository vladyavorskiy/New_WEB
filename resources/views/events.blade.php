<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
</head>
<body>
    <h2>Список событий:</h2>
    <table border="1">
        <thread>
            <td>id</td>
            <td>Страна</td>
            <td>Описание</td>
            <td>Дата</td>
        </thread>
    @foreach ($events as $event)
        <tr>
            <td>{{$event->id}}</td>
            <td>{{$event->country->name}}</td>
            <td>{{$event->description}}</td>
            <td>{{$event->date}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>
