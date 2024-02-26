<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Entrada</title>
    <!-- Agregar enlaces a los estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Buscar Entrada</h1>
        <form action="{{ route('directorio.buscarCorreo') }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" id="correo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
            <a href="{{ route('directorio.index') }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
</body>
</html>
