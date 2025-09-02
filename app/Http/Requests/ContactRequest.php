<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subject'=>'required|min:5|max:50',
            'message'=>'required|min:50|max:500',
        ];
    }
    public function attributes(): array
    {
        return [
            'subject'=>'theme',
            'message'=>'message text',
        ];
    }
    public function messages(): array
    {
        return [
            'subject'=>'The field subject must be filled',
            'message'=>'The field message must be filled',
        ];
    }
}
