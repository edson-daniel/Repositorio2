@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre del usuario:</label>
            <input type="text" name="nombre" id="nombre" value="{{old('nombre', $usuario->name)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('nombre')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Correo electrónico:</label>
            <input type="email" name="email" id="email" value="{{old('email', $usuario->email)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label for="user_type" class="block text-gray-700 font-bold mb-2">Tipo de usuario:</label>
            <select name="user_type" id="user_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Seleccione un tipo de usuario</option>
                <option value="user" {{ $usuario->user_type == 'user' ? 'selected' : '' }}>Usuario</option>
                <option value="admin" {{ $usuario->user_type == 'admin' ? 'selected' : '' }}>Administrador</option>
            </select>
            @error('user_type')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Guardar Usuario
            </button>
            <a href="{{ route('usuarios.index') }}" class="text-blue-500 hover:text-blue-800">Cancelar</a>
        </div>
    </form>
</div>
@endsection