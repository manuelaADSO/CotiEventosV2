<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Postres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

<!-- HERO -->
<section class="relative h-[450px] flex items-center justify-center text-center text-white">
    <img src="./assets/img/banquete/postre/postre_1.webp"
         class="absolute inset-0 w-full h-full object-cover">
    
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">
            Postres
        </h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">
            Dulces creaciones para cerrar tu evento con el sabor perfecto.
        </p>
    </div>
</section>

<!-- CONTENIDO -->
<section class="max-w-7xl mx-auto px-4 py-16">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

        <!-- CARD 1 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="./assets/img/banquete/postre/inicio/postre_fresa.webp"
                 class="w-full h-64 object-cover">
            <div class="p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">
                    Cheesecake de fresa
                </h3>
                <p class="text-2xl font-bold mb-4">
                    $650.000
                </p>
                <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_01"
                   class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition">
                    Ver más
                </a>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="./assets/img/banquete/postre/inicio/tiramisu.webp"
                 class="w-full h-64 object-cover">
            <div class="p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">
                    Tiramisú con frutos rojos
                </h3>
                <p class="text-2xl font-bold mb-4">
                    $650.000
                </p>
                <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_02"
                   class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition">
                    Ver más
                </a>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="./assets/img/banquete/postre/inicio/cupcake.webp"
                 class="w-full h-64 object-cover">
            <div class="p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">
                    Cupcakes de chocolate y vainilla
                </h3>
                <p class="text-2xl font-bold mb-4">
                    $650.000
                </p>
                <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_03"
                   class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition">
                    Ver más
                </a>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="./assets/img/banquete/postre/inicio/cereza_chocolate.webp"
                 class="w-full h-64 object-cover">
            <div class="p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">
                    Cheesecake de cereza y chocolate
                </h3>
                <p class="text-2xl font-bold mb-4">
                    $650.000
                </p>
                <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_04"
                   class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition">
                    Ver más
                </a>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="./assets/img/banquete/postre/inicio/flan.webp"
                 class="w-full h-64 object-cover">
            <div class="p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">
                    Flan de caramelo
                </h3>
                <p class="text-2xl font-bold mb-4">
                    $650.000
                </p>
                <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_05"
                   class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition">
                    Ver más
                </a>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <img src="./assets/img/banquete/postre/inicio/mousse.webp"
                 class="w-full h-64 object-cover">
            <div class="p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">
                    Copas de mousse de chocolate y vainilla
                </h3>
                <p class="text-2xl font-bold mb-4">
                    $650.000
                </p>
                <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_06"
                   class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition">
                    Ver más
                </a>
            </div>
        </div>

    </div>

</section>

</body>
</html>