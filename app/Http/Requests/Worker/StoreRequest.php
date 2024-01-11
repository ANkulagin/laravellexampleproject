<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'surname'=>'required|string',
            'email'=>'required|email',
            'age'=>'nullable|integer',
            'description'=>'nullable|string',
            'is_married'=>'nullable|string ',
        ];
    }
}