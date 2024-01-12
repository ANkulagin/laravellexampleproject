<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
<!-- Заголовок страницы -->
Create Page
<div>
    <hr>
    <div>
        <!-- Форма для создания нового работника -->
        <form action="{{ route('worker.store') }}" method="post">
            @csrf <!-- CSRF-защита -->

            <!-- Поле для ввода имени -->
            <div style="margin-bottom: 15px">
                <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
                ИМЯ
                @error('name')
                <!-- Отображение ошибки валидации для имени -->
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Поле для ввода фамилии -->
            <div style="margin-bottom: 15px">
                <input type="text" name="surname" placeholder="surname" value="{{ old('surname') }}">
                ФАМИЛИЯ
                @error('surname')
                <!-- Отображение ошибки валидации для фамилии -->
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Поле для ввода почты -->
            <div style="margin-bottom: 15px">
                <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
                ПОЧТА
                @error('email')
                <!-- Отображение ошибки валидации для почты -->
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Поле для ввода возраста -->
            <div style="margin-bottom: 15px">
                <input type="number" name="age" placeholder="age" value="{{ old('age') }}">
                ВОЗРАСТ
                @error('age')
                <!-- Отображение ошибки валидации для возраста -->
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Поле для ввода описания -->
            <div style="margin-bottom: 15px">
                <textarea name="description" placeholder="description">{{ old('description') }}</textarea>
                ОПИСАНИЕ
            </div>

            <!-- Поле для указания семейного положения -->
            <div style="margin-bottom: 15px">
                <input type="checkbox" name="is_married" {{ old('is_married') == 'on' ? 'checked' : '' }}>
                ЖЕНАТ
            </div>

            <!-- Кнопка для отправки формы -->
            <div style="margin-bottom: 15px">
                <input type="submit" value="Добавить">
            </div>
        </form>
    </div>
</div>
</body>
</html>
