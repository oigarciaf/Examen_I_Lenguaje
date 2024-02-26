<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
class DirectorioController extends Controller
{

    public function create()
    {
        return view('crearEntrada');
    }


    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'codigoEntrada' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
        ]);

        // Crear una nueva entrada en el directorio
        Directorio::create([
            'codigoEntrada' => $request->codigoEntrada,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
        ]);

        // Redireccionar a la pantalla principal del directorio
        return redirect()->route('directorio.index');
    }

    public function index()
    {
        // Obtener todas las entradas del directorio desde la base de datos
        $directorios = Directorio::all();
        
        // Retornar una vista que muestre las entradas del directorio
        return view('directorio', ['directorios' => $directorios]);

    }

    public function show($codigoEntrada)
    {
        // Aquí puedes cargar la entrada correspondiente y los contactos asociados
        $directorio = Directorio::where('codigoEntrada', $codigoEntrada)->first();
        // Suponiendo que tienes una relación en tu modelo Directorio con los contactos
      
        
    // Verificar si se encontró el directorio
        if ($directorio) {
        // Obtener los contactos asociados al directorio
             $contactos = $directorio->contactos;
        } else {
        // Si no se encontró el directorio, asignar una lista vacía de contactos
         $contactos = [];
    }

    // Cargar la vista con los datos del directorio y los contactos
    return view('verContacto', compact('directorio', 'contactos'));

    }



    //eliminar 
    

    
    public function destroy($codigoEntrada)
    {
        // Encuentra la entrada del directorio por su código de entrada y elimínala
        Directorio::where('codigoEntrada', $codigoEntrada)->delete();
    
        // Redirige al usuario a la página principal del directorio
        return redirect()->route('directorio.index');
    }
    
    public function confirmarEliminacion($codigoEntrada)
    {
        // Encuentra la entrada del directorio por su código de entrada
        $directorio = Directorio::where('codigoEntrada', $codigoEntrada)->first();
    
        // Carga la vista eliminar.blade.php con los detalles de la entrada del directorio
        return view('eliminar', compact('directorio'));
    }


    //buscar

    public function buscar()
        {
            return view('buscar');
        }

        public function buscarCorreo(Request $request)
        {
            $correo = $request->input('correo');
            $directorio = Directorio::where('correo', $correo)->first();
            if ($directorio) {
                return view('verContacto', compact('directorio'));
            } else {
                // Si no se encuentra ningún directorio, redirige a la vista de buscar correo
                return redirect()->route('directorio.buscar')->with('error', 'No se encontró ninguna entrada con ese correo electrónico.');
            }
        }
        



        //crear contacto

        public function agregarContactoForm($codigoEntrada)
        {
            $directorio = Directorio::where('codigoEntrada', $codigoEntrada)->first();

            return view('agregarcontacto', compact('codigoEntrada', 'directorio'));
            
        }


    public function mostrarContacto($codigoEntrada)
        {
            // Aquí puedes cargar la entrada correspondiente y los contactos asociados
            $directorio = Directorio::where('codigoEntrada', $codigoEntrada)->first();
            // Suponiendo que tienes una relación en tu modelo Directorio con los contactos

            // Verificar si se encontró el directorio
            if ($directorio) {
                // Obtener los contactos asociados al directorio
                $contactos = $directorio->contactos;
            } else {
                // Si no se encontró el directorio, asignar una lista vacía de contactos
                $contactos = [];
            }

            // Cargar la vista con los datos del directorio y los contactos
            return view('verContacto', compact('directorio', 'contactos'));
        }
    
}
