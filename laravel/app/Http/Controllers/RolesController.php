<?php

namespace App\Http\Controllers;
use App\Admin;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Role;

class RolesController extends Controller
{
  public function getRoleAdmin() {
      $rolesyangberhak = DB::table('roles')->where('id','=','1')->first()->namaRule;
      return $rolesyangberhak;
      // var_dump($rolesyangberhak); die();
  }
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('rule:'.$this->getRoleAdmin().',nothingelse');
  }
    public function index(){
      $articles = DB::table('article')->where('id','=','1')->get();
      $manage = Role::paginate(4);
      return view('partial.roles')->with(compact('manage','articles'));
    }

    public function editPost(request $request){
    $manage = Role::find ($request->id);
    $manage->namaRule = $request->namaRule;
    $manage->save();
    return response()->json($manage);
    }

    public function manageroletb(){
        return Datatables::of(Role::query())
            ->addColumn('action', function ($datatb) {
                return
                '<button data-id="'.$datatb->id.'" data-roles="'.$datatb->namaRule.'"  class="edit-modal btn btn-xs btn-info" type="submit"><i class="fa fa-edit"></i> Ubah</button>';
            })
            ->make(true);
  }
}
