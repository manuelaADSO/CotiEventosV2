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

<!-- Hero Cócteles -->
 <div class="pt-20">
<section class="min-h-[60vh] flex items-center justify-center bg-gradient-to-r from-green-400 via-green-200 to-green-300">
<div class="max-w-6xl mx-auto text-center px-6">

<h1 class="text-4xl md:text-6xl font-extrabold text-gray-800 mb-6">
Nuestros Cocteles
</h1>

<div class="w-24 h-1 bg-green-500 mx-auto mb-6 rounded-full"></div>

<p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
Sabores frescos, combinaciones sofisticadas y presentaciones elegantes
que elevan cada evento. Disfruta experiencias refrescantes y únicas
diseñadas para sorprender a tus invitados.
</p>

</div>
</section>


<!-- CONTENIDO -->
<section class="max-w-7xl mx-auto px-4 py-16">

<!-- GRID -->
<div class="grid grid-cols-2 md:grid-cols-3 gap-8">


<!-- CARD 1 -->
<div class="group text-center">
<img src="./assets/img/banquete/coctel/inicio/tropical_durazno.webp"
class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">

<h3 class="font-semibold text-lg">
Cóctel tropical de durazno
</h3>

<p class="font-bold text-xl mb-3">
$650.000
</p>

<a href="<?= BASE_URL ?>/detallescocteles/01coctel"
class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
Ver más
</a>
</div>


<!-- CARD 2 -->
<div class="group text-center">
<img src="./assets/img/banquete/coctel/inicio/limonada_rosa.webp"
class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">

<h3 class="font-semibold text-lg">
Limonada rosada con menta
</h3>

<p class="font-bold text-xl mb-3">
$650.000
</p>

<a href="<?= BASE_URL ?>/detallescocteles/02coctel"
class="inline-block border border-gray-400 px-6 py-2 rounded-full hover:bg-black hover:text-white transition">
Ver más
</a>
</div>


<!-- CARD 3 -->
<div class="group text-center">
<img src="./assets/img/banquete/coctel/inicio/sunrise_tropical.webp"
class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">

<h3 class="font-semibold text-lg">
Sunrise tropical
</h3>

<p class="font-bold text-xl mb-3">
$650.000
</p>

<a href="<?= BASE_URL ?>/detallescocteles/03coctel"
class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
Ver más
</a>
</div>


<!-- CARD 4 -->
<div class="group text-center">
<img src="./assets/img/banquete/coctel/inicio/coctel_colada.webp"
class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">

<h3 class="font-semibold text-lg">
Piña colada clásica
</h3>

<p class="font-bold text-xl mb-3">
$650.000
</p>

<a href="<?= BASE_URL ?>/detallescocteles/04coctel"
class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
Ver más
</a>
</div>


<!-- CARD 5 -->
<div class="group text-center">
<img src="./assets/img/banquete/coctel/inicio/atardecer.webp"
class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">

<h3 class="font-semibold text-lg">
Cóctel atardecer de frutos rojos
</h3>

<p class="font-bold text-xl mb-3">
$650.000
</p>

<a href="<?= BASE_URL ?>/detallescocteles/05coctel"
class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
Ver más
</a>
</div>


<!-- CARD 6 -->
<div class="group text-center">
<img src="./assets/img/banquete/coctel/inicio/margarita_limon.webp"
class="w-full h-72 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">

<h3 class="font-semibold text-lg">
Margarita de limón
</h3>

<p class="font-bold text-xl mb-3">
$650.000
</p>

<a href="<?= BASE_URL ?>/detallescocteles/06coctel"
class="inline-block border border-gray-400 px-4 py-2 rounded-full text-sm hover:bg-black hover:text-white transition">
Ver más
</a>
</div>


</div>
</section>

</body>
</html>