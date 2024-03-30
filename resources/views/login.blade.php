<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 609-11 </title>
    <style> .is-invalid { color: red; }    </style>
</head>
<body>
@if($user)
    <h2>Здравствуйте, {{ $user->name }}</h2>
    <a href="{{url("logout")}}">Выйти из системы</a>
@else
    <h2>Вход в систему</h2>
    <form method="post" action={{url('auth')}}/>
    @csrf
    <label>Email</label>
    <label>
        <input type="text" name="email" value="{{ old('email') }}"/>
    </label>
    @error('email')
    <div class="is-invalid">{{ $message }}}</div>
    @enderror
    <br>
    <label>Пароль</label>
    <label>
        <input type="password" name="password" value="{{ old('password') }}"/>
    </label>
    @error('password')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <input type="submit">
    </form>
    @error('error')
    <div class="is-invalid">{{ $message }}}</div>
    @enderror
@endif
</body>
</html>


