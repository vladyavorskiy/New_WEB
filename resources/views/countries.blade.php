<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
</head>
<body>
<h2>Список стран:</h2>
<table border="1">
    <thread>
        <td>id</td>
        <td>Название</td>
        <td>Столица</td>
        <td>Население</td>
        <td>Площадь</td>
    </thread>
    @foreach ($countries as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->capital}}</td>
            <td>{{$country->population}}</td>
            <td>{{$country->area}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
