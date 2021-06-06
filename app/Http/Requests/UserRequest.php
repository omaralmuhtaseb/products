<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method()) {
            case 'POST':
                return [
                    'full_name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
                ];

            case 'PUT':
                return [
                    'full_name' => ['required', 'string', 'max:255'],
                    'email' => ['email' => 'required', 'string', 'email', 'max:255', 'unique:users,email,'.$this->id.'id'],
                    'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
                ];

        }
    }
}
