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
        <form action="{{route('worker.update',$worker->id)}}" method="post">
            @csrf
            @method('Patch')
            <div style="margin-bottom: 15px"><input type="text" value="{{$worker->name}}" name="name">ИМЯ</div>
            <div style="margin-bottom: 15px"><input type="text" value="{{$worker->surname}}" name="surname">ФАМИЛИЯ</div>
            <div style="margin-bottom: 15px"><input type="email" value="{{$worker->email}}" name="email">ПОЧТА</div>
            <div style="margin-bottom: 15px"><input type="number" value="{{$worker->age}}" name="age">ВОЗРАСТ</div>
            <div style="margin-bottom: 15px"><textarea name="description">{{$worker->description}}" </textarea>ОПИСАНИЕ</div>
            <div style="margin-bottom: 15px"><input type="checkbox" name="is_married" {{$worker->is_maried ? ' checked ': ''}}>ЖЕНАТ</div>
            <div style="margin-bottom: 15px"><input type="submit" value="Cохранить"></div>
        </form>
    </div>
</div>
</body>
</html>
