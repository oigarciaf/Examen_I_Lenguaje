<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación de Registro</title>
    <!-- Agregar enlaces a los estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Eliminación de Registro</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $directorio->codigoEntrada }}</td>
                    <td>{{ $directorio->nombre }}</td>
                    <td>{{ $directorio->apellido }}</td>
                    <td>{{ $directorio->telefono }}</td>
                </tr>
            </tbody>
        </table>
        <form action="{{ route('directorio.destroy', $directorio->codigoEntrada) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Confirmar</button>
            <a href="{{ route('directorio.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

