<!-- resources/views/clientprofile.blade.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Cliente - SERVICE?</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

            <!-- Formulario de Cerrar Sesión -->
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
        <hr class="border-gray-600 my-2"> <!-- Separador -->
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-green-600 transition duration-300">Chat</a>
        <hr class="border-gray-600 my-2"> <!-- Separador -->
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-yellow-600 transition duration-300">Crear
            Presupuesto</a>
        <hr class="border-gray-600 my-2"> <!-- Separador -->
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-purple-600 transition duration-300">Ver
            Empresas</a>
        <hr class="border-gray-600 my-2"> <!-- Separador -->
        <a href="{{ route('clientprofile.show') }}"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-gray-600 transition duration-300">Perfil</a>
        <hr class="border-gray-600 my-2"> <!-- Separador -->
        <a href="#"
            class="block text-white font-semibold py-2 px-4 rounded hover:bg-red-600 transition duration-300">Cerrar
            Sesión</a>
    </div>

    <!-- Sección Principal -->
    <section class="flex flex-col justify-center items-center min-h-screen px-5 animate__animated animate__fadeIn">
        <div class="mt-12 mb-12 w-full max-w-3xl bg-gray-800 bg-opacity-80 p-8 rounded-lg shadow-lg">

            <h2 class="text-3xl font-bold text-center mb-6">Perfil del Cliente</h2>

            @if(session('success'))
                <div class="mb-4 bg-green-600 text-white p-4 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Formulario de Perfil -->
            <form action="{{ route('clientprofile.update') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Nombre Completo -->
                <div>
                    <label for="name" class="block text-sm font-medium">Nombre Completo</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                        class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-blue-300"
                        required>
                    @error('name')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Correo Electrónico -->
                <div>
                    <label for="email" class="block text-sm font-medium">Correo Electrónico</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                        class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-blue-300"
                        required>
                    @error('email')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Teléfono -->
                <div>
                    <label for="phone" class="block text-sm font-medium">Teléfono</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone', $user->phone) }}"
                        class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-blue-300">
                    @error('phone')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <hr class="border-gray-600">

                <!-- Cambio de Contraseña -->
                <div>
                    <h3 class="text-xl font-semibold mb-2">Cambiar Contraseña</h3>
                    <p class="text-gray-400 mb-4">Deja los campos en blanco si no deseas cambiar la contraseña.</p>
                </div>

                <!-- Nueva Contraseña -->
                <div>
                    <label for="password" class="block text-sm font-medium">Nueva Contraseña</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-blue-300">
                    @error('password')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirmar Contraseña -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-blue-300">
                </div>

                <!-- Botón de Guardar Cambios -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded transition duration-300 flex items-center justify-center">
                        <i class="fas fa-edit mr-2"></i> Guardar Cambios
                    </button>
                </div>
            </form>

            <hr class="border-gray-600 my-8">

            <!-- Botón de Cerrar Sesión -->
            <div class="text-center">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-500 text-white font-semibold py-2 px-4 rounded transition duration-300 flex items-center justify-center">
                        <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-5 text-center animate__animated animate__fadeInUp">
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