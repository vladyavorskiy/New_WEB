{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title> 609-11 </title>--}}
{{--    <style> .is-invalid {color: red;} </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Добавить данные об экономике:</h2>--}}
{{--<form method="post" action="{{url('economy')}}">--}}
{{--    @csrf--}}
{{--    <label>Страна:</label>--}}
{{--    <select name="country_id" value="{{old('country_id')}}">--}}
{{--        @foreach($countries as $country)--}}
{{--            <option value="{{$country->id}}" @if(old('country_id') == $country->id) selected--}}
{{--                @endif>{{$country->name}}--}}
{{--            </option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    @error('country_id')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Год</label>--}}
{{--    <input type="date" name="year" value="{{old('year')}}"/>--}}
{{--    @error('year')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>ВВП</label>--}}
{{--    <input type="number" name="GDP" value="{{old('GDP')}}"/>--}}
{{--    @error('GDP')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>ВВП/чел</label>--}}
{{--    <input type="number" name="GDP_person" value="{{old('GDP_person')}}"/>--}}
{{--    @error('GDP_person')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <input type="submit"></input>--}}
{{--</form>--}}
{{--<button onclick="location.href='{{url('economy')}}'">Вернуться</button>--}}
{{--</body>--}}
{{--</html>--}}




@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
            <form method="post" action={{url('economy')}} >
                @csrf
                <div class="mb-3">
                    <label for="country" class="form-label">Страна</label>
                    <select class="form-select" id="country" name="country_id" aria-describedby="countryHelp" value={{ old('country_id') }} >
                        <option style="">
                        @foreach ($countries as $country)
                            <option value="{{$country->id}}"
                                    @if(old('country_id') == $country->id) selected
                                @endif>{{$country->name}}
                            </option>
                        @endforeach
                    </select>
                    <div id="countryHelp" class="form-text">Выберите страну</div>
                    @error('country_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Год</label>
                    <input type="text" min="1900" max="2099" class="form-control @error("year") is-invalid @enderror"
                           id="year" name="year" aria-describedby="yearHelp" value={{old('year') }}>
                    <div id="yearHelp" class="form-text">Введите год сбора данных </div>
                    @error("year")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="GDP" class="form-label">ВВП</label>
                    <input type="text" class="form-control @error("GDP") is-invalid @enderror"
                           id="GDP" name="GDP" aria-describedby="GDPHelp" value={{old('GDP') }}>
                    <div id="GDPHelp" class="form-text">Введите значение ВВП выбранной страны </div>
                    @error("GDP")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="GDP_person" class="form-label">ВВП/чел</label>
                    <input type="text" class="form-control @error("GDP_person") is-invalid @enderror"
                           id="GDP_person" name="GDP_person" aria-describedby="GDP_personHelp" value={{old('GDP_person') }}>
                    <div id="GDP_personHelp" class="form-text">Введите значение ВВП на душу населения выбранной страны </div>
                    @error("GDP_person")
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
