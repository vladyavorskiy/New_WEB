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
{{--<h2>Список стран:</h2>--}}
{{--<table border="1">--}}
{{--    <thread>--}}
{{--        <td>id</td>--}}
{{--        <td>Название</td>--}}
{{--        <td>Столица</td>--}}
{{--        <td>Население</td>--}}
{{--        <td>Площадь</td>--}}
{{--        <td>Действия</td>--}}
{{--    </thread>--}}
{{--    @foreach ($countries as $country)--}}
{{--        <tr>--}}
{{--            <td>{{$country->id}}</td>--}}
{{--            <td><button onclick="location.href='{{url('country/'.$country->id)}}'">{{$country->name}}</button></td>--}}
{{--            <td>{{$country->capital}}</td>--}}
{{--            <td>{{$country->population}}</td>--}}
{{--            <td>{{$country->area}}</td>--}}
{{--            <td><a href="{{url('country/destroy/'.$country->id)}}">Удалить</a>--}}
{{--                <a href="{{url('country/edit/'.$country->id)}}">Изменить</a></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}
{{--{{ $countries->links() }}--}}
{{--<br>--}}
{{--<button onclick="location.href='{{url('country_create')}}'">Создать</button>--}}
{{--</body>--}}
{{--</html>--}}




@extends('layout')
@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .actions a {
            margin-right: 5px;
        }

        button {
            background: none;
            border: 0;
            padding: 0;
            margin: 0;
            cursor: pointer;
            text-decoration: underline;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #337ab7;
        }

        .pagination a:hover {
            background-color: #f5f5f5;
        }

        .pagination .active a {
            background-color: #337ab7;
            color: #fff;
            border-color: #337ab7;
        }

        .pagination .disabled a {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }

    </style>

    <h2>Список данных об экономике:</h2>
    <table>
        <thead>
        <tr>
            <td>id</td>
            <td>Название</td>
            <td>Столица</td>
            <td>Население</td>
            <td>Площадь</td>
            <td>Действия</td>
        </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    <div class="pagination">
        {{ $countries->links() }}
    </div>
    <br>
@endsection
