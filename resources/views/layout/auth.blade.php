<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioAdmin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer components {
            .form-container { @apply bg-white rounded-xl shadow-lg p-8 max-w-md w-full mx-auto; }
            .form-title { @apply text-2xl font-bold text-blue-600 mb-6 text-center; }
            .form-group { @apply mb-4; }
            .form-label { @apply block text-gray-700 text-sm font-semibold mb-1; }
            .form-input { @apply w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none; }
            .btn-primary { @apply w-full py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition; }
        }
    </style>

</head>
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

    <header class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto flex items-center justify-between px-6 py-3">
            <div class="flex items-center">
                <span class="text-xl font-bold text-blue-600">
                    <i class="fas fa-book-reader mr-2"></i>BiblioAdmin
                </span>
            </div>
            <nav class="hidden md:flex space-x-6 items-center font-medium text-gray-600">
                <a href="#" class="hover:text-blue-500">Inicio</a>
                <a href="#" class="hover:text-blue-500">Usuarios</a>
                <a href="#" class="hover:text-blue-500">Libros</a>
                <a href="#" class="hover:text-blue-500">Préstamos</a>
                <a href="#" class="text-red-500 hover:text-red-700">
                    <i class="fas fa-sign-out-alt mr-1"></i> Salir
                </a>
            </nav>
        </div>
    </header>

    <main class="flex-grow pt-24 pb-12 px-6 flex flex-col items-center">
        @yield('content') 
    </main>

    @include('partials.auth.footer') 

</body>
</html>