<?php

namespace App\Http\Controllers\PageHome;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    function __construct () {
    	$main_menu_items = Category::where('pid', '=', 0)->get();
    	View::share('main_menu_items', $main_menu_items);

    	$most = DB::table('youtubes')
    		->select('youtubes.*')
            ->where('is_playlist', '=', 0)
            ->orderBy('viewCount')
    		->take(2)
    		->get();
    		
    	View::share('most', $most);
    }


}
