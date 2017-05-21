<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Auth;

class AuthController extends Controller
{
    public function showFormLogin () {
    	return View::make('page_admin.login');
    }

    public function login (AdminLoginRequest $request) {
    	$email = $request->input('email');
    	$password = $request->input('password');

		if( Auth::attempt(['email' => $email, 'password' =>$password])) {
			return redirect('administrator/dashboard');
		} else {
			return back()->with('auth_error', 'E-mail hoặc mật khẩu không đúng.');
		}
    }

    public function logout () {
    	Auth::logout();
    	return redirect('administrator/login');
    }
    
}
