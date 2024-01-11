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
            <div style="margin-bottom: 15px"><input type="text" name="name">ИМЯ</div>
            <div style="margin-bottom: 15px"><input type="text" name="surname">ФАМИЛИЯ</div>
            <div style="margin-bottom: 15px"><input type="email" name="email">ПОЧТА</div>
            <div style="margin-bottom: 15px"><input type="number" name="age">ВОЗРАСТ</div>
            <div style="margin-bottom: 15px"><textarea name="description"></textarea>ОПИСАНИЕ</div>
            <div style="margin-bottom: 15px"><input type="checkbox" name="is_married">ЖЕНАТ</div>
            <div style="margin-bottom: 15px"><input type="submit" value="Добавить"></div>
        </form>
    </div>
</div>
</body>
</html>
