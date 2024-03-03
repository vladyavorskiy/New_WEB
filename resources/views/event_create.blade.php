<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Добавить событие:</h2>
<form method="post" action="{{url('event')}}">
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
    <label>Описание</label>
    <input type="text" name="description" value="{{old('description')}}"/>
    @error('description')
    <div class="is-invalid">{{$message}}</div>
    @enderror
<br><br>
    <label>Дата</label>
    <input type="date" name="date" value="{{old('date')}}"/>
    @error('date')
    <div class="is-invalid">{{$message}}</div>
    @enderror
<br><br>
    <input type="submit"></input>
</form>
<button onclick="location.href='{{url('event')}}'">Вернуться</button>
</body>
</html>
