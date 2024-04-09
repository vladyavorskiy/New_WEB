{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title> 609-11 </title>--}}
{{--    <style> .is-invalid {color: red;} </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Изменить страну:</h2>--}}
{{--<form method="post" action="{{url('country/update/'.$country->id)}}">--}}
{{--    @csrf--}}
{{--    <label>Название</label>--}}
{{--    <input type="text" name="name" value="@if (old('name')) {{old('name')}} @else {{$country->name}} @endif"/>--}}
{{--    @error('name')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Столица</label>--}}
{{--    <input type="text" name="capital" value="@if (old('capital')) {{old('capital')}} @else {{$country->capital}} @endif"/>--}}
{{--    @error('capital')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Население</label>--}}
{{--    <input type="text" name="population" value="@if (old('population')) {{old('population')}} @else {{$country->population}} @endif"/>--}}
{{--    @error('population')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Площадь</label>--}}
{{--    <input type="text" name="area" value="@if (old('area')) {{old('area')}} @else {{$country->area}} @endif"/>--}}
{{--    @error('area')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <input type="submit"></input>--}}
{{--</form>--}}
{{--<button onclick="location.href='{{url('country')}}'">Вернуться</button></body>--}}
{{--</html>--}}





@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
            <form method="post" action={{url('country/update/'.$country->id)}} >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" class="form-control @error("name") is-invalid @enderror"
                           id="name" name="name" aria-describedby=nameHelp"
                           value="@if (old('name')) {{old('name')}} @else {{$country->name}} @endif">
                    <div id="nameHelp" class="form-text">Введите название страны </div>
                    @error("name")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="capital" class="form-label">Столица</label>
                    <input type="text" class="form-control @error("capital") is-invalid @enderror"
                           id="capital" name="capital" aria-describedby="capitalHelp"
                           value="@if (old('capital')) {{old('capital')}} @else {{$country->capital}} @endif">
                    <div id="capitalHelp" class="form-text">Введите столицу страны </div>
                    @error("capital")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="population" class="form-label">Население</label>
                    <input type="text" class="form-control @error("population") is-invalid @enderror"
                           id="population" name="population" aria-describedby="populationHelp"
                           value="@if (old('population')) {{old('population')}} @else {{$country->population}} @endif">
                    <div id="populationHelp" class="form-text">Введите численность населения страны </div>
                    @error("population")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="area" class="form-label">Площадь</label>
                    <input type="text" class="form-control @error("area") is-invalid @enderror"
                           id="area" name="area" aria-describedby="areaHelp"
                           value="@if (old('area')) {{old('area')}} @else {{$country->area}} @endif">
                    <div id="areaHelp" class="form-text">Введите площадь страны </div>
                    @error("area")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@endsection
