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
use App\Tax;
use App\Resource;
use Alert;

class ResourceController extends Controller
{
  public function getRoleAdmin() {
      $rolesyangberhak = DB::table('roles')->where('id','=','2')->first()->namaRule;
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
        $resources = DB::table('resource')->orderBy('id','desc')->get();
        return view('partial.resource')->with(compact('articles','resources'));
    }
}
