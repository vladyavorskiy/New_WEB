<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Изменить событие:</h2>
<form method="post" action="{{url('event/update/'.$event->id)}}">
    @csrf
    <label>Страна:</label>
    <select name="country_id" value="{{old('country_id')}}">
        @foreach($countries as $country)
            <option value="{{$country->id}}"
                    @if(old('country_id'))
                        @if(old('country_id')==$country->id) selected @endif
                    @else
                        @if($event->country_id = $country->id) selected @endif
            @endif >{{$country->name}}</option>
        @endforeach
    </select>
    @error('country_id')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Описание</label>
    <input type="text" name="description" value="@if (old('description')) {{old('description')}} @else {{$event->description}} @endif"/>
    @error('description')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <label>Дата</label>
    <input type="date" name="date" value="@if (old('date')) {{old('date')}} @else {{$event->date}} @endif"/>
    @error('date')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br><br>
    <input type="submit"></input>
</form>
<button onclick="location.href='{{url('event')}}'">Вернуться</button></body>
</html>
