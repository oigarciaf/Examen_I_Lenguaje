<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Entrada Directorio</title>
    <!-- Agregar enlaces a los estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Crear Nueva Entrada Directorio</h1>
        <form action="{{ route('directorio.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="codigoEntrada">Código:</label>
                <input type="text" name="codigoEntrada" class="form-control">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" class="form-control">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" class="form-control">
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('directorio.index') }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
</body>
</html>

