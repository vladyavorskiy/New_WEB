{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title> 609-11 </title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div>--}}
{{--    <button onclick="location.href='{{url('country')}}'">Страны</button>--}}
{{--    <button onclick="location.href='{{url('event')}}'">События</button>--}}
{{--    <button onclick="location.href='{{url('turnover')}}'">Товарооборот</button>--}}
{{--    <button onclick="location.href='{{url('economy')}}'">Экономика</button>--}}
{{--</div>--}}
{{--<h2>Список товарооборота:</h2>--}}
{{--<table border="1">--}}
{{--    <thread>--}}
{{--        <td>id</td>--}}
{{--        <td>Страна №1</td>--}}
{{--        <td>Страна №2</td>--}}
{{--        <td>Год</td>--}}
{{--        <td>Экспорт из №1 в №2 млрд. долл.</td>--}}
{{--        <td>Экспорт из №2 в №1 млрд. долл.</td>--}}
{{--        <td>Действия</td>--}}
{{--    </thread>--}}
{{--    @foreach ($turnovers as $turnover)--}}
{{--        <tr>--}}
{{--            <td>{{$turnover->id}}</td>--}}
{{--            <td>{{$turnover->country1->name}}</td>--}}
{{--            <td>{{$turnover->country2->name}}</td>--}}
{{--            <td>{{$turnover->year}}</td>--}}
{{--            <td>{{$turnover->export_from1_to2}}</td>--}}
{{--            <td>{{$turnover->export_from2_to1}}</td>--}}
{{--            <td><a href="{{url('turnover/destroy/'.$turnover->id)}}">Удалить</a>--}}
{{--                <a href="{{url('turnover/edit/'.$turnover->id)}}">Изменить</a></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}
{{--<br>--}}
{{--<button onclick="location.href='{{url('turnover/create')}}'">Создать</button>--}}
{{--</body>--}}
{{--</html>--}}




@extends('layout')
@section('content')
    <h2>Список данных об экономике:</h2>
    <table>
        <thead>
        <tr>
            <td>id</td>
            <td>Страна №1</td>
            <td>Страна №2</td>
            <td>Год</td>
            <td>Экспорт из №1 в №2 млрд. долл.</td>
            <td>Экспорт из №2 в №1 млрд. долл.</td>
            <td>Действия</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($turnovers as $turnover)
            <tr>
                <td>{{$turnover->id}}</td>
                <td>{{$turnover->country1->name}}</td>
                <td>{{$turnover->country2->name}}</td>
                <td>{{$turnover->year}}</td>
                <td>{{$turnover->export_from1_to2}}</td>
                <td>{{$turnover->export_from2_to1}}</td>
                <td><a href="{{url('turnover/destroy/'.$turnover->id)}}">Удалить</a>
                    <a href="{{url('turnover/edit/'.$turnover->id)}}">Изменить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
@endsection
