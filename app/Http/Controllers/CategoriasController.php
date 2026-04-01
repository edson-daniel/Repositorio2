<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    
  public function index()
  {
    $categorias = categoria::all();

    return view('categorias.index', compact('categorias'));
  }
  public function create()
{
    return view('categorias.create'); 
}
public function store(Request $request)
{
    
    $request->validate([
        'nombre' => 'required|string|max:255'
    ]);

   
    $categoria = new Categoria();
    $categoria->nombre = $request->nombre;
    $categoria->save();

    
    return redirect()->route('categorias.index')->with('success', 'Categoria creada correctamente.');
}

public function edit($id)
{
    $categoria = Categoria::findOrFail($id); 
    return view('categorias.edit', compact('categoria'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|max:255'
    ]);

    $categoria = Categoria::findOrFail($id);
    $categoria->nombre = $request->nombre;
    $categoria->save(); // Guarda los cambios en la BD

    return redirect()->route('categorias.index')->with('success', 'Categoria actualizada con éxito.');
}
public function destroy($id)
{
    $categoria = Categoria::findOrFail($id);
    $categoria->delete(); // Borra el registro

    return redirect()->route('categorias.index')->with('success', 'Categoría eliminada correctamente.');
}

}
