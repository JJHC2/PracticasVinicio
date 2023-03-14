<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Usuarios;
use App\Models\TipoUsuarios;

class LoginController extends Controller
{
    public function login(){
        return view('Login.login');
    }
    
 public function validar(Request $request){
    $email =$request->input('email');
    $pass=$request->input('password');
    $consulta = Usuarios::where('email','=',$email)->where('password','=',$pass)->get();

    if(count($consulta)==0){
        return view('Login.login');
    }
    else{
        /* CREAR LAS SESIONES */
        $request->session()->put('session_id',$consulta[0]->id);
        $request-> session()->put('session_name',$consulta[0]->nombre);
        $request>session()->put('session_tipo',$consulta[0]->tipousua_id);

        /* CONSULTA DE LAS SESSION */
        $session_id=$request->session()->get('session_id');
        $session_name=$request->session()->get('session_name');
        $session_tipo=$request->session()->get('session_tipo');

        if($session_tipo == 1){ return view("nivel.administrador"); }
        else{
            if($session_tipo == 2){ 
                return view("nivel.cliente"); 
            }
            else{
                return view("nivel.usuario");
            }
        }
    }
 }   
 public function logout(Request $request){
    $request->session()->forget('session_id');
    $request->session()->forget('session_name');
    $request->session()->forget('session_tipo');
    return view('Login.login');
 }
}
