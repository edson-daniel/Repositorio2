<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BiblioAdmin')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex">

    <aside class="w-64 bg-slate-900 text-white flex flex-col hidden md:flex shadow-xl">
        <div class="p-6">
            <div class="flex items-center gap-3">
                <div class="bg-blue-600 p-2 rounded-lg">
                    <i class="fas fa-book-open text-white"></i>
                </div>
                <div>
                    <h1 class="text-lg font-bold leading-none">BiblioAdmin</h1>
                    <p class="text-[10px] text-slate-400 uppercase tracking-widest mt-1">Gestión Total</p>
                </div>
            </div>
        </div>

        <nav class="flex-grow px-4 mt-4 space-y-1">
            <a href="{{ route('home') }}" class="flex items-center gap-3 p-3 rounded-lg bg-blue-600/10 text-blue-400 border-l-4 border-blue-500">
                <i class="fas fa-th-large w-5"></i> <span class="font-medium">Inicio</span>
            </a>
            <a href="{{ route('usuarios.index') }}" class="flex items-center gap-3 p-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-white transition">
                <i class="fas fa-users w-5"></i> <span>Usuarios</span>
            </a>
            <a href="{{ route('categorias.index') }}" class="flex items-center gap-3 p-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-white transition">
                <i class="fas fa-tags w-5"></i> <span>Categorias</span>
            </a>
            <a href="#" class="flex items-center gap-3 p-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-white transition">
                <i class="fas fa-book w-5"></i> <span>Libros</span>
            </a>
            <a href="{{ route('prestamos.index') }}" class="flex items-center gap-3 p-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-white transition">
                <i class="fas fa-exchange-alt w-5"></i> <span>Préstamos</span>
            </a>
        </nav>

        <div class="p-4 border-t border-slate-800">
            <div class="bg-slate-800/50 p-3 rounded-xl flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-xs font-bold uppercase">
                    {{ substr(auth()->user()->name, 0, 1) }}
                </div>
                <div class="overflow-hidden">
                    <p class="text-xs font-bold truncate">{{ auth()->user()->name }}</p>
                    <p class="text-[10px] text-slate-500">Administrador</p>
                </div>
            </div>
        </div>
    </aside>

    <div class="flex-grow flex flex-col">
        
        <header class="bg-white h-16 border-b border-gray-200 flex items-center justify-between px-8">
            <div class="flex items-center gap-2 text-sm">
                <span class="text-gray-400">Panel</span>
                <i class="fas fa-chevron-right text-[10px] text-gray-300"></i>
                <span class="text-gray-700 font-medium">Dashboard</span>
            </div>

            <div class="flex items-center gap-6">
                <button class="text-gray-400 hover:text-blue-600 transition">
                    <i class="fas fa-bell"></i>
                </button>
                <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="flex items-center gap-3 p-3 w-full text-red-500 hover:text-red-700 font-bold transition">
        <i class="fas fa-power-off"></i> Salir
    </button>
</form>
            </div>
        </header>

        <main class="p-8 flex-grow">
            @yield('content')
        </main>

        @include('partials.admin.footer')
    </div>

</body>
</html>