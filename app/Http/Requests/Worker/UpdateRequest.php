<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * При обновлении, возможно, не все поля обязательны, исключая, возможно, 'id' или другие идентификаторы.
     * Это зависит от логики вашего приложения.
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
}
