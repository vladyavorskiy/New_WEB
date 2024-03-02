<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
</head>
<body>
<h2>Список товарооборота:</h2>
<table border="1">
    <thread>
        <td>id</td>
        <td>Страна №1</td>
        <td>Страна №2</td>
        <td>Год</td>
        <td>Экспорт из №1 в №2 млрд. долл.</td>
        <td>Экспорт из №2 в №1 млрд. долл.</td>
    </thread>
    @foreach ($turnovers as $turnover)
        <tr>
            <td>{{$turnover->id}}</td>
            <td>{{$turnover->country1->name}}</td>
            <td>{{$turnover->country2->name}}</td>
            <td>{{$turnover->year}}</td>
            <td>{{$turnover->export_from1_to2}}</td>
            <td>{{$turnover->export_from2_to1}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
