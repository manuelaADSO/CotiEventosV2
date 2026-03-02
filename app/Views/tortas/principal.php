<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tortas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- HERO -->
    <section class="relative h-[420px] flex items-center justify-center bg-cover bg-center"
        style="background-image: url('./assets/img/banquete/torta/grado/inicio/01_torta.webp');">

        <!-- Overlay oscuro -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl font-light tracking-wide">
                Tortas para cada ocasión
            </h1>
            <p class="mt-4 text-lg font-light">
                Diseños únicos y personalizados para tus eventos especiales
            </p>
        </div>
    </section>


    <!-- CONTENIDO -->
    <section class="max-w-7xl mx-auto px-6 py-16 bg-white shadow-sm">

        <div class="grid grid-cols-2 md:grid-cols-3 gap-10">

            <!-- Card -->
            <div class="text-center group">
                <img src="./assets/img/banquete/torta/grado/inicio/01_torta.webp"
                     class="w-full h-72 object-cover rounded-lg shadow-md group-hover:scale-105 transition duration-300"
                     alt="Torta XV años">
                <h3 class="mt-4 text-2xl font-semibold">Torta de Graduación Lila con Birrete</h3>
                <p class="text-xl font-medium mt-1">$149.999</p>

                <a href="<?= BASE_URL ?>module=tortas&view=detalle_xv"
                   class="inline-block mt-4 px-6 py-2 border border-gray-700 text-gray-700 rounded-full hover:bg-gray-800 hover:text-white transition">
                    Ver más
                </a>
            </div>

            <!-- Card -->
            <div class="text-center group">
                <img src="./assets/img/banquete/torta/grado/inicio/02_torta.webp"
                     class="w-full h-72 object-cover rounded-lg shadow-md group-hover:scale-105 transition duration-300"
                     alt="Torta Matrimonio">
                <h3 class="mt-4 text-2xl font-semibold">Torta de Graduación Blanca con Birrete y Detalles Negros/h3>
                <p class="text-xl font-medium mt-1">$149.999</p>

                <a href="<?= BASE_URL ?>module=tortas&view=detalle_boda"
                   class="inline-block mt-4 px-6 py-2 border border-gray-700 text-gray-700 rounded-full hover:bg-gray-800 hover:text-white transition">
                    Ver más
                </a>
            </div>

            <!-- Card -->
            <div class="text-center group">
                <img src="./assets/img/banquete/torta/grado/inicio/03_torta.webp"
                     class="w-full h-72 object-cover rounded-lg shadow-md group-hover:scale-105 transition duration-300"
                     alt="Torta Bautizo">
                <h3 class="mt-4 text-2xl font-semibold">Torta de Graduación “Class of 2025”/h3>
                <p class="text-xl font-medium mt-1">$149.999</p>

                <a href="<?= BASE_URL ?>module=tortas&view=detalle_bautizo"
                   class="inline-block mt-4 px-6 py-2 border border-gray-700 text-gray-700 rounded-full hover:bg-gray-800 hover:text-white transition">
                    Ver más
                </a>
            </div>

            <!-- Card -->
            <div class="text-center group">
                <img src="./assets/img/banquete/torta/grado/inicio/04_torta.webp"
                     class="w-full h-72 object-cover rounded-lg shadow-md group-hover:scale-105 transition duration-300"
                     alt="Torta Cumpleaños">
                <h3 class="mt-4 text-2xl font-semibold">Torta de Graduación Minimalista con Birrete</h3>
                <p class="text-xl font-medium mt-1">$149.999</p>

                <a href="<?= BASE_URL ?>module=tortas&view=detalle_cumple"
                   class="inline-block mt-4 px-6 py-2 border border-gray-700 text-gray-700 rounded-full hover:bg-gray-800 hover:text-white transition">
                    Ver más
                </a>
            </div>

            <!-- Card -->
            <div class="text-center group">
                <img src="./assets/img/banquete/torta/grado/inicio/05_torta.webp"
                     class="w-full h-72 object-cover rounded-lg shadow-md group-hover:scale-105 transition duration-300"
                     alt="Torta Baby Shower">
                <h3 class="mt-4 text-2xl font-semibold">Torta de Graduación Decorativa con Siluetas</h3>
                <p class="text-xl font-medium mt-1">149.999</p>

                <a href="<?= BASE_URL ?>module=tortas&view=detalle_baby_shower"
                   class="inline-block mt-4 px-6 py-2 border border-gray-700 text-gray-700 rounded-full hover:bg-gray-800 hover:text-white transition">
                    Ver más
                </a>
            </div>

            <!-- Card -->
            <div class="text-center group">
                <img src="./assets/img/banquete/torta/grado/inicio/06_torta.webp"
                     class="w-full h-72 object-cover rounded-lg shadow-md group-hover:scale-105 transition duration-300"
                     alt="Torta Graduación">
                <h3 class="mt-4 text-2xl font-semibold">Torta de Graduación Dorada con Base Decorativa</h3>
                <p class="text-xl font-medium mt-1">$149.999</p>

                <a href="<?= BASE_URL ?>module=tortas&view=detalle_graduacion"
                   class="inline-block mt-4 px-6 py-2 border border-gray-700 text-gray-700 rounded-full hover:bg-gray-800 hover:text-white transition">
                    Ver más
                </a>
            </div>

        </div>

    </section>

</body>
</html>