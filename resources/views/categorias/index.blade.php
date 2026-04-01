@extends('layout.admin')

@section('content')
<div class="max-w-7xl mx-auto space-y-10">
    
    <div class="flex justify-between items-end">
        <div>
            <h1 class="text-4xl font-extrabold text-slate-800 tracking-tight">Gestión de Categorías</h1>
            @if(session('success'))
    <div class="mb-6 flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-2xl shadow-sm animate-fade-in">
        <i class="fas fa-check-circle text-green-500"></i>
        <span class="font-bold">{{ session('success') }}</span>
    </div>
@endif
            <p class="text-slate-500 mt-2 text-lg">Administra las clasificaciones de libros en la biblioteca municipal.</p>
        </div>
    </div>

    <div class="bg-white rounded-[2rem] border border-slate-200 shadow-xl shadow-slate-200/50 overflow-hidden">
        <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-white">
            <h3 class="font-bold text-xl text-slate-800">Lista de Categorías</h3>
           <a href="{{ route('categorias.create') }}" class="bg-blue-600 text-white px-8 py-3 rounded-full font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all flex items-center gap-2">
    <i class="fas fa-plus text-xs"></i> Agregar categoría
</a>
        </div>
        
        <div class="overflow-x-auto px-8 pb-8">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-[12px] uppercase text-slate-400 border-b border-slate-100">
                        <th class="py-6 font-bold tracking-widest">ID</th>
                        <th class="py-6 font-bold tracking-widest">Nombre</th>
                        <th class="py-6 font-bold tracking-widest text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @foreach($categorias as $categoria)
                    <tr class="group hover:bg-slate-50/50 transition-colors">
                        <td class="py-5 font-bold text-slate-700">#{{ $loop->iteration }}</td>
                        <td class="py-5 text-slate-500 font-medium">{{ $categoria->nombre }}</td>
                                        <td class="py-5 text-right space-x-4 flex items-center justify-end">
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="text-blue-500 hover:text-blue-700 font-bold text-sm transition-colors">
                        Editar
                    </a>

                    <form action="{{ route('categorias.destroy', $categoria->id) }}" 
                        method="POST" 
                        class="inline" 
                        id="delete-form-{{ $categoria->id }}" {{-- ID único por cada fila --}}
                        onsubmit="return confirm('¿Estás seguro de eliminar la categoría: {{ $categoria->nombre }}?')">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit" class="text-red-400 hover:text-red-600 font-bold text-sm transition-colors">
                            Eliminar
                        </button>
                    </form>
                </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection