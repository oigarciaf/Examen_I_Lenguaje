<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
    <!-- Agregar enlaces a los estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Lista de Contactos</h1>
        <h2>Información de la Entrada</h2>
        <p>Código de Entrada: {{ $directorio->codigoEntrada }}</p>
        <p>Nombre: {{ $directorio->nombre }}</p>
        <p>Apellido: {{ $directorio->apellido }}</p>
        
        <h2>Contactos</h2>
        <a href="{{ route('directorio.agregarContactoForm', ['codigoEntrada' => $directorio->codigoEntrada]) }}" class="btn btn-primary mb-3">Agregar Contacto</a>
        @if ($contactos)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contactos as $contacto)
                <tr>
                    <td>{{ $contacto->id }}</td>
                    <td>{{ $contacto->nombre }}</td>
                    <td>{{ $contacto->apellido }}</td>
                    <td>{{ $contacto->telefono }}</td>
                    <td>
                        <form action="{{ route('contacto.eliminar', $contacto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>No hay contactos disponibles.</p>
        @endif
        
        <a href="{{ route('directorio.index') }}" class="btn btn-secondary">Regresar</a>
    </div>
</body>

</html>
