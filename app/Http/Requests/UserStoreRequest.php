<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'unique:users,email'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '이름은 필수 항목입니다.',
            'email.required' => '이메일은 필수 항목입니다.',
            'email.email' => '올바른 이메일 형식을 입력해주세요.',
            'email.unique' => '이미 등록된 이메일입니다.',
        ];
    }
}
