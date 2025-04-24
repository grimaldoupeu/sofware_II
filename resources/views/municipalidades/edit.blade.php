<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Municipalidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Municipalidad</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('municipalidades.update', $municipalidad->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la Municipalidad:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $municipalidad->nombre) }}" required>
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $municipalidad->titulo) }}">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion', $municipalidad->descripcion) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="redes_url" class="form-label">URL Principal:</label>
                <input type="text" name="redes_url" id="redes_url" class="form-control" value="{{ old('redes_url', $municipalidad->redes_url) }}">
            </div>

            <div class="mb-3">
                <label for="red_facebook" class="form-label">Facebook:</label>
                <input type="text" name="red_facebook" id="red_facebook" class="form-control" value="{{ old('red_facebook', $municipalidad->red_facebook) }}">
            </div>

            <div class="mb-3">
                <label for="red_twitter" class="form-label">Twitter:</label>
                <input type="text" name="red_twitter" id="red_twitter" class="form-control" value="{{ old('red_twitter', $municipalidad->red_twitter) }}">
            </div>

            <div class="mb-3">
                <label for="red_whatsapp" class="form-label">WhatsApp:</label>
                <input type="text" name="red_whatsapp" id="red_whatsapp" class="form-control" value="{{ old('red_whatsapp', $municipalidad->red_whatsapp) }}">
            </div>

            <div class="mb-3">
                <label for="coordenadas_x" class="form-label">Coordenadas X:</label>
                <input type="text" name="coordenadas_x" id="coordenadas_x" class="form-control" value="{{ old('coordenadas_x', $municipalidad->coordenadas_x) }}">
            </div>

            <div class="mb-3">
                <label for="coordenadas_y" class="form-label">Coordenadas Y:</label>
                <input type="text" name="coordenadas_y" id="coordenadas_y" class="form-control" value="{{ old('coordenadas_y', $municipalidad->coordenadas_y) }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('municipalidades.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
