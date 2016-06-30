<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if ($this->isMethod('post')) {
            return [
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'username' => 'required|min:6|max:255',
                'email' => 'required|email|max:255|unique:users',
                'phone' => 'required|min:9|max:12|unique:users',
                'password' => 'required|min:6|confirmed',
            ];
        }
        return [
            'firstname' => 'max:255',
            'lastname' => 'max:255',
            'email' => 'email|max:255|unique:users',
            'phone' => 'unique:users',
            'password' => 'min:6|confirmed',
        ];
    }
}
