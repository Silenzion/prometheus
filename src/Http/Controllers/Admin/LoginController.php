<?php

namespace Silenzion\Prometheus\Http\Controllers\Admin;

use Silenzion\Prometheus\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use ThrottlesLogins;

    public function showLoginForm()
    {
        return view("prometheus::admin.auth.login");
    }

    public function login()
    {
        return view("prometheus::admin.dashboards.main");
    }

    public function logout(Request $request)
    {

    }
}