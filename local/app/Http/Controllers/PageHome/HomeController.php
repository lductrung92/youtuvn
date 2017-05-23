<?php

namespace App\Http\Controllers\PageHome;

use App\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index () {
    	$new_videos = DB::table('youtubes')
    		->select('youtubes.*')
    		->orderBy('created_at', 'DESC')
    		->paginate(6);

    	$most_popular = DB::table('youtubes')
    		->select('youtubes.*')
    		->orderBy('viewCount')
    		->take(6)
    		->get();
        return View::make('page_home.index', compact('new_videos', 'most_popular'));
    }
}
