<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Princesa Encantada - Cumpleaños</title>

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
src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nina/princesa.webp"
class="w-full h-full object-contain transition duration-700"
alt="Princesa Encantada">
</div>

<!-- INFORMACIÓN -->
<div>

<!-- CATEGORÍA -->
<span class="inline-block text-4xl font-bold text-gray-800 mb-4">
Cumpleaños
</span>

<!-- TITULO -->
<h1 class="text-4xl md:text-5xl font-semibold leading-tight">
Princesa Encantada
</h1>

<!-- DESCRIPCIÓN -->
<p class="text-gray-500 mt-4 text-lg leading-relaxed">
Un hermoso vestido con falda amplia, tul delicado y detalles brillantes que hacen sentir a la niña 
como salida de un cuento de hadas. Ideal para celebraciones mágicas donde la protagonista es la 
reina de la fiesta y cada detalle resalta su dulzura y elegancia.
</p>

<!-- PRECIO -->
<h2 class="font-bold text-2xl mt-6">$479.990</h2>

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

<a href="<?= BASE_URL ?>/trajesninacumple"
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
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nina/miniaturas/princesa/01_princesa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nina/miniaturas/princesa/02_princesa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nina/miniaturas/princesa/03_princesa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nina/miniaturas/princesa/04_princesa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nina/miniaturas/princesa/05_princesa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nina/miniaturas/princesa/06_princesa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nina/miniaturas/princesa/07_princesa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/eventos/cumple/vestuarios/nina/miniaturas/princesa/08_princesa.webp"
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