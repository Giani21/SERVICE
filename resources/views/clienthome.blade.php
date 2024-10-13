<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Home - SERVICE?</title>
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
        <div class="text-2xl font-bold">SERVICE?</div>
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
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-green-600 transition duration-300">Buscar</a>
        <hr class="border-gray-600 my-2">
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-green-500 transition duration-300">Chat</a>
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
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-red-500 transition duration-300">Perfil</a>
        <hr class="border-gray-600 my-2">
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-gray-500 transition duration-300">Cerrar
            Sesión</a>
    </div>

    <section class=" flex flex-col justify-center items-center min-h-screen px-5 animate__animated animate__fadeIn">
        <div class="mt-12 mb-12 w-full max-w-5xl bg-gray-800 bg-opacity-80 p-8 rounded-lg shadow-lg">

            <!-- Servicios Disponibles -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold mb-6 flex items-center">
                    <i class="fas fa-wrench fa-lg mr-2"></i> Servicios Disponibles
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Tarjeta Mudanza -->
                    <div
                        class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-truck fa-3x text-blue-400 mr-4"></i>
                            <h4 class="text-xl font-bold">Mudanza</h4>
                        </div>
                        <p class="text-gray-300">Servicios de mudanza locales eficientes y confiables para tu comodidad.
                        </p>
                    </div>

                    <!-- Tarjeta Flete -->
                    <div
                        class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-box-open fa-3x text-yellow-400 mr-4"></i>
                            <h4 class="text-xl font-bold">Flete</h4>
                        </div>
                        <p class="text-gray-300">Soluciones de flete seguras para transportar tus pertenencias a
                            cualquier destino.</p>
                    </div>
                </div>
            </div>

            <hr class="border-gray-600 mb-12">

            <!-- Sistema de Grúas -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold mb-6 flex items-center">
                    <i class="fas fa-car-crash fa-lg mr-2"></i> Sistema de Grúas
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Tarjeta Grúa 1 -->
                    <div
                        class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-car fa-3x text-red-400 mr-4"></i>
                            <h4 class="text-xl font-bold">Grúa Ligera</h4>
                        </div>
                        <p class="text-gray-300">Ideal para vehículos pequeños y medianos, garantizando un traslado
                            seguro.</p>
                    </div>

                    <!-- Tarjeta Grúa 2 -->
                    <div
                        class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-truck-moving fa-3x text-red-400 mr-4"></i>
                            <h4 class="text-xl font-bold">Grúa Pesada</h4>
                        </div>
                        <p class="text-gray-300">Capacidad para vehículos grandes y comerciales, con equipos de última
                            tecnología.</p>
                    </div>

                    <!-- Tarjeta Grúa 3 -->
                    <div
                        class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-wrench fa-3x text-red-400 mr-4"></i>
                            <h4 class="text-xl font-bold">Grúa Técnica</h4>
                        </div>
                        <p class="text-gray-300">Servicios especializados para reparaciones y asistencia técnica en
                            carretera.</p>
                    </div>
                </div>
            </div>

            <hr class="border-gray-600 mb-12">

            <!-- Foro -->
            <div class="mb-8 text-center">
                <h3 class="text-2xl font-semibold mb-6 flex justify-center items-center">
                    <i class="fas fa-comments fa-lg mr-2"></i> Foro
                </h3>
                <button onclick="location.href='#'"
                    class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-6 rounded transition duration-300 flex items-center mx-auto">
                    <i class="fas fa-comments mr-2"></i> Ir al Foro
                </button>
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
            menu.classList.toggle('hidden');

            // Aplicar animación al abrir y cerrar el menú
            if (menu.classList.contains('hidden')) {
                // El menú se está ocultando
                menu.classList.remove('animate__fadeInDown');
                menu.classList.add('animate__fadeOutUp');
                setTimeout(() => {
                    menu.classList.remove('animate__fadeOutUp');
                }, 500); // Duración de la animación
            } else {
                // El menú se está mostrando
                menu.classList.add('animate__fadeInDown');
            }
        });

        // Fade in body
        window.onload = function () {
            document.body.classList.add('loaded'); // Agrega la clase para hacer visible el body
        };

    </script>
</body>

</html>