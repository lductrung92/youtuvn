<?php

namespace App\Http\Controllers\PageHome;

use App\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index () {
    	$youtubes = new Youtube();
    	$left_videos = $youtubes->get_new_video();

        return View::make('page_home.index', compact('left_videos'));
    }
}
