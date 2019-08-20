<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Pelanggan;
use Illuminate\Http\Request;
Use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginPelanggan(){
        return view('fn.login_pelanggan');
    }

    public function authPelanggan(Request $request){
        $pelanggan = Pelanggan::where('email',$request->email)->where('password',$request->password)->get();
        if(count($pelanggan) > 0){
            session(['login' => true, 'id' => $pelanggan[0]->id, 'message' => 'login sukses']);
            return redirect('indexPelanggan');
        } else {
            session::flash('message','login gagal');            
            return redirect('loginPelanggan');
        }
    }

    public function indexPelanggan(){
        if(session('login')){
            return view('fn.index');
        } else {
            return redirect('loginPelanggan');
        }
    }


}
