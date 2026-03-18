<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Traje azul oscuro moderno - Graduación</title>

<!-- TailwindCSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body class="bg-white">

<main class="pt-32 pb-20">

<div class="max-w-7xl mx-auto px-6">

<div class="grid lg:grid-cols-2 gap-10 items-start">

<!-- IMAGEN PRINCIPAL -->
<div class="overflow-hidden rounded-3xl shadow-md">
<img id="imagen-principal"
src="/cotieventosV2/assets/img/eventos/graduacion/vestuarios/trajes/traje_azul.webp"
class="w-full h-full object-contain transition duration-700"
alt="Traje azul oscuro moderno">
</div>

<!-- INFORMACIÓN -->
<div>

<!-- CATEGORÍA -->
<span class="inline-block text-4xl font-bold text-gray-800 mb-4">
Graduación
</span>

<!-- TITULO -->
<h1 class="text-4xl md:text-5xl font-semibold leading-tight">
Traje azul oscuro moderno
</h1>

<!-- DESCRIPCIÓN -->
<p class="text-gray-500 mt-4 text-lg leading-relaxed">
Traje en tono azul marino combinado con camisa clara y corbata delgada.
Ofrece un estilo juvenil y sofisticado, ideal para destacar con elegancia
sin ser demasiado tradicional.
</p>

<!-- PRECIO -->
<h2 class="font-bold text-2xl mt-6">$649.900</h2>

<!-- TALLAS -->
<div class="flex gap-3 mt-4">
<button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">S</button>
<button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">M</button>
<button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">L</button>
<button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">XL</button>
</div>

<!-- BOTONES -->
<div class="flex gap-4 mt-8">

<a href="<?= BASE_URL ?>/grados"
class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
Añadir al carrito
</a>

<a href="<?= BASE_URL ?>/trajesgrados"
class="border border-black px-10 py-4 rounded-full hover:bg-black hover:text-white transition">
Volver atrás
</a>

</div>

</div>

</div>

</div>

<!-- SLIDER DE MINIATURAS -->
<div class="max-w-7xl mx-auto mt-12 px-6">

<div class="swiper mySwiper">

<div class="swiper-wrapper">

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/azul/01_azul.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/azul/02_azul.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/azul/03_azul.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/azul/04_azul.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/azul/05_azul.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/azul/06_azul.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/azul/07_azul.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/azul/08_azul.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

</div>

</div>

</div>

</main>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>

var swiper = new Swiper(".mySwiper", {
slidesPerView: 2,
spaceBetween: 10,
loop: true,
autoplay: {
delay: 3000,
disableOnInteraction: false
},
breakpoints: {
768: {
slidesPerView: 4
}
}
});

const imagenPrincipal = document.getElementById('imagen-principal');
const miniaturas = document.querySelectorAll('.swiper-slide img');

miniaturas.forEach(mini => {

mini.addEventListener('click', () => {

imagenPrincipal.style.opacity = 0;

setTimeout(() => {

imagenPrincipal.src = mini.src;

imagenPrincipal.style.opacity = 1;

}, 200);

});

});

</script>

</body>
</html>