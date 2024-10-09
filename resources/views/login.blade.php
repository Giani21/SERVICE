<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - SERVICE?</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to right, #1F2937, #4F46E5);
        }

        /* Estilo para los iconos en los campos */
        .input-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #9CA3AF; /* Gris claro */
        }

        .relative-input {
            position: relative;
        }

        /* Animación suave al cargar el formulario */
        .form-container {
            animation: slideIn 0.8s ease-out forwards;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Botón Volver Arriba (si lo deseas incluir) */
        #backToTop {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4F46E5;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        #backToTop:hover {
            background-color: #3730A3;
            transform: scale(1.1);
        }
    </style>
</head>

<body class="text-white">

    <!-- Navbar -->
    <nav class="flex justify-between items-center p-5 bg-gray-800 shadow-lg">
        <div class="text-2xl font-bold">SERVICE?</div>
        <div>
            <a href="/" class="flex items-center bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-home mr-2"></i> Volver al Inicio
            </a>
        </div>
    </nav>

    <!-- Sección de Login -->
    <section class="flex justify-center items-center min-h-screen px-5">
        <div class="w-full max-w-2xl bg-gray-800 bg-opacity-80 p-8 rounded-lg shadow-lg form-container">
            <h2 class="text-3xl font-bold text-center mb-6">Iniciar Sesión</h2>
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Correo Electrónico -->
                <div class="relative">
                    <label for="email" class="block text-left text-sm font-bold mb-1">Correo Electrónico:</label>
                    <div class="flex items-center">
                    <i class="fas fa-envelope text-gray-400 mr-3"></i>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="w-full p-3 bg-gray-700 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-2 border-red-500 @enderror" required>
                    </div>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div class="relative">
                    <label for="password" class="block text-left text-sm font-bold mb-1">Contraseña:</label>
                    <div class="flex items-center">
                    <i class="fas fa-lock text-gray-400 mr-3"></i>
                        <input type="password" id="password" name="password"
                            class="w-full p-3 bg-gray-700 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-2 border-red-500 @enderror" required>
                    </div>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Botón de Iniciar Sesión -->
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-500 text-white font-bold py-3 px-6 rounded-lg flex items-center justify-center transition duration-300">
                    <i class="fas fa-sign-in-alt mr-2"></i> Iniciar Sesión
                </button>
            </form>

            <!-- Enlace a Registro -->
            <p class="text-center mt-6">
                ¿No tienes una cuenta?
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Regístrate</a>
            </p>
        </div>
    </section>

    <!-- Botón Volver Arriba (Opcional) -->
    <button id="backToTop" title="Volver Arriba">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Footer -->
    <footer class="bg-gray-800 py-5 text-center">
        <p>&copy; 2024 SERVICE?. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script>
        window.onscroll = function () {
            const button = document.getElementById("backToTop");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        };

        document.getElementById("backToTop").onclick = function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
    </script>
</body>

</html>
