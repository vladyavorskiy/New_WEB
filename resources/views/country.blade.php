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
    <h2>{{$country ? "Список событий в стране: ".$country->name: 'Неверный ID страны'}}</h2>
    @if($country)
        <table border="1">
            <thread>
                <td>id</td>
                <td>Описание</td>
                <td>Дата</td>
            </thread>
            @foreach ($country->events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->description}}</td>
                    <td>{{$event->date}}</td>
                </tr>
            @endforeach
        </table>

    <h2>{{"Список товарооборота страны: ".$country->name}}</h2>
        <table border="1">
            <thread>
                <td>id</td>
                <td>Страна-партнер</td>
                <td>Год</td>
                <td>Экспорт млрд. долл.</td>
                <td>Импорт млрд. долл.</td>
            </thread>
            @foreach ($country->turnovers1 as $turnover)
                <tr>
                    <td>{{$turnover->id}}</td>
                    <td>{{$turnover->country2->name}}</td>
                    <td>{{$turnover->year}}</td>
                    <td>{{$turnover->export_from1_to2}}</td>
                    <td>{{$turnover->export_from2_to1}}</td>
                </tr>
            @endforeach
        </table>

    <h2>{{"Список данных об экономике страны: ".$country->name}}</h2>
        <table border="1">
            <thread>
                <td>id</td>
                <td>Год</td>
                <td>ВВП (ППС) млрд. долл.</td>
                <td>ВВП/чел (ППС) долл.</td>
            </thread>
            @foreach ($country->economies as $economy)
                <tr>
                    <td>{{$economy->id}}</td>
                    <td>{{$economy->year}}</td>
                    <td>{{$economy->GDP}}</td>
                    <td>{{$economy->GDP_person}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
