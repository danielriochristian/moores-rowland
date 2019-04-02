<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Admin;
use Yajra\Datatables\Facades\Datatables;
use Response;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Role;
class ManageAdminController extends Controller
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
    public function index(){
        $articles = DB::table('article')->where('id','=','1')->get();
      $manage = Admin::paginate(4);
        return view('partial.manageadmin')->with(compact('manage','articles'));
    }

    public function addPost(Request $request){
    $rules = array(
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
    );
  $validator = Validator::make ( Input::all(), $rules);
  if ($validator->fails())
  return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
  else {
    $manage = new Admin;
    $manage->name = $request->name;
    $manage->email = $request->email;
    $manage->roles_id = $request->roles_id;
    $manage->division = $request->division;
    $manage->perusahaan = $request->perusahaan;
    $manage->password = bcrypt($request['password']);
    // var_dump($manage);die();
    $manage->save();
    return response()->json($manage);
  }
}
    public function editPost(request $request){
    $manage = Admin::find ($request->id);
    $manage->name = $request->name;
    $manage->email = $request->email;
    $manage->roles_id = $request->roles_id;
    $manage->division = $request->division;
    $manage->perusahaan = $request->perusahaan;
    // $manage->password = bcrypt($request['password']);
    $manage->save();
    return response()->json($manage);
    }
    public function deletePost(request $request){
    $manage = Admin::find ($request->id)->delete();
    return response()->json();
    }

    public function userdatatb(){
      return DataTables::of(User::query())
              // ->addColumn('kepunyaan_roles', function($datatb) {
              //   return DB::table('roles')->where('id','=',$datatb->kepunyaan)->get()->first()->namaRule;
              // })
              ->addColumn('action', function ($datatb) {
                  return
                   '<button data-id="'.$datatb->id.'" data-name="'.$datatb->name.'" data-roles="'.$datatb->roles_id.'"  data-division="'.$datatb->division.'" data-email="'.$datatb->email.'"  data-perusahaan="'.$datatb->perusahaan.'"  class="edit-modal btn btn-xs btn-info" type="submit"><i class="fa fa-edit"></i> Edit</button>'
                   .'<div style="padding-top:10px"></div>'
                  .'<button data-id="'.$datatb->id.'" class="delete-modal btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>';
              })
              ->addColumn('Roles', function($datatb) {
              return DB::table('roles')->where('id','=',$datatb->roles_id)->first()->namaRule;
            })

              ->make(true);
    }

}
