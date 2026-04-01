<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Digital | Tu Portal al Conocimiento</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilo suave para la transición del menú móvil */
        #mobile-menu {
            transition: all 0.3s ease-in-out;
        }
    </style></head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <header class="bg-white shadow-md fixed w-full z-20 top-0">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-2xl font-bold text-blue-600">Biblio<span class="text-gray-800">Tech</span></span>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-gray-600 hover:text-blue-600 font-medium transition">Inicio</a>
                <a href="{{ route('login')}}" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition shadow-lg">Login</a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="menu-btn" class="text-gray-600 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-6 py-4 space-y-4">
            <a href="#" class="block text-gray-600 hover:text-blue-600 font-medium">Inicio</a>
            <hr>
            <a href="#" class="block text-blue-600 font-bold">Login</a>
        </div>
    </header>

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 bg-white overflow-hidden">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 flex flex-col items-start text-left">
                <h1 class="text-4xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Explora mundos infinitos <br>
                    <span class="text-blue-600">desde tu pantalla.</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 max-w-lg">
                    Accede a más de 50,000 títulos, manuscritos históricos y las últimas novedades académicas de forma gratuita y digital.
                </p>
                <div class="flex space-x-4">
                    <button class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition shadow-xl">
                        Empezar a leer
                    </button>
                    <button class="border-2 border-gray-200 text-gray-700 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                        Ver Catálogo
                    </button>
                </div>
            </div>
            <div class="lg:w-1/2 mt-12 lg:mt-0">
                <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=800&q=80" 
                     alt="Biblioteca moderna" 
                     class="rounded-2xl shadow-2xl transform rotate-2 hover:rotate-0 transition duration-500">
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 border-b border-gray-800 pb-10">
                <div>
                    <h3 class="text-xl font-bold mb-4">BiblioTech</h3>
                    <p class="text-gray-400">Transformando la educación a través del acceso libre a la información y la literatura universal.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Enlaces</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-blue-400 transition">Colecciones</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Préstamos Digitales</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Sobre nosotros</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contacto</h4>
                    <p class="text-gray-400">Calle Libros 123, Ciudad Saber.</p>
                    <p class="text-gray-400">info@bibliotech.com</p>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-500 text-sm">
                &copy; 2024 BiblioTech. Imágenes libres de Unsplash.
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
