<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pollo en salsa cremosa con pasta fusilli</title>

<!-- TailwindCSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

</head>

<body class="bg-white">

<main class="pt-32">

<div class="max-w-7xl mx-auto px-6">

<div class="grid lg:grid-cols-2 gap-10">

<!-- IMAGEN PRINCIPAL -->
<div class="overflow-hidden rounded-3xl shadow-md">
<img id="imagen-principal"
src="/cotieventosV2/assets/img/banquete/menu/inicio/pollo_cremoso.webp"
class="w-full h-full object-contain transition duration-700"
alt="Pollo en salsa cremosa con pasta fusilli">
</div>

<!-- INFORMACIÓN -->
<div>

<span class="inline-block text-4xl font-bold text-gray-800 mb-4">
Menu
</span>

<h1 class="text-4xl md:text-5xl font-normal leading-tight mt-2">
Pollo en salsa cremosa con pasta fusilli
</h1>

<p class="text-gray-500 mt-4 text-xl leading-relaxed">
Trozos de pollo dorado bañados en una suave salsa cremosa,
servidos sobre pasta fusilli. Una combinación cremosa y delicada,
perfecta para quienes aman la pasta.
</p>

<h2 class="font-bold text-2xl my-6">
$649.999
</h2>

<!-- CANTIDAD DE PORCIONES -->
<div class="mt-6">

<label class="block text-lg font-semibold text-gray-700 mb-3">
Cantidad de porciones
</label>

<input type="number"
min="1"
value="1"
class="border border-gray-400 rounded-full w-24 h-12 px-4 text-center focus:outline-none focus:ring-2 focus:ring-amber-400">

</div>

<!-- BOTONES -->
<div class="flex gap-4 mt-8">

<a href="<?= BASE_URL ?>/platillo"
class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
Añadir al carrito
</a>

<a href="<?= BASE_URL ?>/menu"
class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
Volver atrás
</a>

</div>

</div>
</div>
</div>


<!-- SLIDER MINIATURAS -->
<div class="max-w-7xl mx-auto mt-12 px-6">

<div class="swiper mySwiper">

<div class="swiper-wrapper">

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/menu/02_menu/01_salsa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/menu/02_menu/02_salsa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/menu/02_menu/03_salsa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/menu/02_menu/04_salsa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/menu/02_menu/05_salsa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/menu/02_menu/06_salsa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/menu/02_menu/07_salsa.webp"
class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
</div>

<div class="swiper-slide">
<img src="/cotieventosV2/assets/img/banquete/menu/02_menu/08_salsa.webp"
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