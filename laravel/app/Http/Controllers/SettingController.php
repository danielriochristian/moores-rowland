<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Response;
use Auth;
use DB;
use App\User;
use App\Role;
use App\Resource;
use App\Article;
use Yajra\Datatables\Facades\Datatables;

class SettingController extends Controller
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
  $resources = DB::table('resource')->get();
  $articles = DB::table('article')->where('id','=','1')->get();
  return view('partial.sitesetting')->with(compact('articles','resources'));
}
public function editsetting(request $request){
$manage = Article::find ($request->id);
$manage->title = $request->title;
$manage->article = $request->article;
$manage->change_by = $request->change_by;
$manage->save();
return response()->json($manage);
}
public function sitetb(){
    return Datatables::of(Article::query())
        ->addColumn('action', function ($datatb) {
            return
            '<button data-id="'.$datatb->id.'" data-keterangan="'.$datatb->ketengaran.'" data-title="'.$datatb->title.'" data-article="'.$datatb->article.'"  class="edit-modal btn btn-xs btn-info" type="submit"><i class="fa fa-edit"></i> Ubah</button>';
        })
        ->make(true);
}
}
