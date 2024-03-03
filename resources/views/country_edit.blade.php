<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Изменить страну:</h2>
<form method="post" action="{{url('country/update/'.$country->id)}}">
    @csrf
    <label>Название</label>
    <input type="text" name="name" value="@if (old('name')) {{old('name')}} @else {{$country->name}} @endif"/>
    @error('name')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Столица</label>
    <input type="text" name="capital" value="@if (old('capital')) {{old('capital')}} @else {{$country->capital}} @endif"/>
    @error('capital')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Население</label>
    <input type="number" name="population" value="@if (old('population')) {{old('population')}} @else {{$country->population}} @endif"/>
    @error('population')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Площадь</label>
    <input type="number" name="area" value="@if (old('area')) {{old('area')}} @else {{$country->area}} @endif"/>
    @error('area')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <input type="submit"></input>
</form>
<button onclick="location.href='{{url('country')}}'">Вернуться</button></body>
</html>
