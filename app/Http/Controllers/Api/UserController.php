<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request){

        // dd($request->all());die();
        $user = User::where('email',$request->email)->first();
 
        if($user){
 
            if(password_verify($request->password, $user->password)){
                 return response()->json([
                     'success' => 1,
                     'massage' => 'Berhasil Memuat Data'.$user->name,
                     'user' => $user
                 ]);
             }
             return $this->error('Password Salah');
 
         }
         return $this->error('Email Tidak Terdaftar');
     }
 
     public function register(Request $request){
         //name, email, password
 
         $validasi = Validator::make($request->all(),[
             'name' => 'required',
             'email' => 'required|unique:users',
             'password' => 'required|min:6'
 
         ]);
 
         if($validasi->fails()){
             $val = $validasi->errors()->all();
             return $this->error($val[0]);
         }
 
         $user = User::create(array_merge($request->all(),[
             'password' => bcrypt($request->password)
         ]));
         
         if($user){
             return response()->json([
                 'success' => 1,
                 'massage' => 'Register Berhasil',
                 'user' => $user
             ]);
         }
         return $this->error('Registrasi Gagal');   
     }
 
     public function error($pesan){
         return response()->json([
             'success' => 0,
             'massage' => $pesan
         ]);
     }
}
