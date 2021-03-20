<?php

namespace Silenzion\Prometheus\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Silenzion\Prometheus\Http\Controllers\Controller;


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
        $query = Brand::orderBy('name');
        $brands = $this->brand->filter($query, $request);
        $statuses = Brand::statusList();

        return view('core::admin.brands.index', compact('brands', 'statuses'));
    }
}
