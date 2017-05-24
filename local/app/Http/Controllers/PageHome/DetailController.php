<?php

namespace App\Http\Controllers\PageHome;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class DetailController extends BaseController
{
    public function index ($keyword) {

    	$is_category = DB::table('categories')
    					->where('alias', '=', $keyword)
    					->get();

    	$video = DB::table('youtubes')
    		->where('alias', '=', $keyword)
    		->get();

    	if(count($is_category) > 0 && count($video) == 0) {
    		$cate = Category::find($is_category[0]->id);
    		if(count($cate->childs) > 0 && count($cate->parent) > 0) {

    			$sl_video_left = DB::table('youtubes')
		            ->select('youtubes.*')
		            ->where('is_playlist', '=', 1)
		            ->where('pid', '=', $is_category[0]->id)
		            ->orderBy('created_at', 'DESC')
		            ->offset(0)->limit(4)
		            ->get();

		        $sl_video_right = DB::table('youtubes')
		            ->select('youtubes.*')
		            ->where('is_playlist', '=', 1)
		            ->where('pid', '=', $is_category[0]->id)
		            ->orderBy('created_at', 'DESC')
		            ->offset(4)->limit(8)
		            ->get();

    			$new_videos = DB::table('youtubes')
		    		->select('youtubes.*')
		    		->where('pid', '=', $is_category[0]->id)
		            ->where('is_playlist', '=', 0)
		    		->orderBy('created_at', 'DESC')
		    		->paginate(6);

		    	$most_popular = DB::table('youtubes')
		    		->select('youtubes.*')
		    		->where('pid', '=', $is_category[0]->id)
		            ->where('is_playlist', '=', 0)
		    		->orderBy('viewCount')
		    		->take(6)
		    		->get();

    			return View::make('page_home.index', compact('new_videos', 'most_popular', 'sl_video_left', 'sl_video_right'));
    		} elseif(count($cate->childs) > 0 && count($cate->parent) == 0) {
    			echo '1';
    		} elseif(count($cate->childs) == 0 && count($cate->parent) > 0) {
    			$sl_video_left = DB::table('youtubes')
		            ->select('youtubes.*')
		            ->where('is_playlist', '=', 1)
		            ->where('cid', '=', $is_category[0]->id)
		            ->orderBy('created_at', 'DESC')
		            ->offset(0)->limit(4)
		            ->get();

		        $sl_video_right = DB::table('youtubes')
		            ->select('youtubes.*')
		            ->where('is_playlist', '=', 1)
		            ->where('cid', '=', $is_category[0]->id)
		            ->orderBy('created_at', 'DESC')
		            ->offset(4)->limit(8)
		            ->get();

    			$new_videos = DB::table('youtubes')
		    		->select('youtubes.*')
		    		->where('cid', '=', $is_category[0]->id)
		            ->where('is_playlist', '=', 0)
		    		->orderBy('created_at', 'DESC')
		    		->paginate(6);

		    	$most_popular = DB::table('youtubes')
		    		->select('youtubes.*')
		    		->where('cid', '=', $is_category[0]->id)
		            ->where('is_playlist', '=', 0)
		    		->orderBy('viewCount')
		    		->take(6)
		    		->get();
    			return View::make('page_home.index', compact('new_videos', 'most_popular', 'sl_video_left', 'sl_video_right'));
    		}

    	} elseif(count($is_category) == 0 && count($video) > 0)  {
    		$video_detail = $video[0];
    		$tag = Category::find($video_detail->cid);

    		if($video_detail->is_playlist == 1) {
    			$related = DB::table('youtubes')
    					->where('cid', '=', $video_detail->cid)
    					->where('is_playlist', '=', 1)
    					->orderBy('viewCount')
			    		->take(6)
			    		->get();
    			return view('page_home.detail_playlist', compact('video_detail', 'tag', 'related'));
    		} else {
    			$related = DB::table('youtubes')
    					->where('cid', '=', $video_detail->cid)
    					->where('is_playlist', '=', 0)
    					->orderBy('viewCount')
			    		->take(6)
			    		->get();
    			return view('page_home.detail', compact('video_detail', 'tag', 'related'));
    		}
    	}
    }
}
