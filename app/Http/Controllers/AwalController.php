<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;

class AwalController extends Controller
{
    public $nama;
    public $sandi;
    public $user;

    public function _construct(){

        $this->middleware('auth')->only(['login']);
        $this->middleware('auth')->only(['index']);
        $this->middleware('auth')->only(['register']);


    }


    public function index(){
        //echo "Halo Kamu ngakses Controller Awal pada function index";
        //return view('form');
        // if (Session::has('login'))
        // {
        //     $previous = Session::get('previous');
        //     return redirect($previous);
        // }else{
            return view('index');
        // }

    }

    public function login(){
        
        if (Session::has('login'))
        {   
            // Session::put('previous', url()->full());
            // $previous = Session::get('previous');
            $previous = url()->previous();
            return redirect($previous);
        }else{
            return view('login');
        }

        // if (Session::has('user'))
        // {
        //     $previous = Session::get('previous');
        //     return redirect($previous);
        // }
        
    }

    
    public function authenticate(Request $request){
        $nama = $request->input('nama_user');
        $sandi = $request->input('kata_sandi');
        if($nama != $sandi){
            // echo '<script language="javascript">';
            // echo 'alert("Eror")';
            // echo '</script>';
            return redirect('/login')->with(['error' => 'Nama dan dan sandi tidak sama']);
            // return redirect('/login');
        } else {
            $request->session()->put('nama',$nama);
            //  return "Nama : ".$nama.", Sandi : ".$sandi;
            
            // $this->middleware('admin');
            
            Session::put('login',TRUE);
            if (Session::has('previous'))
            {   
                
                $previous = Session::get('previous');
                return redirect($previous);
                
                
            }else
            { return redirect('/index2');
            
            }
            
            // Session::put('user', 'TRUE');
            
            Session::flush();
        }
       
        
    }

    public function register(){
        return view('register');
    }
    
    // menghapus session
	public function logout(Request $request) {
		$request->session()->forget('nama');
        Session::flush();
        return redirect('/login')->with(['success' => 'Berhasil Keluar']);
    }
    

    
// abis login ke about
    // public function about(Request $request)
    // {
    //     if(!\Auth::attempt(['nama_user'=>$request->name,'kata_sandi'=>$request->password])){
    //         return redirect('/login');
            
    //     }else{
    //         return redirect('/about');
    //     }
    // }

    // ABOUT YG UDAH LOGIN
    // public function about2(Request $request) {
    //     // Auth::guard('admin')->about2();
    //     return view('about');

	// 	// return view('about');
        
    // }
    
    public function about() {
        // utk tampilkan current url
        // echo url()->full();
        // die;
        
        if(!Session::get('login')){
            Session::put('previous', url()->full());
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('about');
        }
    

        // return redirect('/login');

		//// return view('about');
        
    }

    public function index2(){
        if(!Session::get('login')){
            Session::put('previous', url()->full());
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('index2');
        }
        
    }

    public function tangkap(Request $req){
        echo $req->input('nama_user');
        echo "<br>";
        echo $req->input('alamat_surat');
    }

    public function profile(){
        // utk tampilkan current url
        // echo url()->full();
        // die;
        
        if(!Session::get('login')){
            Session::put('previous', url()->full());
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            echo 'ini profile';
        }
    }
}