@extends('layout.auth')

@section('content')
    <div class="form-container mb-8">
        <h2 class="form-title">Iniciar Sesión</h2>
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div class="form-group">
                <label class="form-label">Correo Electrónico</label>
                <input type="email" name="email" required class="form-input">
            </div>
            <div class="form-group">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" required class="form-input">
            </div>
            <button type="submit" class="btn-primary">Entrar al Sistema</button>
        </form>
    </div>

    <div class="form-container">
        <h2 class="form-title">Crear Cuenta</h2>

        <form action="{{ route('register.store') }}" method="POST" class="space-y-4">
    @csrf 
    
    <div class="form-group">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" required class="form-input">
            </div>
            <div>
                <label class="form-label">Apellido</label>
                <input type="text" name="apellido" required class="form-input">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="form-label">Correo Electrónico</label>
        <input type="email" name="email" placeholder="usuario@biblioteca.com" required class="form-input">
    </div>

    <div class="form-group">
        <label class="form-label">Contraseña</label>
        <input type="password" name="password" required class="form-input">
    </div>

    <div class="form-group">
        <label class="form-label">Repetir Contraseña</label>
        <input type="password" name="password_confirmation" required class="form-input">
    </div>

    <button type="submit" class="btn-primary">Completar Registro</button>
</form>
    </div>
@endsection