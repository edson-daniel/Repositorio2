@extends('layout.admin')

@section('content')
<div class="max-w-7xl mx-auto space-y-6">
    
    <div class="bg-white p-8 rounded-[2rem] border border-slate-200 shadow-xl shadow-slate-200/50 flex justify-between items-center">
        <h3 class="font-bold text-xl text-slate-800">Lista de Usuarios</h3>
        <a href="{{route('usuarios.create')}}" class="bg-blue-600 text-white px-8 py-3 rounded-full font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all flex items-center gap-2">
            <i class="fas fa-plus text-xs"></i> Crear Usuario
        </a>
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
                        <th class="py-6 font-bold tracking-widest text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @foreach($usuarios as $usuario)
                    <tr class="group hover:bg-slate-50/50 transition-colors">
                        <td class="py-5 font-bold text-slate-700">#{{ $usuario->id }}</td>
                        <td class="py-5 text-slate-700 font-semibold">{{ $usuario->name }}</td>
                        <td class="py-5 text-slate-500 font-mono text-xs">{{ $usuario->email }}</td>
                        <td class="py-5">
                            <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold uppercase">
                                {{ $usuario->user_type ?? 'Sin tipo' }}
                            </span>
                        </td>
                        <td class="py-5 text-right space-x-2">
                            <a href="{{route('usuarios.edit', $usuario->id)}}" class="bg-blue-500 text-white px-4 py-1.5 rounded-lg text-xs font-bold hover:bg-blue-600 transition-all">
                                Editar
                            </a>

                            <a href="{{route('usuarios.delete-confirm', $usuario->id)}}" class="bg-red-500 text-white px-4 py-1.5 rounded-lg text-xs font-bold hover:bg-red-600 transition-all">
                                Eliminar
                            </a>

                          <!-------
                            <form action="" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-1.5 rounded-lg text-xs font-bold hover:bg-red-600 transition-all">
                                    Eliminar
                                </button>
                            </form>
                            ----->

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection