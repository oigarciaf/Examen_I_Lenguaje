<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Contacto;


class ContactoController extends Controller
{
       
public function guardarContacto(Request $request)
{
    // Validación de los datos del formulario
    $request->validate([
        'codigoEntrada' => 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
    ]);

    $contacto = new Contacto();
    $contacto->codigoEntrada = $request->codigoEntrada;
    $contacto->nombre = $request->nombre;
    $contacto->apellido = $request->apellido;
    $contacto->telefono = $request->telefono;
    // Guardar el nuevo contacto en la base de datos
    $contacto->save();

    // Redirigir de vuelta a la lista de contactos
    return redirect()->route('vercontactos', ['codigoEntrada' => $request->codigoEntrada]);

}

    public function eliminarContacto($id)
    {
        // Encuentra y elimina el contacto
        Contacto::where('id', $id)->delete();

        // Redirigir de vuelta a la lista de contactos
        return redirect()->back();
    }
}
