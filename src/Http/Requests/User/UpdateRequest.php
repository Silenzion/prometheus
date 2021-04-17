<?php

namespace Silenzion\Prometheus\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Silenzion\Prometheus\Models\User;

class UpdateRequest extends  FormRequest{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        /** @var User $user */
        $user = $this->user;

        return [
            'full_name' => 'required|string|max:255',
            'login' => [
                'required',
                'string',
                'max:255',
                Rule::unique('admins')->ignore($user->id),
            ],
            'role' => 'required|string|in:' . implode(',', array_keys(User::roleList())),
            'status' => 'required|string|in:' . implode(',', array_keys(User::statusList())),
        ];
    }
}