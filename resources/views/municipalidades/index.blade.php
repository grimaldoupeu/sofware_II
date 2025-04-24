<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Municipalidades</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Listado de Municipalidades</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('municipalidades.create') }}" class="btn btn-primary mb-3">Crear Nueva Municipalidad</a>

        @if($municipalidades->isEmpty())
            <p class="text-muted">No hay municipalidades registradas.</p>
        @else
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($municipalidades as $municipalidad)
                        <tr>
                            <td>{{ $municipalidad->id }}</td>
                            <td>{{ $municipalidad->nombre }}</td>
                            <td>
                                <a href="{{ route('municipalidades.edit', $municipalidad->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('municipalidades.destroy', $municipalidad->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta municipalidad?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Incluir Bootstrap JS (para componentes interactivos, si los necesitas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>