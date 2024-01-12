<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>
<!-- Заголовок страницы -->
Edit Page
<div>
    <hr>
    <div>
        <!-- Форма для редактирования информации о работнике -->
        <form action="{{ route('worker.update', $worker->id) }}" method="post">
            @csrf <!-- CSRF-защита -->
            @method('PATCH') <!-- Метод запроса для обновления данных -->

            <!-- Поле для ввода имени с текущим значением -->
            <div style="margin-bottom: 15px">
                <input type="text" value="{{ $worker->name }}" name="name">ИМЯ
            </div>

            <!-- Поле для ввода фамилии с текущим значением -->
            <div style="margin-bottom: 15px">
                <input type="text" value="{{ $worker->surname }}" name="surname">ФАМИЛИЯ
            </div>

            <!-- Поле для ввода почты с текущим значением -->
            <div style="margin-bottom: 15px">
                <input type="email" value="{{ $worker->email }}" name="email">ПОЧТА
            </div>

            <!-- Поле для ввода возраста с текущим значением -->
            <div style="margin-bottom: 15px">
                <input type="number" value="{{ $worker->age }}" name="age">ВОЗРАСТ
            </div>

            <!-- Поле для ввода описания с текущим значением -->
            <div style="margin-bottom: 15px">
                <textarea name="description">{{ $worker->description }}</textarea>ОПИСАНИЕ
            </div>

            <!-- Поле для указания семейного положения с текущим значением -->
            <div style="margin-bottom: 15px">
                <input type="checkbox" name="is_married" {{ $worker->is_married ? 'checked' : '' }}>ЖЕНАТ
            </div>

            <!-- Кнопка для сохранения изменений -->
            <div style="margin-bottom: 15px">
                <input type="submit" value="Сохранить">
            </div>
        </form>
    </div>
</div>
</body>
</html>

