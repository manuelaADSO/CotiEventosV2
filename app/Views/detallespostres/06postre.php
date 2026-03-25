<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Copas de Mousse de Chocolate y Vainilla</title>

<!-- TailwindCSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>

<body class="bg-light">

<main class="pt-32">

<div class="max-w-7xl mx-auto px-6">

<div class="grid lg:grid-cols-2 gap-10 items-start">

<!-- IMAGEN PRINCIPAL -->
<div class="overflow-hidden rounded-3xl shadow-md">
<img id="imagen-principal"
src="/cotieventosV2/assets/img/banquete/postre/inicio/mousse.webp"
class="w-full h-full object-contain transition duration-700"
alt="Copas de mousse de chocolate y vainilla con fresa">
</div>

<!-- INFORMACIÓN -->
<div class="flex flex-col">

<span class="inline-block text-4xl font-bold text-gray-800 mb-4">
Postre
</span>

<h2 class="text-4xl font-normal mb-4">
Copas de mousse de chocolate y vainilla con fresa
</h2>

<p class="text-gray-500 text-xl mb-4">
Capas de mousse ligera servidas en copas, decoradas con crema y fresas frescas.
Un postre elegante, cremoso y perfecto para ocasiones especiales.
</p>

<!-- CONTADOR -->
<label class="block text-lg font-semibold text-gray-700 mb-3">
Cantidad de porciones
</label>

<input type="number" min="1" value="1"
class="border border-gray-400 rounded-full w-24 h-12 px-4 text-center focus:outline-none focus:ring-2 focus:ring-amber-400 mb-6">

<h3 class="text-3xl font-bold mb-6">$380.000</h3>

<!-- BOTONES -->
<div class="flex gap-4 mt-8">

<a href="<?= BASE_URL ?>/platillos"
class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
Añadir al carrito
</a>

<a href="<?= BASE_URL ?>/postres"
class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
Volver atrás
</a>

</div>
</div>

<!-- MINIATURAS -->
<div class="max-w-7xl mx-auto mt-12 px-6">

<div class="swiper mySwiper">

<div class="swiper-wrapper">

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/postre/06_postre/01_vainilla.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/postre/06_postre/02_vainilla.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/postre/06_postre/03_vainilla.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/postre/06_postre/04_vainilla.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/postre/06_postre/05_vainilla.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/postre/06_postre/06_vainilla.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/postre/06_postre/07_vainilla.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/postre/06_postre/08_vainilla.webp"
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
768: { slidesPerView: 4 }
}
});

// Cambiar imagen principal al hacer click
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