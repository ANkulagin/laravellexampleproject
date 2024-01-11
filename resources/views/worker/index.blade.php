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
INDEX
<div>
    <div>
        <a href="{{route('worker.create')}}">Создать раба</a>
    </div>
    <hr>
    @foreach($workers as $worker)
        <div>
            <div>{{$worker->name}}</div>
            <div>{{$worker->surname}}</div>
            <div>{{$worker->email}}</div>
            <div>{{$worker->age}}</div>
            <div>
                <a href="{{ route('worker.show',['worker'=> $worker->id]) }}">Просмотреть</a>
            </div>
            <div>
                <a href="{{ route('worker.edit',['worker'=> $worker->id]) }}">Редактировать</a>
            </div>
            <div>
                <form action="{{route('worker.delete',$worker->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </div>
        <hr>
    @endforeach
    //pagination
    <div>
        {{ $workers->links()}}
    </div>
</div>
</body>
</html>
