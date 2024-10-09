<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - SERVICE?</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .carousel-container {
            max-width: 800px; /* Ancho máximo del carrusel */
            margin: 0 auto; /* Centra el carrusel */
            position: relative; /* Necesario para los botones */
        }
        #backToTop {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4F46E5;
            /* color azul */
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        #backToTop:hover {
            background-color: #3730A3;
            /* color azul más oscuro */
            transform: scale(1.1);
        }

        .icon-bounce {
            animation: bounce 1.5s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.5s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
        }

        .animate-on-scroll.active {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .carousel {
            position: relative;
            overflow: hidden;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel-item {
            min-width: 100%;
            transition: opacity 1s ease;
        }

        .subscribe-form {
            background-color: #4F46E5;
            padding: 20px;
            border-radius: 8px;
        }

        .subscribe-form input {
            border-radius: 4px;
            padding: 10px;
            margin-right: 10px;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">

    <nav class="flex justify-between items-center p-5 bg-gray-800 shadow-lg">
        <div class="text-2xl font-bold">SERVICE?</div>
        <div class="flex space-x-4">
            <a href="{{ route('register') }}"
                class="flex items-center bg-green-600 hover:bg-green-500 text-white font-semibold py-2 px-4 rounded">
                <i class="fas fa-user-plus mr-2"></i> Registrarse
            </a>
            <a href="{{ route('login') }}"
                class="flex items-center bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded">
                <i class="fas fa-sign-in-alt mr-2"></i> Iniciar Sesión
            </a>
        </div>
    </nav>

    <header class="text-center py-20">
        <h1 class="text-5xl font-bold">Tu mudanza, nuestra prioridad</h1>
        <p class="mt-4 text-xl">Encuentra y compara las mejores empresas de mudanzas en un solo lugar.</p>
        <a href="#"
            class="mt-8 inline-block bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-6 rounded-full">Comienza
            Ahora</a>
    </header>

    <div class="carousel mb-10 carousel-container">
        <div class="carousel-inner" id="carouselInner">
            <div class="carousel-item active">
                <img src="{{ asset('images/mudanza1.jpg') }}" alt="Mudanza 1" class="w-full rounded-lg">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/mudanza2.jpg') }}" alt="Mudanza 2" class="w-full rounded-lg">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/mudanza3.jpg') }}" alt="Mudanza 3" class="w-full rounded-lg">
            </div>
        </div>

        <button id="prev"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-600 hover:bg-gray-500 text-white p-2 rounded-full">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button id="next"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-600 hover:bg-gray-500 text-white p-2 rounded-full">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <section class="px-5 md:px-10 py-16">
        <h2 class="text-4xl font-bold text-center">¿Por qué elegir SERVICE?</h2>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-800 p-5 rounded-lg shadow-lg text-center animate-on-scroll">
                <i class="fas fa-check-circle text-green-500 text-3xl icon-bounce"></i>
                <h3 class="text-xl font-bold mt-4">Comparación Fácil</h3>
                <p class="mt-2">Compara precios y servicios en segundos.</p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg shadow-lg text-center animate-on-scroll">
                <i class="fas fa-users text-blue-500 text-3xl icon-bounce"></i>
                <h3 class="text-xl font-bold mt-4">Opiniones Confiables</h3>
                <p class="mt-2">Accede a valoraciones de usuarios reales.</p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg shadow-lg text-center animate-on-scroll">
                <i class="fas fa-clock text-yellow-500 text-3xl icon-bounce"></i>
                <h3 class="text-xl font-bold mt-4">Ahorra Tiempo</h3>
                <p class="mt-2">Encuentra el servicio adecuado sin complicaciones.</p>
            </div>
        </div>
    </section>

    <section class="bg-gray-800 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-white">Beneficios para Nuestros Usuarios</h2>
            <table class="min-w-full mt-8 bg-gray-900 rounded-lg">
                <thead>
                    <tr class="bg-gray-700">
                        <th class="py-3 px-4 text-left">Beneficio</th>
                        <th class="py-3 px-4 text-left">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-600">
                        <td class="py-3 px-4">Precios Competitivos</td>
                        <td class="py-3 px-4">Acceso a una amplia variedad de opciones a precios justos.</td>
                    </tr>
                    <tr class="hover:bg-gray-600">
                        <td class="py-3 px-4">Transparencia Total</td>
                        <td class="py-3 px-4">Sin costos ocultos ni sorpresas en la factura final.</td>
                    </tr>
                    <tr class="hover:bg-gray-600">
                        <td class="py-3 px-4">Servicio Personalizado</td>
                        <td class="py-3 px-4">Servicio adaptado a tus necesidades.</td>
                    </tr>
                    <tr class="hover:bg-gray-600">
                        <td class="py-3 px-4">Seguridad</td>
                        <td class="py-3 px-4">Garantía de un servicio confiable y seguro.</td>
                    </tr>
                    <tr class="hover:bg-gray-600">
                        <td class="py-3 px-4">Calidad</td>
                        <td class="py-3 px-4">Encuentra las opciones más valoradas por otros usuarios.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="py-16">
    <h2 class="text-4xl font-bold text-center">Nuestros Servicios</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-10">
        <div class="flex flex-col items-center">
            <i class="fas fa-truck text-5xl text-green-500 icon-bounce"></i>
            <p class="mt-2">Mudanzas Locales</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="fas fa-box-open text-5xl text-blue-500 icon-bounce"></i>
            <p class="mt-2">Embalaje Seguro</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="fas fa-clock text-5xl text-yellow-500 icon-bounce"></i>
            <p class="mt-2">Entregas Puntuales</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="fas fa-users text-5xl text-red-500 icon-bounce"></i>
            <p class="mt-2">Soporte 24/7</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="fas fa-clipboard-list text-5xl text-purple-500 icon-bounce"></i>
            <p class="mt-2">Cotizaciones Rápidas</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="fas fa-smile text-5xl text-pink-500 icon-bounce"></i>
            <p class="mt-2">Satisfacción Garantizada</p>
        </div>
    </div>
</section>

    <footer class="bg-gray-800 py-5 text-center">
        <p>© 2024 SERVICE?. Todos los derechos reservados.</p>
    </footer>

    <div id="backToTop" title="Volver Arriba">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        // Mostrar y ocultar el botón "Volver Arriba"
        window.onscroll = function () {
            const backToTopButton = document.getElementById('backToTop');
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        };

        // Volver al inicio de la página al hacer clic en el botón
        document.getElementById('backToTop').onclick = function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };

        // Animación al hacer scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.animate-on-scroll');
            const windowHeight = window.innerHeight;

            elements.forEach(element => {
                const positionFromTop = element.getBoundingClientRect().top;

                if (positionFromTop - windowHeight <= 0) {
                    element.classList.add('active');
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll); // Para animar los elementos al cargar

        // Carrusel de imágenes
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length;

        document.getElementById('next').onclick = function () {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        };

        document.getElementById('prev').onclick = function () {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel();
        };

        const updateCarousel = () => {
            const carouselInner = document.getElementById('carouselInner');
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
            items.forEach((item, index) => {
                item.style.opacity = (index === currentIndex) ? '1' : '0';
            });
        };
    </script>

</body>

</html>