<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|max:10',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Campo Nome do Curso é Obrigatório!',
            'price.required'=> 'Campo Preço é Obrigatório!',
            // 'price.decimal'=> 'Campo preço deve ser do tipo numerico!',
            'price.max'=> 'Campo Preço máximo não pode ultrapassar a 10 caracteres!',
        ];
    }
}
