{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>609-11</title>--}}
{{--    <style>--}}
{{--        .is-invalid {--}}
{{--            color: red;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Изменить товарооборот:</h2>--}}
{{--<form method="post" action="{{url('turnover/update/'.$turnover->id)}}">--}}
{{--    @csrf--}}
{{--    <label>Страна №1:</label>--}}
{{--    <select name="country1_id" value="{{old('country1_id')}}">--}}
{{--        @foreach($countries as $country)--}}
{{--            <option value="{{$country->id}}"--}}
{{--                    @if(old('country1_id') == $country->id || $turnover->country1_id == $country->id) selected--}}
{{--                @endif>{{$country->name}}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    @error('country1_id')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Страна №2:</label>--}}
{{--    <select name="country2_id" value="{{old('country2_id')}}">--}}
{{--        @foreach($countries as $country)--}}
{{--            <option value="{{$country->id}}"--}}
{{--                    @if(old('country2_id') == $country->id || $turnover->country2_id == $country->id) selected--}}
{{--                @endif>{{$country->name}}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    @error('country2_id')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Год</label>--}}
{{--    <input type="text" name="year" min="1900" max="2099"--}}
{{--           value="@if (old('year')) {{old('year')}} @else {{$turnover->year}} @endif"/>--}}
{{--    @error('year')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Экспорт из №1 в №2</label>--}}
{{--    <input type="text" name="export_from1_to2"--}}
{{--           value="@if (old('export_from1_to2')) {{old('export_from1_to2')}} @else {{$turnover->export_from1_to2}} @endif"/>--}}
{{--    @error('export_from1_to2')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <label>Экспорт из №2 в №1</label>--}}
{{--    <input type="text" name="export_from2_to1"--}}
{{--           value="@if (old('export_from2_to1')) {{old('export_from2_to1')}} @else {{$turnover->export_from2_to1}} @endif"/>--}}
{{--    @error('export_from2_to1')--}}
{{--    <div class="is-invalid">{{$message}}</div>--}}
{{--    @enderror--}}
{{--    <br><br>--}}
{{--    <input type="submit">--}}
{{--</form>--}}
{{--<button onclick="location.href='{{url('turnover')}}'">Вернуться</button>--}}
{{--</body>--}}
{{--</html>--}}




@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
            <form method="post" action={{url('turnover/update/'.$turnover->id)}}>
                @csrf
                <div class="mb-3">
                    <label for="country1" class="form-label">Страна №1</label>
                    <select class="form-select" id="country1" name="country1_id" aria-describedby="countryHelp" value={{ old('country1_id') }} >
                        <option style="">
                        @foreach($countries as $country)
                            <option value="{{$country->id}}"
                                    @if(old('country1_id') == $country->id || $turnover->country1_id == $country->id) selected
                                @endif>{{$country->name}}</option>
                        @endforeach
                    </select>
                    <div id="countryHelp" class="form-text">Выберите страну №1</div>
                    @error('country1_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="country2" class="form-label">Страна №2</label>
                    <select class="form-select" id="country2" name="country2_id" aria-describedby="countryHelp" value={{ old('country2_id') }} >
                        <option style="">
                        @foreach($countries as $country)
                            <option value="{{$country->id}}"
                                    @if(old('country2_id') == $country->id || $turnover->country2_id == $country->id) selected
                                @endif>{{$country->name}}</option>
                        @endforeach
                    </select>
                    <div id="countryHelp" class="form-text">Выберите страну №2</div>
                    @error('country2_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Год</label>
                    <input type="text" min="1900" max="2099" class="form-control @error("year") is-invalid @enderror"
                           id="year" name="year" aria-describedby="yearHelp"
                           value="@if (old('year')) {{old('year')}} @else {{$turnover->year}} @endif">
                    <div id="yearHelp" class="form-text">Введите год сбора данных </div>
                    @error("year")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="export_from1_to2" class="form-label">Экспорт из №1 в №2</label>
                    <input type="text" class="form-control @error("export_from1_to2") is-invalid @enderror"
                           id="export_from1_to2" name="export_from1_to2" aria-describedby="export_from1_to2Help"
                           value="@if (old('export_from1_to2')) {{old('export_from1_to2')}} @else {{$turnover->export_from1_to2}} @endif">
                    <div id="export_from1_to2Help" class="form-text">Введите значение экспорта из страны №1 в страну №2 </div>
                    @error("export_from1_to2")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="export_from2_to1" class="form-label">Экспорт из №2 в №1</label>
                    <input type="text" class="form-control @error("export_from2_to1") is-invalid @enderror"
                           id="export_from2_to1" name="export_from2_to1" aria-describedby="export_from2_to1Help"
                           value="@if (old('export_from2_to1')) {{old('export_from2_to1')}} @else {{$turnover->export_from2_to1}} @endif">
                    <div id="export_from2_to1Help" class="form-text">Введите значение экспорта из страны №2 в страну №1 </div>
                    @error("export_from2_to1")
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

