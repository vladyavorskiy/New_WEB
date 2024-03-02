<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
</head>
<body>
<h2>Список данных об экономике:</h2>
<table border="1">
    <thread>
        <td>id</td>
        <td>Страна</td>
        <td>Год</td>
        <td>ВВП (ППС) млрд. долл.</td>
        <td>ВВП/чел (ППС) долл.</td>
    </thread>
    @foreach ($economies as $economy)
        <tr>
            <td>{{$economy->id}}</td>
            <td>{{$economy->country->name}}</td>
            <td>{{$economy->year}}</td>
            <td>{{$economy->GDP}}</td>
            <td>{{$economy->GDP_person}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
