<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Postres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

<!-- Hero Postres -->
 <div class="pt-20">
<section class="min-h-[60vh] flex items-center justify-center bg-gradient-to-r from-violet-400 via-violet-200 to-violet-300">
    <div class="max-w-6xl mx-auto text-center px-6">

        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-800 mb-6">
            Nuestros Postres
        </h1>

        <div class="w-24 h-1 bg-violet-500 mx-auto mb-6 rounded-full"></div>

        <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
            Delicias irresistibles elaboradas con dedicación y detalle.
            Sabores suaves, texturas perfectas y presentaciones encantadoras
            que convierten cada celebración en una experiencia dulce e inolvidable.
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
                <a href="<?= BASE_URL ?>/detallespostres/01postre"
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
                <a href="<?= BASE_URL ?>/detallespostres/02postre"
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
                <a href="<?= BASE_URL ?>/detallespostres/03postre"
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
                <a href="<?= BASE_URL ?>/detallespostres/04postre"
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
                <a href="<?= BASE_URL ?>/detallespostres/05postre"
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
                <a href="<?= BASE_URL ?>/detallespostres/06postre"
                   class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition">
                    Ver más
                </a>
            </div>
        </div>

    </div>

</section>

</body>
</html>