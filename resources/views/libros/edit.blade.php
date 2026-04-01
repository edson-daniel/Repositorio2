@extends('layout.admin')

@section('content')
<div class="max-w-7xl mx-auto space-y-10">
    <h1 class="text-4xl font-extrabold text-slate-800 tracking-tight">Editar Libro</h1>

    <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="bg-white rounded-[2rem] border border-slate-200 shadow-xl shadow-slate-200/50 p-8 space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre" class="block text-sm font-bold text-slate-700 mb-2">Nombre del libro</label>
            <input type="text" name="nombre" id="nombre" value="{{ $libro->nombre }}" class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors">
        </div>
        <div class="space-y-4">
        <label for="isbn" class="block text-sm font-medium text-slate-700">ISBN</label>
            <input type="text" name="isbn" id="isbn" value="{{ $libro->isbn }}" class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors">
    </div>

    <div class="space-y-4">
        <label for="autor" class="block text-sm font-medium text-slate-700">Autor</label>
            <input type="text" name="autor" id="autor" value="{{ $libro->autor }}" class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors">
    </div> 

    <div class="space-y-4">        
        <label for="editorial" class="block text-sm font-medium text-slate-700">Editorial</label>
        <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-colors">
    </div>

    <div class="space-y-4">        
        <label for="categoria" class="block text-sm font-medium text-slate-700">Categoría</label>
        <select name="categoria" id="categoria" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
            <option value="">Seleccione una categoría</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
            @endforeach
        </select>
    </div>

        <div class="flex items-center gap-4">
    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-full font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all">
        Actualizar Libro
    </button>
    <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-700 font-bold text-sm transition-colors">Cancelar</a>
</div>
    </form>
</div>
@endsection