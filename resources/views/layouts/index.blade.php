<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Lista de Libros</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ISBN</th>
            <th>Título</th>
            <th>Año de Publicación</th>
            <th>Autor</th>
            <th>Clasificación</th>
            <th>Cantidad de Páginas</th>
            <th>Tipo de Pasta</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($libros as $libro)
            <tr>
                <td>{{ $libro->isbn }}</td>
                <td>{{ $libro->titulo_libro }}</td>
                <td>{{ $libro->anio_publicacion }}</td>
                <td>{{ $libro->autor }}</td>
                <td>{{ $libro->clasificacion }}</td>
                <td>{{ $libro->cantidad_paginas }}</td>
                <td>{{ $libro->tipoPasta->descripcion }}</td>
                <td>
                    <a href="{{ route('libros.edit', $libro->isbn) }}" class="btn btn-primary">Actualizar</a>
                    <form action="{{ route('libros.destroy', $libro->isbn) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
