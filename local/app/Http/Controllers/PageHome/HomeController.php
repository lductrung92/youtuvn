<?php

namespace App\Http\Controllers\PageHome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index () {
        return View::make('page_home.base.base');
    }
}
