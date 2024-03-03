<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Добавить страну:</h2>
<form method="post" action="{{url('country')}}">
    @csrf
    <label>Название</label>
    <input type="text" name="name" value="{{old('name')}}"/>
    @error('name')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Столица</label>
    <input type="text" name="capital" value="{{old('capital')}}"/>
    @error('capital')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Население</label>
    <input type="number" name="population" value="{{old('population')}}"/>
    @error('population')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Площадь</label>
    <input type="number" name="area" value="{{old('area')}}"/>
    @error('area')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <input type="submit"></input>
</form>
<button onclick="location.href='{{url('country')}}'">Вернуться</button>
</body>
</html>
