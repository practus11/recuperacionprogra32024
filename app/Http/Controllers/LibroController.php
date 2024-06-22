<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::with('tipoPasta')->get();
        return view('libros.index', compact('libros'));
    }

    public function edit($isbn)
    {
        $libro = Libro::findOrFail($isbn);
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, $isbn)
    {
        $libro = Libro::findOrFail($isbn);
        $libro->update($request->all());
        return redirect()->route('libros.index');
    }

    public function destroy($isbn)
    {
        $libro = Libro::findOrFail($isbn);
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
