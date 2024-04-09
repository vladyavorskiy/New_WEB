{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title> 609-11 </title>--}}
{{--    <style> .is-invalid {color: red;} </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Добавить событие:</h2>--}}
{{--<form method="post" action="{{url('event')}}">--}}
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
{{--<br><br>--}}
{{--    <label>Описание</label>--}}
{{--    <input type="text" name="description" value="{{old('description')}}"/>--}}
{{--    @error('description')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--<br><br>--}}
{{--    <label>Дата</label>--}}
{{--    <input type="date" name="date" value="{{old('date')}}"/>--}}
{{--    @error('date')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--<br><br>--}}
{{--    <input type="submit"></input>--}}
{{--</form>--}}
{{--<button onclick="location.href='{{url('event')}}'">Вернуться</button>--}}
{{--</body>--}}
{{--</html>--}}





@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
            <form method="post" action={{url('event')}} >
                @csrf
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <input type="text" class="form-control @error("description") is-invalid @enderror"
                           id="description" name="description" aria-describedby="descriptionHelp" value={{old('description') }}>
                    <div id="descriptionHelp" class="form-text">Введите описание мероприятия (макс. 500 символов) </div>
                    @error("description")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Дата</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                           id="date" name="date" aria-describedby="dateHelp" value={{ old('date') }}>
                    <div id="dateHelp" class="form-text">Введите дату мероприятия (формат ДД.ММ.ГГГГ)</div>
                    @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
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
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@endsection







