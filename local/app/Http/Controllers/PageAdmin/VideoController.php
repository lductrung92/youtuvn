<?php

namespace App\Http\Controllers\PageAdmin;

use App\Category;
use App\Youtube;
use Illuminate\Http\Request;
use App\Http\Requests\YoutubeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Auth;

class VideoController extends Controller
{
    public function index () {
        $videos = Youtube::all();
        return View::make('page_admin.youtube.list', compact('videos'));
    }

    public function getDataVideo ($url) {
        $data = getDataYoutube($url, 'AIzaSyCdb0_J_yP7N5VMjeh4hSD9N7QKqyemwfw');
        echo json_encode($data);
    }

    public function showFormInsert () {
        $categories = Category::all();
        return View::make('page_admin.youtube.insert', compact('categories'));
    }

    public function insert (YoutubeRequest $request) {
        $youtube = new Youtube();
        $youtube->cid = $request->selCate;
        $cate_id = DB::table('categories')->where('id', '=', (int)$request->selCate)->select('categories.pid')->get();
        $youtube->pid = $cate_id[0]->pid;
        $youtube->uid = Auth::user()->id;
        $youtube->title = $request->txtTitle;
        $youtube->alias = $request->txtLink;
        $youtube->time_video = $request->time_video;
        $youtube->viewCount = $request->sumView;
        $youtube->likeCount = $request->sumLike;
        $youtube->dislikeCount = $request->sumDislike;
        $youtube->author = $request->nameChange;
        $youtube->id_video = $request->id_video;
        $youtube->description = $request->textDes;
        $youtube->keyword = $request->txtKeyword;
        $youtube->status = empty($request->video_status) ? 0 : 1;
        $youtube->created_at = strtotime($request->timeCreated);
        $youtube->updated_at = strtotime($request->timeCreated);
        $youtube->save();
        return back()->with('success', 'Thêm danh mục thành công.');
    }

    public function showFormUpdate ($id) {
        $categories = Category::all();
        $video = Youtube::find($id);
        return View::make('page_admin.youtube.update', compact('categories', 'video'));
    }

    public function update (YoutubeRequest $request, $id) {
        $youtube = Youtube::find($id);
        $youtube->cid = $request->selCate;
        $cate_id = DB::table('categories')->where('id', '=', (int)$request->selCate)->select('categories.pid')->get();
        $youtube->pid = $cate_id[0]->pid;
        $youtube->uid = Auth::user()->id;
        $youtube->title = $request->txtTitle;
        $youtube->alias = $request->txtLink;
        $youtube->time_video = $request->time_video;
        $youtube->viewCount = $request->sumView;
        $youtube->likeCount = $request->sumLike;
        $youtube->dislikeCount = $request->sumDislike;
        $youtube->author = $request->nameChange;
        $youtube->id_video = $request->id_video;
        $youtube->description = $request->textDes;
        $youtube->keyword = $request->txtKeyword;
        $youtube->status = empty($request->video_status) ? 0 : 1;
        $youtube->created_at = strtotime($request->timeCreated);
        $youtube->updated_at = strtotime($request->timeCreated);
        $youtube->update();
        return back()->with('success', 'Cập nhật danh mục thành công.');
    }

    public function delete($id) {
        $youtube = Youtube::find($id);
        $youtube->delete();
        return back();
    }
}
