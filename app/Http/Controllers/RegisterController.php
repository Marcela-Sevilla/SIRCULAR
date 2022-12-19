<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
  public function register(Request $request){
    $request->validate([
        'nombre'=>'required',
        'correo'=>'required',
        'tipo_usuario'=>'required',
        'identificacion'=>'required',
        'password'=>'required'
    ]);

    $user = new User();

    $user->nombre = $request->nombre;
    $user->email = $request->correo;
    $user->tipo_usuario = $request->tipo_usuario;
    $user->identificacion = $request->identificacion;
    $user->password = Hash::make($request->password);

    $user->save();
    Auth::login($user);
    Auth::user();

    return redirect(route('Sircular'));

  }

  public function login(Request $request){
    $credentials = [
      'email'=> $request->correo,
      'password'=> $request->password,
    ];

    $remember = true;

    if(Auth::attempt($credentials,$remember)){
      return redirect(route('Sircular'));
    }else{
      return redirect()->route('Login')->with('error','El usuario no se encuentra registrado!');
    }

  }

  public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerate();
    return redirect(route('Sircular'));
  }

}