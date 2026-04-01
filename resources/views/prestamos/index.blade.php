@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
        <h1 class="font-bold text-xl text-slate-800">Prestamos</h1>
        
        @if (session('error'))
            <div class="bg-red-100 border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('prestamos.create') }}" class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-2.5 rounded-full font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all">Crear Prestamo</a>

        <div class="overflow-x-auto px-8 py-4">
            <div class="overflow-x-auto px-8 pb-8">
            <table class="w-full text-left">
                <thead>
                    <tr>
                        <th class="py-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="py-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Libro</th>
                        <th class="py-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Usuario</th>
                        <th class="py-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                        <th class="py-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estatus</th>
                        <th class="py-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha entrega</th>                        <th class="py-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
             </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($prestamos as $prestamo)
                <tr>
                    <td class="py-6 px-4 whitespace-nowrap">{{ $prestamo->id }}</td>
                    <td class="py-6 px-4 whitespace-nowrap">{{ $prestamo->libro->nombre }}</td>
                    <td class="py-6 px-4 whitespace-nowrap">{{ $prestamo->usuario->name }}</td>
                    <td class="py-6 px-4 whitespace-nowrap">{{ $prestamo->created_at->format('d/m/Y') }}</td>
                    <td class="py-6 px-4 whitespace-nowrap">
                        @if ($prestamo->estado == 'pendiente')
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Pendiente</span>
                        @else
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Entregado</span>
                        @endif
                    </td>
                    <td class="py-6 px-4 whitespace-nowrap"> {{ $prestamo->fecha_entrega ? $prestamo->fecha_entrega : '-'}} </td>
                    <td class="py-6 px-4 whitespace-nowrap">
                        @if ($prestamo->estado == 'pendiente')
                        <a href="{{ route('prestamos.entregar', $prestamo->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Entregar</a> 
                        @endif
                    </td>   
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

@endsection