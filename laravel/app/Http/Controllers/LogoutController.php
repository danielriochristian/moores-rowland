<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Admin;
use Illuminate\Support\Facades\Redirect;

class LogoutController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
    public function Logout(Request $request) {
    Auth::logout();
    return redirect('/login_admin');
  }
}
