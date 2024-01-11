<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Create Page
<div>
    <hr>
    <div>
        <form action="{{route('worker.store')}}" method="post">
            @csrf
            <div style="margin-bottom: 15px">
                <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
                ИМЯ
                @error('name')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px"><input type="text" name="surname" placeholder="surname"
                                                    value="{{ old('surname') }}">
                ФАМИЛИЯ
                @error('surname')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px"><input type="email" name="email" placeholder="email"
                                                    value="{{ old('email') }}">
                ПОЧТА
                @error('email')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age" value="{{ old('age') }}">
                ВОЗРАСТ
                @error('age')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px"><textarea name="description" placeholder="description"
                                                       value="{{ old('description') }}"></textarea>
                ОПИСАНИЕ
            </div>
            <div style="margin-bottom: 15px"><input type="checkbox" name="is_married"
                                                    value="{{ old('is_married')=='on'?'checked':'' }}">
                ЖЕНАТ
            </div>
            <div style="margin-bottom: 15px"><input type="submit" value="Добавить"></div>
        </form>
    </div>
</div>
</body>
</html>
