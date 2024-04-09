{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title> 609-11 </title>--}}
{{--    <style> .is-invalid {color: red;} </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Добавить страну:</h2>--}}
{{--<form method="post" action="{{url('country')}}">--}}
{{--    @csrf--}}
{{--    <label>Название</label>--}}
{{--    <input type="text" name="name" value="{{old('name')}}"/>--}}
{{--    @error('name')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Столица</label>--}}
{{--    <input type="text" name="capital" value="{{old('capital')}}"/>--}}
{{--    @error('capital')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Население</label>--}}
{{--    <input type="number" name="population" value="{{old('population')}}"/>--}}
{{--    @error('population')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Площадь</label>--}}
{{--    <input type="number" name="area" value="{{old('area')}}"/>--}}
{{--    @error('area')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <input type="submit"></input>--}}
{{--</form>--}}
{{--<button onclick="location.href='{{url('country')}}'">Вернуться</button>--}}
{{--</body>--}}
{{--</html>--}}



@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
            <form method="post" action={{url('country')}} >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" class="form-control @error("name") is-invalid @enderror"
                           id="name" name="name" aria-describedby=nameHelp" value={{old('name') }}>
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
                           id="capital" name="capital" aria-describedby="capitalHelp" value={{old('capital') }}>
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
                           id="population" name="population" aria-describedby="populationHelp" value={{old('population') }}>
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
                           id="area" name="area" aria-describedby="areaHelp" value={{old('area') }}>
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
