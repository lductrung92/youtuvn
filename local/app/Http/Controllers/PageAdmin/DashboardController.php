<?php

namespace App\Http\Controllers\PageAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function index () {
        return View::make('page_admin.dashboard');
    }
}
