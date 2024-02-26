<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio telefónico</title>
    <!-- Agregar enlaces a los estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Directorio telefónico</h1>
        <div class="mb-3">
            <a href="{{ route('directorio.create') }}" class="btn btn-primary">Agregar nuevo</a>
            <a href="{{ route('directorio.buscar') }}" class="btn btn-secondary">Buscar Entrada</a>

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Ver Contactos</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($directorios as $directorio)
                <tr>
                    <td>{{ $directorio->codigoEntrada }}</td>
                    <td>{{ $directorio->nombre }}</td>
                    <td>{{ $directorio->apellido }}</td>
                    <td>{{ $directorio->telefono }}</td>
                    <td>
                        <a href="{{ route('directorio.show', $directorio->codigoEntrada) }}" class="btn btn-info">Ver</a>

                    </td>
                    <td>
                        <td>
                            <a href="{{ route('directorio.confirmarEliminacion', $directorio->codigoEntrada) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
