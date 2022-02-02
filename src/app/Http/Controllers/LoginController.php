<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
        if($request->expectsJson()) {
            return redirect('dashboard');
        }
        return view('login_page');

    }
}
