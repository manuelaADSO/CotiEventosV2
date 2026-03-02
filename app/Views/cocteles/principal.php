<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- TailwindCSS -->
<script src="https://cdn.tailwindcss.com"></script>

<title>Cocteles</title>
</head>

<body class="bg-white text-gray-800">

<!-- HERO -->
<section class="relative h-[450px] w-full">
    <img src="./assets/img/banquete/coctel/coctel_1.webp"
         class="absolute inset-0 w-full h-full object-cover">
    
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Cocteles</h1>
        <p class="max-w-2xl text-lg md:text-xl">
            Bebidas frescas y elegantes para acompañar tus eventos especiales.
        </p>
    </div>
</section>


<!-- CONTENIDO -->
<section class="max-w-7xl mx-auto px-4 py-16">

    <h2 class="text-2xl font-semibold text-center mb-12">
        Nuestro menú de cocteles
    </h2>

    <!-- GRID -->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-8">

        <!-- CARD 1 -->
        <div class="group">
            <img src="./assets/img/banquete/coctel/inicio/tropical_durazno.webp"
                 class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
            
            <h3 class="font-semibold text-lg">
                Cóctel tropical de durazno
            </h3>
            <p class="font-bold text-xl mb-3">$650.000</p>

            <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_01"
               class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
                Ver más
            </a>
        </div>


        <!-- CARD 2 -->
        <div class="group">
            <img src="./assets/img/banquete/coctel/inicio/limonada_rosa.webp"
                 class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
            
            <h3 class="font-semibold text-lg">
                Limonada rosada con menta
            </h3>
            <p class="font-bold text-xl mb-3">$650.000</p>

            <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_02"
               class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
                Ver más
            </a>
        </div>


        <!-- CARD 3 -->
        <div class="group">
            <img src="./assets/img/banquete/coctel/inicio/sunrise_tropical.webp"
                 class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
            
            <h3 class="font-semibold text-lg">
                Sunrise tropical
            </h3>
            <p class="font-bold text-xl mb-3">$650.000</p>

            <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_03"
               class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
                Ver más
            </a>
        </div>


        <!-- CARD 4 -->
        <div class="group">
            <img src="./assets/img/banquete/coctel/inicio/coctel_colada.webp"
                 class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
            
            <h3 class="font-semibold text-lg">
                Piña colada clásica
            </h3>
            <p class="font-bold text-xl mb-3">$650.000</p>

            <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_04"
               class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
                Ver más
            </a>
        </div>


        <!-- CARD 5 -->
        <div class="group">
            <img src="./assets/img/banquete/coctel/inicio/atardecer.webp"
                 class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
            
            <h3 class="font-semibold text-lg">
                Cóctel atardecer de frutos rojos
            </h3>
            <p class="font-bold text-xl mb-3">$650.000</p>

            <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_05"
               class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
                Ver más
            </a>
        </div>


        <!-- CARD 6 -->
        <div class="group">
            <img src="./assets/img/banquete/coctel/inicio/margarita_limon.webp"
                 class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
            
            <h3 class="font-semibold text-lg">
                Margarita de limón
            </h3>
            <p class="font-bold text-xl mb-3">$650.000</p>

            <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_06"
               class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
                Ver más
            </a>
        </div>

    </div>

</section>

</body>
</html>