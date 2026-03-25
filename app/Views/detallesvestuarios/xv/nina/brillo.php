<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vestido Glamour Brillante XV</title>

<!-- TailwindCSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body class="bg-white">

<main class="pt-32 pb-20"> 
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-10">

      <!-- IMAGEN PRINCIPAL -->
      <div>
        <div class="w-full max-h-[500px] md:max-h-[600px] mx-auto overflow-hidden rounded-3xl">
          <img id="imagen-principal"
               src="/cotieventosV2/assets/img/eventos/xv/vestuarios/nina/brillo.webp"
               class="w-full h-full object-contain transition duration-700"
               alt="Vestido Glamour Brillante">
        </div>
      </div>

      <!-- INFORMACIÓN -->
      <div>
        <span class="inline-block text-4xl font-bold text-gray-800 mb-4">
          XV
        </span>

        <h1 class="text-4xl md:text-5xl font-normal leading-tight mt-2">
          Vestido Glamour Brillante
        </h1>

        <p class="text-gray-500 mt-4 text-xl leading-relaxed">
          Vestido largo con aplicaciones de lentejuelas y detalles en la cintura, diseñado para que la niña destaque con un look moderno y elegante, combinando comodidad con estilo para toda la celebración.
        </p>

        <h2 class="font-bold text-3xl my-4">$650.000</h2>

        <!-- TALLAS -->
        <div class="flex gap-3 mt-4">
          <button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">4</button>
          <button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">6</button>
          <button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">8</button>
          <button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">10</button>
        </div>

        <!-- BOTONES -->
        <div class="flex gap-4 mt-6">
          <a href="<?= BASE_URL ?>/xv"
             class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
            Añadir al carrito
          </a>
          <a href="<?= BASE_URL ?>/vestidosninaxv"
             class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
            Volver atrás
          </a>
        </div>
      </div>

    </div>
  </div>

  <!-- SLIDER DE MINIATURAS -->
  <div class="max-w-7xl mx-auto mt-10 px-6">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/nina/miniaturas/brillo/01_brillo.webp"
               class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
        </div>
        <div class="swiper-slide">
          <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/nina/miniaturas/brillo/02_brillo.webp"
               class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
        </div>
        <div class="swiper-slide">
          <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/nina/miniaturas/brillo/03_brillo.webp"
               class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
        </div>
        <div class="swiper-slide">
          <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/nina/miniaturas/brillo/04_brillo.webp"
               class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
        </div>
        <div class="swiper-slide">
          <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/nina/miniaturas/brillo/05_brillo.webp"
               class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
        </div>
        <div class="swiper-slide">
          <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/nina/miniaturas/brillo/06_brillo.webp"
               class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
        </div>
        <div class="swiper-slide">
          <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/nina/miniaturas/brillo/07_brillo.webp"
               class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
        </div>
        <div class="swiper-slide">
          <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/nina/miniaturas/brillo/08_brillo.webp"
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
    autoplay: { delay: 3000, disableOnInteraction: false },
    breakpoints: { 768: { slidesPerView: 4 } }
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