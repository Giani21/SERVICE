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
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-purple-500 transition duration-300">Ver
            Empresas</a>
        <hr class="border-gray-600 my-2">
        <a href="{{ route('clientprofile.show') }}"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-red-500 transition duration-300">Perfil</a>
        <hr class="border-gray-600 my-2">
        <a href="/"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-gray-500 transition duration-300">Cerrar
            Sesión</a>
    </div>

    <!-- Sección de Búsqueda Mejorada con Filtros Lateral -->
    <section class="flex flex-col justify-center items-center min-h-screen px-5 animate__animated animate__fadeIn">
        <div class="mt-12 mb-12 w-full max-w-6xl bg-gray-800 bg-opacity-80 p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-6">Buscar Servicios</h2>

            <div class="flex flex-col md:flex-row">
                <!-- Columna Izquierda: Filtros -->
                <aside class="w-full md:w-1/4 bg-gray-700 bg-opacity-50 p-6 rounded-lg shadow-md mb-6 md:mb-0 md:mr-6">
                    <h3 class="text-xl font-semibold mb-4">Crea tu presupuesto</h3>

                    <!-- Tipo de Servicio -->
                    <div class="mb-4">
                        <label for="service_type" class="block text-sm font-medium text-gray-200 mb-1">Tipo de
                            Servicio</label>
                        <div class="relative">
                            <select id="service_type" name="service_type"
                                class="block w-full bg-gray-600 text-white border border-gray-600 rounded-md py-2 pl-10 pr-4 focus:outline-none focus:ring focus:ring-blue-300">
                                <option value="">Selecciona una opción</option>
                                <option value="mudanza">Mudanza</option>
                                <option value="flete">Flete</option>
                            </select>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="fas fa-funnel-dollar text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Ubicación -->
                    <div class="mb-4">
                        <label for="location" class="block text-sm font-medium text-gray-200 mb-1">Ubicación</label>
                        <div class="relative">
                            <input type="text" id="location" name="location" placeholder="Ciudad o Dirección"
                                class="block w-full bg-gray-600 text-white border border-gray-600 rounded-md py-2 pl-10 pr-4 focus:outline-none focus:ring focus:ring-blue-300">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="fas fa-map-marker-alt text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Rango de Precio -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-200 mb-1">Rango de Precio</label>
                        <div class="flex space-x-2">
                            <input type="number" id="price_min" name="price_min" placeholder="Min"
                                class="block w-1/2 bg-gray-600 text-white border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:ring focus:ring-blue-300">
                            <input type="number" id="price_max" name="price_max" placeholder="Max"
                                class="block w-1/2 bg-gray-600 text-white border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:ring focus:ring-blue-300">
                        </div>
                    </div>

                    <!-- Botón de Búsqueda -->
                    <div class="text-center">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 px-6 rounded-full transition duration-300 flex items-center justify-center w-full">
                            <i class="fas fa-search mr-2"></i> Buscar
                        </button>
                    </div>
                </aside>

                <!-- Columna Derecha: Resultados de Búsqueda -->
                <main class="w-full md:w-3/4">
                    <h3 class="text-2xl font-semibold mb-6">Resultados de Búsqueda</h3>
                    <div class="space-y-6">
                        <!-- Resultado 1 -->
                        <div
                            class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp flex flex-col md:flex-row items-center">
                            <img src="https://via.placeholder.com/150" alt="Flete Express"
                                class="w-full md:w-40 h-40 object-cover rounded-md mb-4 md:mb-0 md:mr-6">
                            <div class="flex-1">
                                <h4 class="text-xl font-bold mb-2">Flete Express</h4>
                                <p class="text-gray-300 mb-4">Servicio rápido y seguro para transporte de mercancías
                                    dentro de la ciudad.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-green-500 font-semibold text-lg">$50.000</span>
                                    <a href="#"
                                        class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-4 rounded transition duration-300 flex items-center">
                                        <i class="fas fa-info-circle mr-2"></i> Detalles
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Resultado 2 -->
                        <div
                            class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp flex flex-col md:flex-row items-center">
                            <img src="https://via.placeholder.com/150" alt="Mudanza Integral"
                                class="w-full md:w-40 h-40 object-cover rounded-md mb-4 md:mb-0 md:mr-6">
                            <div class="flex-1">
                                <h4 class="text-xl font-bold mb-2">Mudanza Integral</h4>
                                <p class="text-gray-300 mb-4">Todo incluido para tu mudanza: embalaje, transporte y
                                    desembalaje.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-yellow-500 font-semibold text-lg">$200.000</span>
                                    <a href="#"
                                        class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-4 rounded transition duration-300 flex items-center">
                                        <i class="fas fa-info-circle mr-2"></i> Detalles
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Resultado 3 -->
                        <div
                            class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp flex flex-col md:flex-row items-center">
                            <img src="https://via.placeholder.com/150" alt="Asistencia Técnica"
                                class="w-full md:w-40 h-40 object-cover rounded-md mb-4 md:mb-0 md:mr-6">
                            <div class="flex-1">
                                <h4 class="text-xl font-bold mb-2">Asistencia Técnica</h4>
                                <p class="text-gray-300 mb-4">Servicio de asistencia técnica para garantizar el
                                    correcto
                                    funcionamiento de tu vehículo.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-red-500 font-semibold text-lg">$300.000</span>
                                    <a href="#"
                                        class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-4 rounded transition duration-300 flex items-center">
                                        <i class="fas fa-info-circle mr-2"></i> Detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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