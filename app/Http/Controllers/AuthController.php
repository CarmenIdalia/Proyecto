<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index(){
        return  view('modules/auth/login');
    }


    public function registro(){
        return  view('modules/auth/registro');
    }

    public function registrar(Request $request){
       $item = new User();
         $item->name = $request->name;
            $item->email = $request->email;
            $item->password = Hash::make($request->password); //la contraseña se encripta
            $item->save();
            return to_route('login');
       
    }

    public function logear(Request $request){
      $credentials = [
        'email' => $request->email,
        'password' =>$request->password
      ];

      if (!Auth::attempt($credentials)) {
           return to_route('home');

      }else {
        return to_route('login');
      }
      
    }

    public function logout(){
      Session::flush();
      Auth::logout();
      return to_route('login');

    }

    public function home(){
        return  view('modules/dashboard/home');
    }
}
