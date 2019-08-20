<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use App\Pelanggan;
Use Session;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function registerPelanggan(){
        return view('fn.register_pelanggan');
    }

    public function storeDataPelanggan(Request $request){
        $pelanggan = Pelanggan::where('email',$request->email)->get();
        if(count($pelanggan) > 0){
            session::flash('message','email pernah terdaftar');            
            return redirect('registerPelanggan');
        } else {
            
            $pelanggan = new Pelanggan();
            $pelanggan->email = $request->email;
            $pelanggan->nama = $request->nama;
            $pelanggan->password = $request->password;
            $pelanggan->nohp = $request->no_hp;
            $pelanggan->address = $request->alamat;
            $pelanggan->save();

            print_r($pelanggan->id);
            session(['login' => true, 'id' => $pelanggan->id, 'message' => 'register sukses']);
            return redirect('indexPelanggan');
        }
    }
}
