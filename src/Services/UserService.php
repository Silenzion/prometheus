<?php

namespace Silenzion\Prometheus\Services;

use DB;
use Hash;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Silenzion\Prometheus\Http\Requests\User\CreateRequest;
use Silenzion\Prometheus\Http\Requests\User\UpdateRequest;


class UserService{

    public function filter(Builder $query, Request $request)
    {
        if (!empty($fullName = $request->query('full_name'))) {
            $query->where('full_name', 'like', '%' . $fullName . '%');
        }

        if (!empty($login = $request->query('login'))) {
            $query->where('login', 'like', '%' . $login . '%');
        }

        if (!empty($role = $request->query('role'))) {
            $query->where('role', $role);
        }

        if (!empty($status = $request->query('status'))) {
            $query->where('status', $status);
        }

        return $query->paginate(25)->appends([
            'full_name' => $fullName,
            'login' => $login,
            'role' => $role,
            'status' => $status,
        ]);
    }
    public function create(CreateRequest $request){
        return DB::transaction(function () use ($request){
            $user = User::make($request->only('full_name', 'login', 'role', 'status'));
            $this->setPassword($user,$request->input('password'));
            $user->save();
            return $user;
        });
    }
    public function update(User $user, UpdateRequest $request){
        $user->update($request->only('full_name', 'login', 'role', 'status'));
        return $user;
    }
    public function delete(User $user){
        $user->delete();
    }
    public function updatePassword(User $user, $password){
        $this->setPassword($user,$password);
        $user->save();
    }
    private function setPassword(Admin $admin, $password): void
    {
        $admin->password = Hash::make($password);
    }
}