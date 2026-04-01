@extends('layout.admin')

@section('content')
<div class="max-w-7xl mx-auto space-y-10">
    
    <div class="flex justify-between items-end">
        <div>
            <h1 class="text-4xl font-extrabold text-slate-800 tracking-tight">Gestión de Libros</h1>
            <p class="text-slate-500 mt-2 text-lg">Administra el catálogo completo de la biblioteca municipal.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="stat-card">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-blue-50 text-blue-600 rounded-2xl">
                    <i class="fas fa-book text-xl"></i>
                </div>
                <span class="text-xs font-bold text-green-500">↑ 5.2%</span>
            </div>
            <p class="text-slate-400 text-sm font-semibold uppercase tracking-wider">Total de libros</p>
            <h3 class="text-3xl font-bold text-slate-800 mt-1">1,247</h3>
            <p class="text-[11px] text-slate-400 mt-2 italic">Desde el mes pasado</p>
        </div>

        <div class="stat-card">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-orange-50 text-orange-600 rounded-2xl">
                    <i class="fas fa-exchange-alt text-xl"></i>
                </div>
                <span class="text-xs font-bold text-red-500">↓ 2.1%</span>
            </div>
            <p class="text-slate-400 text-sm font-semibold uppercase tracking-wider">Libros prestados</p>
            <h3 class="text-3xl font-bold text-slate-800 mt-1">189</h3>
            <p class="text-[11px] text-slate-400 mt-2 italic">En circulación actual</p>
        </div>

        <div class="stat-card">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-green-50 text-green-600 rounded-2xl">
                    <i class="fas fa-users text-xl"></i>
                </div>
                <span class="text-xs font-bold text-green-500">↑ 12.7%</span>
            </div>
            <p class="text-slate-400 text-sm font-semibold uppercase tracking-wider">Usuarios activos</p>
            <h3 class="text-3xl font-bold text-slate-800 mt-1">543</h3>
            <p class="text-[11px] text-slate-400 mt-2 italic">Lectores registrados</p>
        </div>

        <div class="stat-card">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-red-50 text-red-600 rounded-2xl">
                    <i class="fas fa-clock text-xl"></i>
                </div>
                <span class="text-xs font-bold text-red-500">↑ 3.4%</span>
            </div>
            <p class="text-slate-400 text-sm font-semibold uppercase tracking-wider">Devoluciones</p>
            <h3 class="text-3xl font-bold text-slate-800 mt-1">24</h3>
            <p class="text-[11px] text-slate-400 mt-2 italic">Requieren atención</p>
        </div>
    </div>

    <div class="bg-white rounded-[2rem] border border-slate-200 shadow-xl shadow-slate-200/50 overflow-hidden">
        <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-white">
            <h3 class="font-bold text-xl text-slate-800">Lista de Libros Recientes</h3>
            <a href="{{ route('libros.create') }}" class="bg-blue-600 text-white px-8 py-3 rounded-full font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all flex items-center gap-2">
                <i class="fas fa-plus text-xs"></i> Agregar libro
            </a>
        </div>
        
        <div class="overflow-x-auto px-8 pb-8">
    <table class="w-full text-left">
        <thead>
            <tr class="text-[12px] uppercase text-slate-400 border-b border-slate-100">
                <th class="py-6 font-bold tracking-widest">Título</th>
                <th class="py-6 font-bold tracking-widest">Autor</th>
                <th class="py-6 font-bold tracking-widest">ISBN</th> 
                <th class="py-6 font-bold tracking-widest">Categoría</th> 
                <th class="py-6 font-bold tracking-widest text-center">Estado</th>
                <th class="py-6 font-bold tracking-widest text-right">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-50">
            @foreach($libros as $libro)
            <tr class="group hover:bg-slate-50/50 transition-colors">
                <td class="py-5 font-bold text-slate-700">{{ $libro->nombre }}</td>
                <td class="py-5 text-slate-500">{{ $libro->autor }}</td>
                <td class="py-5 text-slate-500 font-mono text-xs">{{ $libro->isbn }}</td> 
                <td class="py-5">
                    {{-- Mostramos el nombre de la categoría si existe la relación --}}
                    <span class="text-blue-600 bg-blue-50 px-3 py-1 rounded-lg text-xs font-semibold">
                        {{ $libro->categoria ? $libro->categoria->nombre : 'Sin categoría' }}
                    </span>
                </td>
                <td class="py-5 text-center">
                   @if ($libro->estatus == 0)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Disponible</span>
                    @else
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Prestado</span>
                    @endif
                </td>
                <td class="py-5 text-right space-x-4">
                    <a href="{{ route('libros.edit', $libro->id) }}" class="text-blue-500 hover:text-blue-700 font-bold text-sm transition-colors">Editar</a>
    
                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-400 hover:text-red-600 font-bold text-sm transition-colors">Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> 

<div class="px-8 py-6 border-t border-slate-100">
    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        {{ $libros->links() }}
    </div>
</div>
</div> 

@endsection