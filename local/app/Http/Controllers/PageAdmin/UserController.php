<?php

namespace App\Http\Controllers\PageAdmin;

use App\Role;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index () {
        return View::make('page_admin.user.list');
    }

    public function showFormInsert () {
        $roles = Role::all();
        return View::make('page_admin.user.insert', compact('roles'));
    }

    public function insert (UserRequest $request) {
        $user = new User();
        $user->rid = $request->selRole;
        $user->name = $request->txtName;
        $user->email = $request->txtEmail;
        $user->password = bcrypt($request->txtPass);
        $user->save();
        return back()->with('success', 'Thêm danh mục thành công.');
    }

    public function showFormUpdate () {

    }

    public function update () {

    }

    public function delete() {

    }

    public function profile() {
        return View::make('page_admin.user.profile');
    }
}
