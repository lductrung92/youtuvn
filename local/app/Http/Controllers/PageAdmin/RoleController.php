<?php

namespace App\Http\Controllers\PageAdmin;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function index () {
        return View::make('page_admin.role.list');
    }

    public function showFormInsert () {
        return View::make('page_admin.role.insert');
    }

    public function insert (RoleRequest $request) {
        $role = new Role();
        $role->name = $request->txtRole;
        $role->save();
        return back()->with('success', 'Thêm danh mục thành công.');
    }

    public function showFormUpdate () {

    }

    public function update () {

    }

    public function delete() {

    }
}
