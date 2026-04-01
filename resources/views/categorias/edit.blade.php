@extends('layout.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white p-8 rounded-[2rem] shadow-xl border border-slate-200">
        <h1 class="text-2xl font-bold text-slate-800 mb-6">Editar Categoría</h1>

        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT') 

            <div class="mb-6">
                <label class="block text-sm font-bold text-slate-700 mb-2">Nombre de la Categoría</label>
                <input type="text" name="nombre" value="{{ $categoria->nombre }}" 
                       class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition"
                       required>
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('categorias.index') }}" class="px-6 py-3 text-slate-500 font-bold">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-full font-bold shadow-lg hover:bg-blue-700 transition">
                    Actualizar Cambios
                </button>
            </div>
        </form>
    </div>
</div>
@endsection