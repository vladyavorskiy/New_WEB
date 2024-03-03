<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Добавить товарооборот:</h2>
<form method="post" action="{{url('turnover')}}">
    @csrf
    <label>Страна №1:</label>
    <select name="country1_id" value="{{old('country1_id')}}">
        @foreach($countries as $country)
            <option value="{{$country->id}}" @if(old('country1_id') == $country->id) selected
                @endif>{{$country->name}}
            </option>
        @endforeach
    </select>
    @error('country1_id')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Страна №2:</label>
    <select name="country2_id" value="{{old('country2_id')}}">
        @foreach($countries as $country)
            <option value="{{$country->id}}" @if(old('country2_id') == $country->id) selected
                @endif>{{$country->name}}
            </option>
        @endforeach
    </select>
    @error('country2_id')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Год</label>
    <input type="number" name="year" min="1900" max="2099" value="{{old('year')}}"/>
    @error('year')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Экспорт из №1 в №2</label>
    <input type="number" name="export_from1_to2" value="{{old('export_from1_to2')}}"/>
    @error('export_from1_to2')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Экспорт из №2 в №1</label>
    <input type="number" name="export_from2_to1" value="{{old('export_from2_to1')}}"/>
    @error('export_from2_to1')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <input type="submit"></input>
</form>
<button onclick="location.href='{{url('turnover')}}'">Вернуться</button>
</body>
</html>
