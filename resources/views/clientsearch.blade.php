<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de Servicios - SERVICE?</title>
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
    </style>
</head>

<body class="text-white">

    <!-- Navbar -->
    <nav class="flex flex-wrap justify-between items-center p-5 bg-gray-800 shadow-lg">
        <div class="text-2xl font-bold"><a href="{{ route('clienthome') }}">SERVICE?</a></div>
        <div class="hidden md:flex items-center space-x-4">
            <!-- Barra de búsqueda -->
            <div class="relative">
                <input type="text" placeholder="Buscar..."
                    class="bg-gray-700 text-white py-2 px-4 rounded-lg focus:outline-none focus:ring focus:ring-blue-300" />
                <button class="absolute right-2 top-2 text-white">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <a href="#"
                class="bg-green-600 hover:bg-green-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-comments mr-2"></i> Chat
            </a>
            <a href="#"
                class="bg-yellow-600 hover:bg-yellow-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-file-invoice-dollar mr-2"></i> Crear Presupuesto
            </a>
            <a href="#"
                class="bg-purple-600 hover:bg-purple-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-building mr-2"></i> Ver Empresas
            </a>
            <a href="{{ route('clientprofile.show') }}"
                class="bg-gray-600 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-user mr-2"></i> Perfil
            </a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="bg-red-600 hover:bg-red-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>

        <!-- Botón de menú hamburguesa -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none" aria-label="Abrir menú de navegación">
                <i class="fas fa-bars fa-2x"></i>
            </button>
        </div>
    </nav>

    <!-- Menú hamburguesa -->
    <div id="menu" class="hidden bg-gray-800 p-5 md:hidden animate__animated">
        <div class="relative mb-4">
            <input type="text" placeholder="Buscar..."
                class="bg-gray-700 text-white py-2 px-4 rounded-lg w-full focus:outline-none focus:ring focus:ring-blue-300" />
            <button class="absolute right-2 top-2 text-white">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <hr class="border-gray-600 my-2">
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-green-600 transition duration-300">Chat</a>
        <hr class="border-gray-600 my-2">
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-yellow-500 transition duration-300">Crear
            Presupuesto</a>
        <hr class="border-gray-600 my-2">
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-purple-500 transition duration-300">Ver
            Empresas</a>
        <hr class="border-gray-600 my-2">
        <a href="{{ route('clientprofile.show') }}"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-gray-600 transition duration-300">Perfil</a>
        <hr class="border-gray-600 my-2">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-red-600 transition duration-300">Cerrar
            Sesión</a>
        <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>

    <!-- Sección de Búsqueda -->
    <section class="flex flex-col justify-center items-center min-h-screen px-5 animate__animated animate__fadeIn">
        <div class="w-full max-w-5xl bg-gray-800 bg-opacity-80 p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-6">Buscar Servicios</h2>

            <!-- Filtros de Búsqueda -->
            <form class="mb-8 space-y-4">
                <div class="flex flex-col md:flex-row md:space-x-4">
                    <!-- Tipo de Servicio -->
                    <div class="flex-1">
                        <label for="service_type" class="block text-sm font-medium">Tipo de Servicio</label>
                        <select id="service_type" name="service_type"
                            class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-blue-300">
                            <option value="">Selecciona una opción</option>
                            <option value="mudanza">Mudanza</option>
                            <option value="flete">Flete</option>
                        </select>
                    </div>

                    <!-- Ubicación -->
                    <div class="flex-1">
                        <label for="location" class="block text-sm font-medium">Ubicación</label>
                        <input type="text" id="location" name="location" placeholder="Ciudad o Dirección"
                            class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-blue-300">
                    </div>
                </div>

                <!-- Botón de Búsqueda -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 px-6 rounded transition duration-300 flex items-center justify-center">
                        <i class="fas fa-search mr-2"></i> Buscar
                    </button>
                </div>
            </form>

            <!-- Resultados de Búsqueda -->
            <div>
                <h3 class="text-2xl font-semibold mb-6">Resultados de Búsqueda</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Resultado 1 -->
                    <div
                        class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-truck fa-3x text-green-400 mr-4"></i>
                            <h4 class="text-xl font-bold">Flete Express</h4>
                        </div>
                        <p class="text-gray-300 mb-4">Servicio rápido y seguro para transporte de mercancías dentro de la ciudad.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-green-500 font-semibold">$50.000</span>
                            <a href="#"
                                class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-3 rounded transition duration-300">
                                <i class="fas fa-info-circle mr-1"></i> Detalles
                            </a>
                        </div>
                    </div>

                    <!-- Resultado 2 -->
                    <div
                        class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-box-open fa-3x text-yellow-400 mr-4"></i>
                            <h4 class="text-xl font-bold">Mudanza Integral</h4>
                        </div>
                        <p class="text-gray-300 mb-4">Todo incluido para tu mudanza: embalaje, transporte y desembalaje.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-semibold">$200.000</span>
                            <a href="#"
                                class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-3 rounded transition duration-300">
                                <i class="fas fa-info-circle mr-1"></i> Detalles
                            </a>
                        </div>
                    </div>

                    <!-- Resultado 3 -->
                    <div
                        class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-shipping-fast fa-3x text-purple-400 mr-4"></i>
                            <h4 class="text-xl font-bold">Flete Internacional</h4>
                        </div>
                        <p class="text-gray-300 mb-4">Transporte seguro y eficiente para tus envíos a cualquier parte del mundo.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-purple-500 font-semibold">$500.000</span>
                            <a href="#"
                                class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-3 rounded transition duration-300">
                                <i class="fas fa-info-circle mr-1"></i> Detalles
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
