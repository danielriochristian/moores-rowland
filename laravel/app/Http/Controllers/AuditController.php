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
use Alert;

class AuditController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');

  }
    public function index()
    {
      $taxs = DB::table('data_anggota')->where('division','=','Audit')->get();
      $docs = DB::table('tb_upload')->where('division','=','Audit')->get();
      $articles = DB::table('article')->where('id','=','1')->get();
      return view('partial.audit')->with(compact('taxs', 'docs', 'articles'));

      // return view('tax',['docs' => $docs]);
      // var_dump($taxs,$docs);die();

    }
    public function upload(Request $request)
    {
        if ($request->hasFile('tes')) {
           $namafile = $request->file('tes')->getClientOriginalName();
           // $ext = $request->file('tes')->getClientOriginalExtension();
           $lokasifileskr = '/upload/'.$namafile;
           //cek jika file sudah ada...
           $cekdivisi = Auth::User()->division;
           $cekname = Auth::User()->name;
           // var_dump($cekdivisi);die();
           if ($cekdivisi == 'Audit') {
             $destinasi = public_path('/upload');
             $proses = $request->file('tes')->move($destinasi,$namafile);

             $taxs = new Tax;
             $taxs->title = $request->title;
             $taxs->uploaded_by = $cekname;
             $taxs->division = $cekdivisi;
             $taxs->file = $lokasifileskr;
             $taxs->save();

             return redirect('/workinggroup/audit')->with('message','data berhasil ditambahkan!!');
           }
           else {
             return Redirect::back()->withErrors(['anda tidak memiliki akses']);
           }
         }
       }
       public function showDocument()
       {
         $docs = DB::table('tb_upload')->get();
         return view('partial.tax',['docs' => $docs]);
       }

       // public function getDownload()
       // {
       //   $file= public_path(). "/download/info.pdf";
       //   return response()->download($file, 'filename.pdf');
       // }
}
