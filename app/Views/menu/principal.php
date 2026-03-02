<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menú</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-white text-gray-900">

<!-- HERO -->
<section class="bg-gradient-to-r from-orange-100 via-amber-100 to-yellow-100 py-24">
    <div class="max-w-6xl mx-auto text-center px-6">

        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-800 mb-6">
            Nuestro Menú
        </h1>

        <div class="w-24 h-1 bg-orange-500 mx-auto mb-6 rounded-full"></div>

        <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
            Descubre una selección de platillos preparados con dedicación,
            presentación elegante y sabores que convierten cada evento
            en una experiencia gastronómica inolvidable.
        </p>

    </div>
</section>

<!-- CONTENIDO -->
<main class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid grid-cols-2 md:grid-cols-3 gap-8">

        <!-- CARD 1 -->
        <div class="group">
            <div class="overflow-hidden rounded-2xl shadow-lg">
                <img src="./assets/img/banquete/menu/inicio/pollo_papas.webp"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="mt-4 text-center">
                <h3 class="text-lg font-semibold mb-2">
                    Pollo Asado con Papas Doradas
                </h3>
                <p class="text-xl font-bold mb-4">$650.000</p>
                <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_01"
                   class="inline-block border border-gray-400 px-6 py-2 rounded-full hover:bg-black hover:text-white transition">
                   Ver más
                </a>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="group">
            <div class="overflow-hidden rounded-2xl shadow-lg">
                <img src="./assets/img/banquete/menu/inicio/pollo_cremoso.webp"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="mt-4 text-center">
                <h3 class="text-lg font-semibold mb-2">
                    Pollo en Salsa Cremosa con Pasta Fusilli
                </h3>
                <p class="text-xl font-bold mb-4">$650.000</p>
                <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_02"
                   class="inline-block border border-gray-400 px-6 py-2 rounded-full hover:bg-black hover:text-white transition">
                   Ver más
                </a>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="group">
            <div class="overflow-hidden rounded-2xl shadow-lg">
                <img src="./assets/img/banquete/menu/inicio/pollo_salsa.webp"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="mt-4 text-center">
                <h3 class="text-lg font-semibold mb-2">
                    Pollo en Salsa Especial
                </h3>
                <p class="text-xl font-bold mb-4">$650.000</p>
                <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_03"
                   class="inline-block border border-gray-400 px-6 py-2 rounded-full hover:bg-black hover:text-white transition">
                   Ver más
                </a>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="group">
            <div class="overflow-hidden rounded-2xl shadow-lg">
                <img src="./assets/img/banquete/menu/inicio/burrito.webp"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="mt-4 text-center">
                <h3 class="text-lg font-semibold mb-2">
                    Burrito Gratinado de Carne y Papas
                </h3>
                <p class="text-xl font-bold mb-4">$650.000</p>
                <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_04"
                   class="inline-block border border-gray-400 px-6 py-2 rounded-full hover:bg-black hover:text-white transition">
                   Ver más
                </a>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="group">
            <div class="overflow-hidden rounded-2xl shadow-lg">
                <img src="./assets/img/banquete/menu/inicio/lasaña.webp"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="mt-4 text-center">
                <h3 class="text-lg font-semibold mb-2">
                    Lasaña de Carne con Queso Gratinado
                </h3>
                <p class="text-xl font-bold mb-4">$650.000</p>
                <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_05"
                   class="inline-block border border-gray-400 px-6 py-2 rounded-full hover:bg-black hover:text-white transition">
                   Ver más
                </a>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="group">
            <div class="overflow-hidden rounded-2xl shadow-lg">
                <img src="./assets/img/banquete/menu/inicio/carne_pasta.webp"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="mt-4 text-center">
                <h3 class="text-lg font-semibold mb-2">
                    Carne a la Parrilla con Pasta Cremosa de Camarones
                </h3>
                <p class="text-xl font-bold mb-4">$650.000</p>
                <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_06"
                   class="inline-block border border-gray-400 px-6 py-2 rounded-full hover:bg-black hover:text-white transition">
                   Ver más
                </a>
            </div>
        </div>

    </div>

</main>

</body>
</html>