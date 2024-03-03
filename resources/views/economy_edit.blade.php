<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Изменить данные об экономике:</h2>
<form method="post" action="{{url('economy/update/'.$economy->id)}}">
    @csrf
    <label>Страна:</label>
    <select name="country_id" value="{{old('country_id')}}">
        @foreach($countries as $country)
            <option value="{{$country->id}}"
                    @if(old('country_id'))
                        @if(old('country_id')==$country->id) selected @endif
                    @else
                        @if($economy->country_id = $country->id) selected @endif
                @endif >{{$country->name}}</option>
        @endforeach
    </select>
    @error('country_id')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Год</label>
    <input type="date" name="year" value="@if (old('year')) {{old('year')}} @else {{$economy->year}} @endif"/>
    @error('year')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>ВВП</label>
    <input type="number" name="GDP" value="@if (old('GDP')) {{old('GDP')}} @else {{$economy->GDP}} @endif"/>
    @error('GDP')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>ВВП/чел</label>
    <input type="number" name="date" value="@if (old('GDP_person')) {{old('GDP_person')}} @else {{$economy->GDP_person}} @endif"/>
    @error('GDP_person')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <input type="submit"></input>
</form>
<button onclick="location.href='{{url('economy')}}'">Вернуться</button></body>
</html>
