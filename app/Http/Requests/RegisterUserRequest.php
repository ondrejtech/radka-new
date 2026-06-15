<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:20'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:20'],
            'company_name' => ['required', 'string', 'max:100'],
            'company_ic' => ['required', 'string', 'max:20'],
            'company_dic' => ['nullable', 'string', 'max:20'],
            'street' => ['required', 'string', 'max:100'],
            'city' => ['required', 'string', 'max:100'],
            'zip' => ['required', 'string', 'max:7'],
            'country' => ['required', 'string', 'max:100'],
            'note' => ['nullable', 'string'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'terms_accepted' => ['accepted'],
        ];
    }
}
