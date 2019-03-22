<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

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
        $validate = [
            'name' => 'required|string|between:3,254',
            'email' => 'required|unique:users,email',
            'password' => 'string|between:6,21',
        ];

        $user_id = ($this->route('user')->id) ?? false;

        if ($user_id)
            $validate['email'] .= ',' . $user_id;
        else
            $validate['password'] .= '|required';

        return $validate;
    }
}
