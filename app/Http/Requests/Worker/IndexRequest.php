<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
     * - 'name' и 'surname' должны быть строками или null,
     * - 'email' должен быть допустимым адресом электронной почты или null,
     * - 'from' и 'to' должны быть целыми числами или null,
     * - 'description' должен быть строкой или null,
     * - 'is_married' должен быть строкой или null.
     */
    public function rules(): array
    {
        return [
            'name' => 'nullable|string',
            'surname' => 'nullable|string',
            'email' => 'nullable|email',
            'from' => 'nullable|integer',
            'to' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string ',
        ];
    }
}
