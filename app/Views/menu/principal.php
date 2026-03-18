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
    <div class="pt-20">
<section class="bg-gradient-to-r from-cyan-400 via-cyan-200 to-cyan-300 py-24">
    <div class="max-w-6xl mx-auto text-center px-6">

        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-800 mb-6">
            Nuestro Menú
        </h1>

        <div class="w-24 h-1 bg-cyan-500 mx-auto mb-6 rounded-full"></div>

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
                <p class="text-xl font-bold mb-4">$649.999</p>
                <a href="<?= BASE_URL ?>/detallesmenu/01menu"
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
                <p class="text-xl font-bold mb-4">$649.999</p>
                <a href="<?= BASE_URL ?>/detallesmenu/02menu"
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
                    Pollo en salsa cremosa con papas fritas
                </h3>
                <p class="text-xl font-bold mb-4">$649.999</p>
                <a href="<?= BASE_URL ?>/detallesmenu/03menu"
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
                <p class="text-xl font-bold mb-4">$649.999</p>
                <a href="<?= BASE_URL ?>/detallesmenu/04menu"
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
                <p class="text-xl font-bold mb-4">$649.999</p>
                <a href="<?= BASE_URL ?>/detallesmenu/05menu"
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
                <p class="text-xl font-bold mb-4">$649.999</p>
                <a href="<?= BASE_URL ?>/detallesmenu/06menu"
                   class="inline-block border border-gray-400 px-6 py-2 rounded-full hover:bg-black hover:text-white transition">
                   Ver más
                </a>
            </div>
        </div>

    </div>

</main>

</body>
</html>