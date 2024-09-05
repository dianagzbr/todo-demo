<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function listado() {
        $mensajes = Contacto::all();

        return view('listado-contacto', compact('mensajes'));    

        //return view('listado-contacto', ['mensajes' => $mensajes]);

        //return view('listado-contacto', ['mensajes' => Contacto::all()]);
    }

    public function formularioContacto() {
        return view('contact');
    }

    public function guardarFormulario(Request $request) {
    //recibir datos
    //dd('hola');
    //dd($request->all(), $request->nombre);

    //validar datos
    $request->validate([
        'nombre' => 'required|min:3|max:255',
        'correo' => 'required|email',
        'mensaje' => ['required', 'min:10'],
    ]);

    //guardar datos
    $contacto = new Contacto();
    $contacto->nombre = $request->nombre;
    $contacto->correo = $request->correo;
    $contacto->mensaje = $request->mensaje;
    $contacto->save();

    //redireccionar
    return redirect('/mensajes');
    }
}
