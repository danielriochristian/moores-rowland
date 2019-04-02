<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Response;
use Auth;
use DB;
use App\User;
use App\Role;
use App\Articles;

class SuperController extends Controller
{
  public function getRoleAdmin() {
  $rolesyangberhak = DB::table('roles')->where('id','=','1')->first()->namaRule;
  return $rolesyangberhak;
}
public function __construct()
{
  $this->middleware('auth');
  $this->middleware('rule:'.$this->getRoleAdmin().',nothingelse');
}

public function index()
{
  $articles = DB::table('article')->where('id','=','1')->get();
  $home = DB::table('article')->where('id','=','2')->get();
  return view('partial.home')->with(compact('articles','home'));
}
}
