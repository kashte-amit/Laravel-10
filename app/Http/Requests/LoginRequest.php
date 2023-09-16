<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
          'name' => 'required|alpha|min:6',
          'email' => ['required', 'email'],
          'password' => ['required', 'email', 'min:8', 'max:12'],
        ];
    }

    public function messages(): array
    {
      return[
        'name.required' => 'User name field is mandatory.',
        'name.alpha' => 'User name must contain letters.'
      ];
    }
}
