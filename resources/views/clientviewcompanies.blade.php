<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Empresas - SERVICE?</title>
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
            transition: opacity 0.5s ease;
        }

        body.loaded {
            opacity: 1;
        }
    </style>
</head>

<body class="text-white">

    <!-- Navbar -->
    <nav class="flex flex-wrap justify-between items-center p-5 bg-gray-800 shadow-lg">
        <div class="text-2xl font-bold"><a href="{{ route('clienthome') }}">SERVICE?</a></div>
        <div class="hidden md:flex items-center space-x-4">
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

    <!-- Sección de Ver Empresas -->
    <section class="flex flex-col justify-center items-center min-h-screen px-5 animate__animated animate__fadeIn">
        <div class="mt-12 mb-12 w-full max-w-6xl bg-gray-800 bg-opacity-80 p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-6">Ver Empresas</h2>

            <div class="flex flex-col md:flex-row">
                <!-- Filtros (si se desea agregar en el futuro) -->
                <aside class="w-full md:w-1/4 bg-gray-700 bg-opacity-50 p-6 rounded-lg shadow-md mb-6 md:mb-0 md:mr-6">
                    <h3 class="text-xl font-semibold mb-4">Filtros</h3>
                    <label class="block text-sm font-medium text-gray-200 mb-1">Tipo de Servicio</label>
                    <select
                        class="block w-full bg-gray-600 text-white border border-gray-600 rounded-md py-2 pl-3 pr-10 focus:outline-none focus:ring focus:ring-blue-300">
                        <option value="">Selecciona una opción</option>
                        <option value="mudanza">Mudanza</option>
                        <option value="flete">Flete</option>
                    </select>
                </aside>

                <!-- Resultados de Empresas -->
                <main class="w-full md:w-3/4">
                    <h3 class="text-2xl font-semibold mb-6">Lista de Empresas</h3>
                    <div class="space-y-6">
                        <!-- Empresa 1 -->
                        <div
                            class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp flex flex-col md:flex-row items-center">
                            <img src="https://via.placeholder.com/150" alt="Empresa A"
                                class="w-full md:w-40 h-40 object-cover rounded-md mb-4 md:mb-0 md:mr-6">
                            <div class="flex-1">
                                <h4 class="text-xl font-bold mb-2">Empresa A</h4>
                                <p class="text-gray-300 mb-4">Expertos en mudanzas nacionales e internacionales.</p>
                                <p>Servicio: Mudanza
                                    <br>
                                    <span class="text-green-500">Disponible</span>
                                </p>
                                <p>Horario: Lunes a Viernes de 9:00 a 18:00</p>
                                <div class="flex justify-between items-center">
                                    <a href="#"
                                        class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-4 rounded transition duration-300 flex items-center">
                                        <i class="fas fa-info-circle mr-2"></i> Ver Detalles
                                    </a>
                                    <a href="#"
                                        class="bg-green-600 hover:bg-green-500 text-white font-semibold py-1 px-4 rounded transition duration-300 flex items-center">
                                        <i class="fas fa-envelope mr-2"></i> Chat
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Empresa 2 -->
                        <div
                            class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp flex flex-col md:flex-row items-center">
                            <img src="https://via.placeholder.com/150" alt="Empresa A"
                                class="w-full md:w-40 h-40 object-cover rounded-md mb-4 md:mb-0 md:mr-6">
                            <div class="flex-1">
                                <h4 class="text-xl font-bold mb-2">Empresa B</h4>
                                <p class="text-gray-300 mb-4">Fletes locales</p>
                                <p>Servicio: Flete
                                    <br>
                                    <span class="text-green-500">Disponible</span>
                                </p>
                                <p>Horario: Lunes a Viernes de 9:00 a 18:00</p>
                                <div class="flex justify-between items-center">
                                    <a href="#"
                                        class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-4 rounded transition duration-300 flex items-center">
                                        <i class="fas fa-info-circle mr-2"></i> Ver Detalles
                                    </a>
                                    <a href="#"
                                        class="bg-green-600 hover:bg-green-500 text-white font-semibold py-1 px-4 rounded transition duration-300 flex items-center">
                                        <i class="fas fa-envelope mr-2"></i> Chat
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Empresa 3 -->
                        <div
                            class="bg-gray-700 p-6 rounded-lg shadow-md hover:bg-gray-600 transition duration-300 animate__animated animate__fadeInUp flex flex-col md:flex-row items-center">
                            <img src="https://via.placeholder.com/150" alt="Empresa A"
                                class="w-full md:w-40 h-40 object-cover rounded-md mb-4 md:mb-0 md:mr-6">
                            <div class="flex-1">
                                <h4 class="text-xl font-bold mb-2">Empresa C</h4>
                                <p class="text-gray-300 mb-4">Expertos en mudanzas nacionales e internacionales.</p>
                                <p>Servicio: Mudanza
                                    <br>
                                    <span class="text-green-500">Disponible</span>
                                </p>
                                <p>Horario: Lunes a Viernes de 9:00 a 18:00</p>
                                <div class="flex justify-between items-center">
                                    <a href="#"
                                        class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-4 rounded transition duration-300 flex items-center">
                                        <i class="fas fa-info-circle mr-2"></i> Ver Detalles
                                    </a>
                                    <a href="#"
                                        class="bg-green-600 hover:bg-green-500 text-white font-semibold py-1 px-4 rounded transition duration-300 flex items-center">
                                        <i class="fas fa-envelope mr-2"></i> Chat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 p-4 text-center">
        <p>&copy; 2024 SERVICE? Todos los derechos reservados.</p>
    </footer>

    <script>
        // Script para mostrar menú hamburguesa
        document.getElementById('menu-toggle').onclick = function () {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        }

        // Para mostrar la página después de que se cargue
        window.onload = function () {
            document.body.classList.add('loaded');
        }
    </script>
</body>

</html>