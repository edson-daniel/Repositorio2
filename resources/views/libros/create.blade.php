@extends('layout.admin')

@section('content')

<div class="max-w-7xl mx-auto space-y-10">
    <div class="flex justify-between items-end">
        <div>
            <h1 class="text-4xl font-extrabold text-slate-800 tracking-tight">Agregar Nuevo Libro</h1>

            <form action="{{ route('libros.store') }}" method="POST" class="space-y-6">
    @csrf
    <div class="space-y-4">
        <label for="nombre" class="block text-sm font-medium text-slate-700">Nombre del libro</label>
        <input type="text" name="nombre" id="nombre" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
    </div>

    <div class="space-y-4">
        <label for="isbn" class="block text-sm font-medium text-slate-700">ISBN</label>
        <input type="text" name="isbn" id="isbn" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
    </div>

    <div class="space-y-4">
        <label for="autor" class="block text-sm font-medium text-slate-700">Autor</label>
        <input type="text" name="autor" id="autor" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
    </div> 

    <div class="space-y-4">        
        <label for="editorial" class="block text-sm font-medium text-slate-700">Editorial</label>
        <input type="text" name="editorial" id="editorial" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
    </div>

    <div class="space-y-4">        
        <label for="categoria" class="block text-sm font-medium text-slate-700">Categoría</label>
        <select name="categoria" id="categoria" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
            <option value="">Seleccione una categoría</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
    </div>    
    
    <div class="flex justify-end space-x-4">
        <a href="{{ route('home') }}" class="px-6 py-3 bg-slate-200 text-slate-700 rounded-full font-bold hover:bg-slate-300 transition-colors">Cancelar</a>
        <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-full font-bold hover:bg-blue-700 transition-all">Guardar Libro</button>
    </div>
</form>
        </div>
    </div>
</div>    

@endsection