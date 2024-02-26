<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Contacto</title>
    <!-- Agregar enlaces a los estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Agregar Nuevo Contacto</h1>
        <form action="{{ route('directorio.guardarContacto') }}" method="POST">
            @csrf
            <!-- Campo oculto para el código de entrada -->
            <input type="hidden" name="codigoEntrada" value="{{ $codigoEntrada }}">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control" required>
            </div>
            <!-- Botón Guardar -->
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <!-- Botón Regresar -->
        <a href="{{ route('directorio.mostrarContacto', $codigoEntrada) }}" class="btn btn-secondary">Regresar</a>
    </div>
</body>
</html>
