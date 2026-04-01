@extends('layout.admin')

@section('content')

<div class="container mx-auto px-4 py-8">
        <h1 class="text-2x1 font-bold mb-6">Crear Prestamo</h1>

        <div class="bg-white shadow-md rounded-lg p-6 mt-4">
            <form action="{{ route('prestamos.buscar_usuario') }}" method="POST" class="space-y-6">
                @csrf
                <label for="usuario_id" class="block text-sm font-medium text-slate-700">ID Usuario: </label>
                <input type="text" name="usuario_id" class="shadow apperance-none border rounded w-full py-2 px-3 text-gray-700 leaning-tight focus:shadow-outline">
                <label for="nombre" class="block text-sm font-medium text-slate-700">Nombre Usuario: </label>
                <input type="text" name="usuario_nombre" class="shadow apperance-none border rounded w-full py-2 px-3 text-gray-700 leaning-tight focus:shadow-outline">

                <div class="flex iteams-center justify-between mt-4">
                    <input type="submit" value="Buscar" class="px-6 py-3 bg-blue-600 text-white rounded-full font-bold hover:bg-blue-700 transition-all">
                    <a href="{{ route('prestamos.index') }}" class="px-6 py-3 bg-slate-200 text-slate-700 rounded-full font-bold hover:bg-slate-300 transition-colors">Cancelar</a>
                </div>
            </form>
            
            @isset($usuario)
                <div class="mt-6">
                    <h2 class="text-x1 font-bold mb-4">Usuario Encontrado:</h2>
                    <p> <strong>ID:</strong> {{ $usuario->id }}</p>
                    <p> <strong>Nombre:</strong> {{ $usuario->name }}</p>
                    <p> <strong>Email:</strong> {{ $usuario->email }}</p>
                </div>
                
                <form action="{{ route('prestamos.select_libro') }}" method="POST">
                    @csrf
                    <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
                    <input type="submit" value="Seleccionar Libro" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                </form>
            @endisset
            
        </div>
    </div>

@endsection