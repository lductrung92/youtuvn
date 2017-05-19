<?php

namespace App\Http\Controllers\PageAdmin;

use App\Category;
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function index () {
        return View::make('page_admin.category.list');
    }

    public function showFormInsert () {
        $categories = DB::table('categories')->select('categories.id', 'categories.title')->get();
        return View::make('page_admin.category.insert', compact('categories'));
    }

    public function insert (CateRequest $request) {
        $cate = new Category();
        $cate->pid = empty($request->cate_pid) ? $request->selCate : 0;
        $cate->title = $request->txtName;
        $cate->alias = changeTitle($request->txtName);
        $cate->keyword = $request->textKeyword;
        $cate->status = empty($request->cate_status) ? 0 : 1;
        $cate->save();
        return back()->with('success', 'Thêm danh mục thành công.');
    }

    public function showFormUpdate () {

    }

    public function update () {

    }

    public function delete() {

    }
}
