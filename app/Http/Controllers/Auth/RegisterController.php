<?php

namespace App\Http\Controllers\Auth;

use App\Utilizador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


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
    protected $redirectTo = '/';

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:utilizadors'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'cidade'=>['required', 'string'],
            'pais'=>['required', 'string'],
//            'avatar'=>['required']

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

//
//        $random=rand ( 0 , 999999);
//        $random2=rand ( 0 , 9999999 );
//        $random3=rand ( 0 , 9999999 );
//
//        $fileOriginalName= $data["avatar"];
//
//
//        $img_profile =$random."_".$random2.$random3.".".File::extension($fileOriginalName);
//dd($data);
//        $filecontents= file_get_contents($data["avatar"]);
//
//
//        $download=Storage::disk('public')->put('Fotos_utilizadores/'.$img_profile, $filecontents);
//
//        $path = storage_path();
//

        return Utilizador::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cidade_utilizador'=> $data['cidade'],
            'pais_utilizador'=> $data['pais'],
//            'img_profile_utilizador'=>$img_profile
        ]);
    }
}
