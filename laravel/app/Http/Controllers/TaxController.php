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


class TaxController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');

  }
  public function working(){
    $articles = DB::table('article')->limit(1)->get();
    // var_dump($articles);die();
    return view('partial.workinggroup')->with(compact('articles'));
  }
  public function index()
  {
    $taxs = DB::table('data_anggota')->where('division','=','Tax')->get();
    $docs = DB::table('tb_upload')->where('division','=','Tax')->get();
    $articles = DB::table('article')->where('id','=','1')->get();
    // $taxs = DB::select('select data_anggota.*,tb_upload.* from data_anggota,tb_upload');
    // $taxs = DB::table('tb_upload')->get();
    // var_dump($articles,$taxs,$docs);die();
    // return view('partial.tax',  ['taxs' => $taxs], ['docs' => $docs], ['articles' => $articles]);
    return view('partial.tax')->with(compact('taxs', 'docs', 'articles'));

    // return view('tax',['docs' => $docs]);

  }
  public function upload(Request $request)
  {
      if ($request->hasFile('tes')) {
         $namafile = $request->file('tes')->getClientOriginalName();
         $ext = $request->file('tes')->getClientOriginalExtension();
         // var_dump($ext); die();
         $lokasifileskr = '/upload/'.$namafile;
         //cek jika file sudah ada...
         $cekdivisi = Auth::User()->division;
         $cekname = Auth::User()->name;
         // var_dump($cekdivisi);die();
         if ($cekdivisi == 'Tax') {
           $destinasi = public_path('/upload');
           $proses = $request->file('tes')->move($destinasi,$namafile);

           $taxs = new Tax;
           $taxs->title = $request->title;
           $taxs->uploaded_by = $cekname;
           $taxs->division = $cekdivisi;
           $taxs->file = $lokasifileskr;
           $taxs->save();

           return redirect('/workinggroup/tax')->with('message','data berhasil ditambahkan!!');
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
