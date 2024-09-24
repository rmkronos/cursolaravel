<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClasseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'course_id'   => 'required',
            'name'        => 'required',
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'course_id.required'   => 'O código do curso é obrigatório!',
            'name.required'        => 'O nome da aula é obrigatório!',
            'description.required' => 'A descrição da aulaé obrigatório',
        ];
    }
}
