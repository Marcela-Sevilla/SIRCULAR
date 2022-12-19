<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactanos;

class ContactanosController extends Controller
{
    //
    public function mensaje(Request $request){
        $request->validate([
            'nombre'=>'required|min:5',
            'correo'=>'required|min:10',
            'mensaje'=>'required'
        ]);

        $mensaje = new Contactanos;

        $mensaje->nombre_usuario = $request->nombre;
        $mensaje->correo = $request->correo;
        $mensaje->mensaje = $request->mensaje;

        $mensaje->save();

        return redirect()->route('Sircular')->with('success','Envío de mensaje exitoso!');

    }
}
