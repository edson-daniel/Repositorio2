@extends('layout.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="card">
        <h1 class="text-2xl font-bold mb-6">Nueva Categoría</h1>

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre de la Categoría</label>
                <input type="text" name="nombre" id="nombre" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                       placeholder="Ej: Fantasía, Historia..." required>
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('categorias.index') }}" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-800">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-700 transition">
                    Guardar Categoría
                </button>
            </div>
        </form>
    </div>
</div>
@endsection