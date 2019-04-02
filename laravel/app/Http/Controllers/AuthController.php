<?php

namespace App\Http\Controllers;

use App\Admin;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Role;

class AuthController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');

  }
  public function getRoot() {
    if (Auth::User()->roles_id == 1) {
    return redirect('home');
    } elseif (Auth::User()->roles_id == 2) {
      return redirect('homeadmin');
    // return redirect('homeadmin');
  }else {
      return 'hai pengguna! saat ini belom ada view nya karena yg buat males nambahin :V buat logout ketik /logout di akhiran lalu enter';
    }
  }

  // public function getRoot() {
  //   if (Auth::User()->roles_id == 1) {
  //   return redirect('dashboard');
  //   } elseif (Auth::User()->roles_id == 2) {
  //   return view('workinggroup');
  // }else {
  //     return 'hai pengguna! saat ini belom ada view nya karena yg buat males nambahin :V buat logout ketik /logout di akhiran lalu enter';
  //   }
  // }
}
