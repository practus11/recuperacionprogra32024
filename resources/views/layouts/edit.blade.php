<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Editar Libro</h1>
    <form action="{{ route('libros.update', $libro->isbn) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo_libro" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo_libro" name="titulo_libro" value="{{ $libro->titulo_libro }}">
        </div>
        <div class="mb-3">
            <label for="anio_publicacion" class="form-label">Año de Publicación</label>
            <input type="text" class="form-control" id="anio_publicacion" name="anio_publicacion" value="{{ $libro->anio_publicacion }}">
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}">
        </div>
        <div class="mb-3">
            <label for="clasificacion" class="form-label">Clasificación</label>
            <input type="text" class="form-control" id="clasificacion" name="clasificacion" value="{{ $libro->clasificacion }}">
        </div>
        <div class="mb-3">
            <label for="cantidad_paginas" class="form-label">Cantidad de Páginas</label>
            <input type="text" class="form-control" id="cantidad_paginas" name="cantidad_paginas" value="{{ $libro->cantidad_paginas }}">
        </div>
        <div class="mb-3">
            <label for="id_tipo_pasta" class="form-label">Tipo de Pasta</label>
            <select class="form-control" id="id_tipo_pasta" name="id_tipo_pasta">
                @foreach(App\Models\TipoPasta::all() as $tipoPasta)
                    <option value="{{ $tipoPasta->id_tipo_pasta }}" {{ $libro->id_tipo_pasta == $tipoPasta->id_tipo_pasta ? 'selected' : '' }}>
                        {{ $tipoPasta->descripcion }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('libros.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
