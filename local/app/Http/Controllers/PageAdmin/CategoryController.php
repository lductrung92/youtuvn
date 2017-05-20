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
        $categories = Category::all();
        return View::make('page_admin.category.list', compact('categories'));
    }

    public function showFormInsert () {
        $categories = Category::where('pid', '=', 0)->get();
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
        return back()->with(['success', 'Thêm danh mục thành công.']);
    }

    public function showFormUpdate ($id) {
        $cate = Category::find($id);
        $categories = Category::where('pid', '=', 0)->get();
        return View::make('page_admin.category.update', compact('cate', 'categories'));
    }

    public function update (CateRequest $request, $id) {
        $cate = Category::find($id);
        $cate->pid = empty($request->cate_pid) ? $request->selCate : 0;
        $cate->title = $request->txtName;
        $cate->alias = changeTitle($request->txtName);
        $cate->keyword = $request->textKeyword;
        $cate->status = empty($request->cate_status) ? 0 : 1;
        $cate->update();
        return back()->with(['success', 'Thêm danh mục thành công.']);
    }

    public function delete($id) {
        $cate = Category::find($id);
        return back()->with(['success', 'Xóa danh mục '. $cate->title . ' thành công.']);
    }
}
