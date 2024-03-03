<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Добавить данные об экономике:</h2>
<form method="post" action="{{url('economy')}}">
    @csrf
    <label>Страна:</label>
    <select name="country_id" value="{{old('country_id')}}">
        @foreach($countries as $country)
            <option value="{{$country->id}}" @if(old('country_id') == $country->id) selected
                @endif>{{$country->name}}
            </option>
        @endforeach
    </select>
    @error('country_id')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Год</label>
    <input type="date" name="year" value="{{old('year')}}"/>
    @error('year')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>ВВП</label>
    <input type="number" name="GDP" value="{{old('GDP')}}"/>
    @error('GDP')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>ВВП/чел</label>
    <input type="number" name="GDP_person" value="{{old('GDP_person')}}"/>
    @error('GDP_person')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <input type="submit"></input>
</form>
<button onclick="location.href='{{url('economy')}}'">Вернуться</button>
</body>
</html>
