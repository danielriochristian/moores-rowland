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
use Yajra\Datatables\Facades\Datatables;


class ManageResourcesController extends Controller
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
  return view('partial.superresources')->with(compact('articles','resources'));
}
public function upload(Request $request)
{
    if ($request->hasFile('tes')) {
       $namafile = $request->file('tes')->getClientOriginalName();
       // $ext = $request->file('tes')->getClientOriginalExtension();
       $lokasifileskr = '/upload/'.$namafile;
       //cek jika file sudah ada...
       // var_dump($cekdivisi);die();
         $destinasi = public_path('/upload');
         $proses = $request->file('tes')->move($destinasi,$namafile);

         $resource = new Resource;
         $resource->title = $request->title;
         $resource->content = $request->content;
         $resource->uploaded_by = $request->admin;
         $resource->file = $lokasifileskr;
         $resource->save();

         return redirect('resources')->with('message','data berhasil ditambahkan!!');
       }
}
public function resourcetb(){
    return Datatables::of(Resource::query())
        ->addColumn('action', function ($datatb) {
            return
        //     '<button data-id="'.$datatb->id.'" data-roles="'.$datatb->namaRule.'"  class="edit-modal btn btn-xs btn-info" type="submit"><i class="fa fa-edit"></i> Ubah</button>';
        '<button data-id="'.$datatb->id.'" class="delete-modal btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>';
        })
        ->make(true);
}

public function deleteresource(request $request){
$manage = Resource::find ($request->id)->delete();
return response()->json();
}

}
