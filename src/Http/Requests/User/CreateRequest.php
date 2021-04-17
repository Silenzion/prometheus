<?php

namespace Silenzion\Prometheus\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Silenzion\Prometheus\Models\User;

class CreateRequest extends  FormRequest{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'full_name' => 'required|string|max:255',
            'login' => 'required|string|max:255|unique:admins',
            'role' => 'required|string|in:' . implode(',', array_keys(User::roleList())),
            'status' => 'required|string|in:' . implode(',', array_keys(User::statusList())),
            'password' => 'required|string|confirmed|min:6|max:255',
        ];
    }
}