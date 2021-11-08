<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\member;
use App\Models\partnershop;
use App\Models\forum;
use App\Models\isiforum;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Support\Facades\Session;

class kebunpediacontroller extends Controller
{

    public function __construct()
    {
        //
    }

    public function home(Request $request){
        $partnershops= partnershop::latest()->limit(5)->get();
        $forums= forum::latest()->limit(5)->get();
        $pin=session('Hak');
        $nama=session('nama');
        $data='';
        switch ($pin) {
            case "member":
                $data = DB::table('members')->where('email', $nama)->get();
                $hak=1;
                break;
            case "admin":
                $members= member::all();
                $hak=2;
                return view('admin.index',['members' => $members]);
                 break;
            case "tutor":
                $data = DB::table('tutors')->where('email', $nama)->get();

                $hak=3;
                break;
            default:
                $hak=0;
          }
        return view('user.home',['hak' => $hak,'data' => $data,'pin'=>$pin , 'partnershops'=>$partnershops,'forums'=>$forums]);
    }

    public function shop(Request $request){
        $partnershops= partnershop::all();
        $pin=session('Hak');
        $nama=session('nama');
        $data='';
        switch ($pin) {
            case "member":
                $data = DB::table('members')->where('email', $nama)->get();
                $hak=1;
                break;
            case "admin":
                $hak=2;
                 break;
            case "tutor":
                $data = DB::table('tutors')->where('email', $nama)->get();
                $hak=3;
                break;
            default:
                $hak=0;
          }
        return view('user.shop',['hak' => $hak,'data' => $data,'partnershops'=>$partnershops]);
    }

    public function forum(Request $request){
        $forums= forum::all();
        $pin=session('Hak');
        $nama=session('nama');
        $data='';
        switch ($pin) {
            case "member":
                $data = DB::table('members')->where('email', $nama)->get();
                $hak=1;
                break;
            case "admin":
                $hak=2;
                 break;
            case "tutor":
                $data = DB::table('tutors')->where('email', $nama)->get();
                $hak=3;
                break;
            default:
                $hak=0;
                return redirect('/');
          }
        return view('user.forum',['hak' => $hak,'data' => $data,'forums'=>$forums]);
    }
    public function isiforum(Request $request){
        $forums= forum::all();
        $pin=session('Hak');
        $nama=session('nama');
        $judul=$request->id;
        $data='';
        switch ($pin) {
            case "member":
                $data = DB::table('members')->where('email', $nama)->get();
                $hak=1;
                break;
            case "admin":
                $hak=2;
                 break;
            case "tutor":
                $data = DB::table('tutors')->where('email', $nama)->get();
                $hak=3;
                break;
            default:
                $hak=0;
                return redirect('/');
          }
          $data1 = DB::table('forums')->where('id', $judul)->get();
          $poin=$data1[0]->deskripsi;
          $pesan = DB::table('isiforums')->where('deskripsi', $poin)->get();
          return view('user.isiforum',['hak' => $hak,'data' => $data,'data1' => $data1,'forums'=>$forums, 'pesan'=>$pesan]);
    }
    public function createForum(Request $request){
        $forums= forum::all();
        $pin=session('Hak');
        $nama=session('nama');
        $data='';
        switch ($pin) {
            case "member":
                $data = DB::table('members')->where('email', $nama)->get();
                $hak=1;
                break;
            case "admin":
                $hak=2;
                 break;
            case "tutor":
                $data = DB::table('tutors')->where('email', $nama)->get();
                $hak=3;
                break;
            default:
                $hak=0;
                return redirect('/');
          }
        return view('user.createForum',['hak' => $hak,'data' => $data,'forums'=>$forums]);
    }

    public function start(){
        return view('page.start');
    }

    public function login(){
        $error="";
        return view('page.login',['error'=>$error]);
    }

    public function register(){
        return view('page.register');
    }




    // Controller Member Data
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'email' => 'required',
            'password' => 'required',
            'foto' =>'',
            'alamat' =>'',
        ]);
        member::create($validateData);
        return view('page.start');
    }
    public function createforumsub(Request $request)
    {
        $validateData = $request->validate([
            'judul'          => 'required',
            'pembuat'          => 'required',
            'deskripsi' => 'required',
            'tags1' => 'required',
            'tags2' => '',
            'tags3' => '',
            'foto' => '',
        ]);
        forum::create($validateData);
        return redirect('/forum');
    }
    public function sendForum(Request $request)
    {
        $validateData = $request->validate([
            'penulis'          => 'required',
            'isi'          => 'required',
            'deskripsi' => 'required',
            'judul' => 'required',
        ]);
        isiforum::create($validateData);
        return redirect()->back();
    }

    public function autentikasi(Request $request)
    {
        $user=$request->get('user');
        $pass=$request->get('password');
        // $result1 = DB::select('SELECT * FROM `members` WHERE email = "'.$user.'" AND password = "'.$pass.'"');
        $result1 = DB::table('members')->where('email', $user)->where('password', $pass)->count();
        $result2 =  DB::table('admins')->where('email', $user)->where('password', $pass)->count();
        $result3 =  DB::table('tutors')->where('email', $user)->where('password', $pass)->count();
        if($result1==1){
            session(['Hak'=> 'member','nama'=>$user]);
        }
        else if($result2==1){
            session(['Hak'=> 'admin','nama'=>$user]);
        }
        else if($result3==1){
            session(['Hak'=> 'tutor','nama'=>$user]);
        }
        else{
        }
        return redirect('/');
    }

    public function logout(){
       Session::flush();
        return redirect('/');
    }

    public function insert(Request $request){
        $data=new member();
        $data->nama='Samuel';
        $data->jenis_kelamin='l';
        $data->pekerjaan='menanam';
        $data->email='Samuel@gmail.com';
        $data->password='1222';
        $data->save();
        dump($data);
    }

    public function delete($id){
        $data=member::find($id);
           $data->delete();
           return back();
    }

    // Controller Admin Data

    // Controller partnershop Data
}
