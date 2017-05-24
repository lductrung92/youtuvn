<?php

namespace App\Http\Controllers\PageHome;

use App\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index () {
        $sl_video_left = DB::table('youtubes')
            ->select('youtubes.*')
            ->where('is_playlist', '=', 1)
            ->orderBy('created_at', 'DESC')
            ->offset(0)->limit(4)
            ->get();

        $sl_video_right = DB::table('youtubes')
            ->select('youtubes.*')
            ->where('is_playlist', '=', 1)
            ->orderBy('created_at', 'DESC')
            ->offset(4)->limit(8)
            ->get();

    	$new_videos = DB::table('youtubes')
    		->select('youtubes.*')
            ->where('is_playlist', '=', 0)
    		->orderBy('created_at', 'DESC')
    		->paginate(6);

    	$most_popular = DB::table('youtubes')
    		->select('youtubes.*')
            ->where('is_playlist', '=', 0)
            ->orderBy('viewCount')
    		->take(6)
    		->get();

        return View::make('page_home.index', compact('new_videos', 'most_popular', 'sl_video_left', 'sl_video_right'));
    }
}
