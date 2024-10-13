<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - SERVICE?</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background: linear-gradient(to right, #1F2937, #4F46E5);
            opacity: 0;
            /* Inicialmente oculto */
            transition: opacity 0.5s ease;
            /* Transición de opacidad */
        }

        body.loaded {
            opacity: 1;
            /* Visible cuando se carga */
        }

        /* Scrollbar personalizada para la conversación */
        .scrollbar::-webkit-scrollbar {
            width: 8px;
        }

        .scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .scrollbar::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }

        .scrollbar::-webkit-scrollbar-thumb:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body class="text-white">
    <!-- Navbar -->
    <nav class="flex flex-wrap justify-between items-center p-5 bg-gray-800 shadow-lg">
        <div class="text-2xl font-bold"><a href="{{ route('clienthome') }}">SERVICE?</a></div>
        <div class="hidden md:flex items-center space-x-4">
            <!-- Botón de búsqueda -->
            <a href="{{ route('clientsearch') }}"
                class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-search mr-2"></i> Buscar
            </a>
            <a href="{{ route('clientchat') }}"
                class="bg-green-600 hover:bg-green-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-comments mr-2"></i> Chat
            </a>
            <a href="{{ route('clientviewcompanies') }}"
                class="bg-purple-600 hover:bg-purple-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-building mr-2"></i> Ver Empresas
            </a>
            <a href="{{ route('clientprofile.show') }}"
                class="bg-gray-600 hover:bg-black-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-user mr-2"></i> Perfil
            </a>
            <a href="/"
                class="bg-red-600 hover:bg-red-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
            </a>
        </div>

        <!-- Botón de menú hamburguesa -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <i class="fas fa-bars fa-2x"></i>
            </button>
        </div>
    </nav>

    <!-- Menú hamburguesa -->
    <div id="menu" class="hidden bg-gray-800 p-5 md:hidden">
        <a href="{{ route('clientsearch') }}"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-green-600 transition duration-300">Buscar</a>
        <hr class="border-gray-600 my-2">
        <a href="{{ route('clientchat') }}"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-green-500 transition duration-300">Chat</a>
        <hr class="border-gray-600 my-2">
        <a href="{{ route('clientviewcompanies') }}"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-purple-500 transition duration-300">Ver Empresas</a>
        <hr class="border-gray-600 my-2">
        <a href="{{ route('clientprofile.show') }}"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-red-500 transition duration-300">Perfil</a>
        <hr class="border-gray-600 my-2">
        <a href="/"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-gray-500 transition duration-300">Cerrar
            Sesión</a>
    </div>

    <!-- Sección de Chat -->
    <section class="flex flex-col md:flex-row justify-center items-center min-h-screen px-5 animate__animated animate__fadeIn">
        <!-- Sidebar de Contactos -->
        <aside class="w-full md:w-1/3 lg:w-1/4 bg-gray-700 bg-opacity-50 p-6 rounded-lg shadow-md mb-6 md:mb-0 md:mr-6">
            <h3 class="text-xl font-semibold mb-4">Contactos</h3>
            <ul class="space-y-4">
                <!-- Contacto 1 -->
                <li class="flex items-center space-x-3 cursor-pointer hover:bg-gray-600 p-2 rounded-md">
                    <img src="https://via.placeholder.com/50" alt="Contacto 1" class="w-10 h-10 rounded-full">
                    <div>
                        <h4 class="font-medium">Empresa 1</h4>
                        <p class="text-sm text-gray-300">Disponible</p>
                    </div>
                </li>
                <!-- Contacto 2 -->
                <li class="flex items-center space-x-3 cursor-pointer hover:bg-gray-600 p-2 rounded-md">
                    <img src="https://via.placeholder.com/50" alt="Contacto 2" class="w-10 h-10 rounded-full">
                    <div>
                        <h4 class="font-medium">Empresa 2</h4>
                        <p class="text-sm text-gray-300">Ocupada</p>
                    </div>
                </li>
                <!-- Contacto 3 -->
                <li class="flex items-center space-x-3 cursor-pointer hover:bg-gray-600 p-2 rounded-md">
                    <img src="https://via.placeholder.com/50" alt="Contacto 3" class="w-10 h-10 rounded-full">
                    <div>
                        <h4 class="font-medium">Empresa 3</h4>
                        <p class="text-sm text-gray-300">Disponible</p>
                    </div>
                </li>
                <!-- Puedes agregar más contactos aquí -->
            </ul>
        </aside>

        <!-- Área de Conversación -->
        <main class="w-full md:w-2/3 lg:w-3/4 bg-gray-700 bg-opacity-50 p-6 rounded-lg shadow-md flex flex-col">
            <!-- Header de la Conversación -->
            <div class="flex items-center mb-4">
                <img src="https://via.placeholder.com/50" alt="Contacto Activo" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h4 class="text-xl font-semibold">Empresa 1</h4>
                    <p class="text-sm text-gray-300">Activo hace 5 minutos</p>
                </div>
            </div>

            <!-- Cuerpo de la Conversación -->
            <div class="flex-1 overflow-y-auto mb-4 p-4 bg-gray-600 rounded-md scrollbar">
                <!-- Mensaje Recibido -->
                <div class="flex items-start mb-4">
                    <img src="https://via.placeholder.com/40" alt="Tu Avatar" class="w-8 h-8 rounded-full mr-3">
                    <div>
                        <div class="bg-gray-800 text-white p-2 rounded-lg">
                            Hola, ¿se contactó con nosotros?
                        </div>
                        <span class="text-xs text-gray-400 mt-1">10:00 AM</span>
                    </div>
                </div>
                <!-- Mensaje Enviado -->
                <div class="flex justify-end items-start mb-4">
                    <div class="text-right">
                        <div class="bg-blue-600 text-white p-2 rounded-lg">
                            ¡Hola! Estoy buscando mudarme el fin de semana.
                        </div>
                        <span class="text-xs text-gray-400 mt-1">10:02 AM</span>
                    </div>
                    <img src="https://via.placeholder.com/40" alt="Avatar del Contacto" class="w-8 h-8 rounded-full ml-3">
                </div>
                <!-- Más Mensajes -->
                <div class="flex items-start mb-4">
                    <img src="https://via.placeholder.com/40" alt="Tu Avatar" class="w-8 h-8 rounded-full mr-3">
                    <div>
                        <div class="bg-gray-800 text-white p-2 rounded-lg">
                            Estoy organizando una mudanza para el próximo fin de semana. ¿Puedo ayudarte?
                        </div>
                        <span class="text-xs text-gray-400 mt-1">10:05 AM</span>
                    </div>
                </div>
                <div class="flex justify-end items-start mb-4">
                    <div class="text-right">
                        <div class="bg-blue-600 text-white p-2 rounded-lg">
                            ¡Si!, organizemos un horario.
                        </div>
                        <span class="text-xs text-gray-400 mt-1">10:07 AM</span>
                    </div>
                    <img src="https://via.placeholder.com/40" alt="Avatar del Contacto" class="w-8 h-8 rounded-full ml-3">
                </div>
                <!-- Puedes agregar más mensajes aquí -->
            </div>

            <!-- Barra de Envío de Mensajes -->
            <form class="flex items-center">
                <input type="text" placeholder="Escribe un mensaje..."
                    class="flex-1 bg-gray-600 text-white p-2 rounded-l-lg focus:outline-none focus:ring focus:ring-blue-300">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-500 text-white p-2 rounded-r-lg">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </main>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-5 text-center">
        <p>&copy; 2024 SERVICE?. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script>
        // Funcionalidad del menú hamburguesa
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menu.classList.remove('animate__fadeOutUp');
                menu.classList.add('animate__fadeInDown');
            } else {
                menu.classList.remove('animate__fadeInDown');
                menu.classList.add('animate__fadeOutUp');
                // Ocultar el menú después de la animación
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 500); // Duración de la animación
            }
        });

        // Animación de carga del body
        window.onload = function () {
            document.body.classList.add('loaded');
        };
    </script>
</body>

</html>
