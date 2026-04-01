@extends('layout.admin')

@section('content')
<div class="max-w-7xl mx-auto space-y-6">
    
    <div class="bg-white p-8 rounded-[2rem] border border-slate-200 shadow-xl shadow-slate-200/50">
        <h1 class="text-2x1 font-bold mb-6">Eliminar Usuario</h1>
        <p class="text-slate-500 mt-2">¿Estás seguro de que deseas eliminar este usuario? Esta acción no se puede deshacer.</p>
    </div>

    <div class="bg-white rounded-[2rem] border border-slate-200 shadow-xl shadow-slate-200/50 overflow-hidden">
        <div class="overflow-x-auto px-8 py-4">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-[12px] uppercase text-slate-400 border-b border-slate-100">
                        <th class="py-6 font-bold tracking-widest">ID</th>
                        <th class="py-6 font-bold tracking-widest">Nombre</th>
                        <th class="py-6 font-bold tracking-widest">Email</th>
                        <th class="py-6 font-bold tracking-widest">Tipo</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    <tr class="group hover:bg-slate-50/50 transition-colors">
                        <td class="py-5 font-bold text-slate-700">#{{ $usuario->id }}</td>
                        <td class="py-5 text-slate-700 font-semibold">{{ $usuario->name }}</td>
                        <td class="py-5 text-slate-500 font-mono text-xs">{{ $usuario->email }}</td>
                        <td class="py-5">
                            <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold uppercase">
                                {{ $usuario->user_type ?? 'Sin tipo' }}
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
 
    <div class="flex justify-end gap-3 mt-8">
        <a href="{{ route('usuarios.index') }}" class="bg-slate-200 text-slate-700 px-8 py-3 rounded-full font-bold hover:bg-slate-300 transition-all flex items-center gap-2">
            Cancelar
        </a>
        
        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-8 py-3 rounded-full font-bold shadow-lg shadow-red-200 hover:bg-red-700 transition-all flex items-center gap-2">
                <i class="fas fa-trash-alt text-xs"></i> Eliminar
            </button>
        </form>
    </div>

</div>
@endsection