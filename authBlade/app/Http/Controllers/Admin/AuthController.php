<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('admin.index');
    }

    public function showDeash(){
        return view('admin.dashboard');
    }
    
    public function login(Request $request){
        if(in_array('',$request->only('email','password'))){
            $json['message'] = "informe todos dados";
            return response()->json($json);
        }

        if(!filter_var($request->email,FILTER_VALIDATE_EMAIL)){
            $json['message'] = "informe um email valido";
            return response()->json($json);
        }

        $credentials =[
         'email'=>$request->email,
         'password'=>$request->password
        ];

        if(!Auth::attempt($credentials)){
            $json['message'] = "Usuario e senha não confere";
            return response()->json($json);
        }

        $json['redirect'] = route('admin.home');
        var_dump($request->all());
    }
}
