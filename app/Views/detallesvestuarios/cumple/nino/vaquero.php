<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vaquero del Oeste - Cumpleaños</title>

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
src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nino/vaquero.webp"
class="w-full h-full object-contain transition duration-700"
alt="Vaquero del Oeste">
</div>

<!-- INFORMACIÓN -->
<div>

<!-- CATEGORÍA -->
<span class="inline-block text-4xl font-bold text-gray-800 mb-4">
Cumpleaños
</span>

<!-- TITULO -->
<h1 class="text-4xl md:text-5xl font-semibold leading-tight">
Vaquero del Oeste
</h1>

<!-- DESCRIPCIÓN -->
<p class="text-gray-500 mt-4 text-lg leading-relaxed">
Incluye camisa a cuadros, chaleco, pantalón vaquero y sombrero estilo western. 
Este vestuario aporta un toque rústico y divertido, perfecto para fiestas temáticas campestres. 
El pequeño lucirá auténtico y listo para conquistar el “lejano oeste” en su cumpleaños.
</p>

<!-- PRECIO -->
<h2 class="font-bold text-2xl mt-6">$480.000</h2>

<!-- TALLAS -->
<div class="flex gap-3 mt-4">
<button class="border border-gray-400 rounded-full w-12 h-12 flex items-center justify-center hover:bg-gray-100">2</button>
<button class="border border-gray-400 rounded-full w-12 h-12 flex items-center justify-center hover:bg-gray-100">4</button>
<button class="border border-gray-400 rounded-full w-12 h-12 flex items-center justify-center hover:bg-gray-100">6</button>
<button class="border border-gray-400 rounded-full w-12 h-12 flex items-center justify-center hover:bg-gray-100">8</button>
</div>

<!-- BOTONES -->
<div class="flex gap-4 mt-8">

<a href="<?= BASE_URL ?>/cumple"
class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
Añadir al carrito
</a>

<a href="<?= BASE_URL ?>/trajesninocumple"
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
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nino/miniaturas/vaquero/01_vaquero.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nino/miniaturas/vaquero/02_vaquero.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nino/miniaturas/vaquero/03_vaquero.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nino/miniaturas/vaquero/04_vaquero.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nino/miniaturas/vaquero/05_vaquero.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nino/miniaturas/vaquero/06_vaquero.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nino/miniaturas/vaquero/07_vaquero.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nino/miniaturas/vaquero/08_vaquero.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

</div>

</div>

</div>

</main>

<!-- Swiper JS -->
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