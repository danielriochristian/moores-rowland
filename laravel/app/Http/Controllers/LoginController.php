<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Admin;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function index(){
      return view ('login.login');
    }

  public function postLogin(Request $request)
  {
    if (Auth::attempt ([
        'email' => $request->email,
        'password' => $request->password
      ]))
    {
      return redirect('dashboard')->with('status', 'Anda Telah berhasil login!');
    }
    else {
      return Redirect::back()->withErrors(['Password atau email anda salah!']);
    }
  }
}
