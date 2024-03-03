<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Изменить товарооборот:</h2>
<form method="post" action="{{url('turnover/update/'.$turnover->id)}}">
    @csrf
    <label>Страна №1:</label>
    <select name="country1_id" value="{{old('country1_id')}}">
        @foreach($countries as $country)
            <option value="{{$country->id}}"
                    @if(old('country1_id'))
                        @if(old('country1_id')==$country->id) selected @endif
                    @else
                        @if($turnover->country_id = $country->id) selected @endif
                @endif >{{$country->name}}</option>
        @endforeach
    </select>
    @error('country1_id')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Страна №1:</label>
    <select name="country2_id" value="{{old('country2_id')}}">
        @foreach($countries as $country)
            <option value="{{$country->id}}"
                    @if(old('country2_id'))
                        @if(old('country2_id')==$country->id) selected @endif
                    @else
                        @if($turnover->country_id = $country->id) selected @endif
                @endif >{{$country->name}}</option>
        @endforeach
    </select>
    @error('country2_id')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Год</label>
    <input type="number" name="year" min="1900" max="2099" value="@if (old('year')) {{old('year')}} @else {{$turnover->year}} @endif"/>
    @error('year')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Экспорт из №1 в №2</label>
    <input type="number" name="export_from1_to2" value="@if (old('export_from1_to2')) {{old('export_from1_to2')}} @else {{$turnover->export_from1_to2}} @endif"/>
    @error('GDP')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Экспорт из №2 в №1</label>
    <input type="number" name="export_from2_to1" value="@if (old('export_from2_to1')) {{old('export_from2_to1')}} @else {{$turnover->export_from2_to1}} @endif"/>
    @error('export_from2_to1')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <input type="submit"></input>
</form>
<button onclick="location.href='{{url('turnover')}}'">Вернуться</button></body>
</html>
