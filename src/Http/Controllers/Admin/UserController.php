<?php

namespace Silenzion\Prometheus\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Silenzion\Prometheus\Http\Controllers\Controller;
use Silenzion\Prometheus\Http\Requests\User\CreateRequest;
use Silenzion\Prometheus\Http\Requests\User\UpdateRequest;
use Silenzion\Prometheus\Models\User;
use Silenzion\Prometheus\Services\UserService;


class UserController extends Controller
{
    /** @var UserService $user */
    private $user;

    /**
     * @param UserService $user
     */
    public function __construct(UserService $user)
    {
        $this->user = $user;
    }
    public function index(Request $request)
    {
        $query = User::orderBy('name');
        $roles = User::roleList();
        $users = $this->user->filter($query, $request);
        $statuses = User::statusList();

        return view('prometheus::admin.users.index', compact('users', 'statuses','roles'));
    }
    public function create()
    {
        $roles = User::roleList();
        $statuses = User::statusList();

        return view('prometheus::admin.users.create', compact('roles', 'statuses'));
    }
    public function store(CreateRequest $request)
    {
        $this->user->create($request);
        return redirect()->route('admin.users.index')->with('success', 'Вы успешно добавили пользователя');
    }

    public function edit(User $user)
    {
        $roles = User::roleList();
        $statuses = User::statusList();

        return view('prometheus::admin.users.edit', compact('admin', 'roles', 'statuses'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $this->user->update($user, $request);
        return redirect()->route('admin.users.index')->with('success', 'Вы успешно отредактировали пользователя');
    }

    public function destroy(User $user)
    {
        $this->user->delete($user);
        return redirect()->back()->with('success', 'Вы успешно удалили пользователя');
    }

    public function showChangePasswordForm(User $user)
    {
        return view('prometheus::admin.users.password.edit', compact('admin'));
    }

    public function changePassword(ChangePasswordRequest $request, User $user)
    {
        $this->user->updatePassword($user, $request->input('new_password'));
        return redirect()->route('admin.users.index')->with('success', 'Вы успешно отредактировали пароль пользователя');
    }
}
