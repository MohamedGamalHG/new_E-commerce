<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
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
        return [
            'username'          => 'required|max:20',
            'email'             => 'required|unique:users',
            'password'          => 'required|min:8|max:40'
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'The title is required.',

        ];
    }

}
