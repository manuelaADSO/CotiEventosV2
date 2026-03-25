<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vestido Imperio XV</title>

  <!-- TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<body class="bg-white">

 <main class="pt-32 pb-20"><!-- pt-32 para separar del header fijo -->
    <!-- CONTENEDOR PRINCIPAL -->
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-10">

        <!-- IMAGEN PRINCIPAL -->
        <div>
          <div class="w-full max-h-[500px] md:max-h-[600px] mx-auto overflow-hidden rounded-3xl">
            <img id="imagen-principal"
                 src="/cotieventosV2/assets/img/eventos/xv/vestuarios/vestidos/vestido_imperio.webp"
                 class="w-full h-full object-contain transition duration-700"
                 alt="Vestido Imperio">
          </div>
        </div>

        <!-- INFORMACIÓN -->
        <div>
          <span class="inline-block text-4xl font-bold text-gray-800 mb-4">XV</span>

          <h1 class="text-4xl md:text-5xl font-normal leading-tight mt-2">
            Vestido Imperio
          </h1>

          <p class="text-gray-500 mt-4 text-xl leading-relaxed">
            La cintura está justo debajo del busto, y la falda cae recta o ligeramente acampanada.
            Este estilo da un look delicado y elegante, ideal para chicas bajitas o con cuerpo más delgado,
            ya que alarga visualmente la figura. Suele usarse con telas ligeras como gasa o chiffon.
          </p>

          <h2 class="font-bold text-3xl my-4">$499.990</h2>

          <!-- TALLAS -->
          <div class="flex gap-3 mt-4">
            <button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">S</button>
            <button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">M</button>
            <button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">L</button>
            <button class="border border-gray-400 rounded-full px-4 py-2 hover:bg-gray-100">XL</button>
          </div>

                <div class="flex gap-4 mt-6"> <!-- flex horizontal con separación de 4 -->
  <a href="<?= BASE_URL ?>/xv"
     class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
    Añadir al carrito
  </a>

  <a href="<?= BASE_URL ?>/vestidosxv"
     class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
    Volver atrás
  </a>
</div>
        </div>
      </div>
    </div>

    <!-- SLIDER AUTOMÁTICO DE MINIATURAS -->
    <div class="max-w-7xl mx-auto mt-10 px-6">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <!-- Miniaturas -->
          <div class="swiper-slide">
            <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/vestidos/miniaturas/imperio/01_imperio.webp"
                 class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
          </div>
          <div class="swiper-slide">
            <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/vestidos/miniaturas/imperio/02_imperio.webp"
                 class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
          </div>
          <div class="swiper-slide">
            <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/vestidos/miniaturas/imperio/03_imperio.webp"
                 class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
          </div>
          <div class="swiper-slide">
            <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/vestidos/miniaturas/imperio/04_imperio.webp"
                 class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
          </div>
          <div class="swiper-slide">
            <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/vestidos/miniaturas/imperio/05_imperio.webp"
                 class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
          </div>
          <div class="swiper-slide">
            <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/vestidos/miniaturas/imperio/06_imperio.webp"
                 class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
          </div>
          <div class="swiper-slide">
            <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/vestidos/miniaturas/imperio/07_imperio.webp"
                 class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
          </div>
          <div class="swiper-slide">
            <img src="/cotieventosV2/assets/img/eventos/xv/vestuarios/vestidos/miniaturas/imperio/08_imperio.webp"
                 class="rounded-3xl h-[300px] w-full object-cover cursor-pointer">
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- SCRIPTS -->
 <!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  // Inicializar Swiper
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,          // miniaturas visibles en móvil
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    breakpoints: {
      768: {
        slidesPerView: 4      // miniaturas visibles en escritorio
      }
    }
  });

  // Seleccionar imagen principal
  const imagenPrincipal = document.getElementById('imagen-principal');

  // Seleccionar todas las miniaturas
  const miniaturas = document.querySelectorAll('.swiper-slide img');

  // Añadir evento click a cada miniatura
  miniaturas.forEach(mini => {
    mini.addEventListener('click', () => {
      // Transición suave usando opacidad
      imagenPrincipal.style.opacity = 0;
      setTimeout(() => {
        imagenPrincipal.src = mini.src;
        imagenPrincipal.style.opacity = 1;
      }, 200); // 200ms para que desaparezca antes de cambiar
    });
  });
</script>>
</body>
</html>