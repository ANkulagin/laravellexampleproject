<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Определение, может ли пользователь сделать этот запрос.
     * В данном случае всегда возвращает true, что означает,
     * что запрос авторизован всегда без дополнительной проверки.
     * В реальном проекте, возможно, потребуется добавить более сложную логику
     * в этот метод для проверки прав доступа.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Правила валидации для параметров запроса.
     * Определяются правила валидации для каждого параметра запроса.
     * В данном случае:
     * - 'name', 'surname' и 'email' обязательны для заполнения и должны быть строками,
     * - 'age' должен быть целым числом или null,
     * - 'description' должен быть строкой или null,
     * - 'is_married' должен быть строкой или null.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string ',
        ];
    }

    /**
     * Пользовательские сообщения об ошибках валидации.
     * Задаются сообщения для конкретных правил валидации,
     * которые будут возвращены в случае ошибки.
     * Например, если поле 'name' не было заполнено, будет возвращено сообщение 'Введи имя'.
     */
    public function messages()
    {
        return [
            'name.required' => 'Введи имя',
            'surname.required' => 'Введи фамилию настоящую',
            'email.required' => 'Введи почту настоящую',
            'age.required' => 'Введи возраст',
        ];
    }
}
