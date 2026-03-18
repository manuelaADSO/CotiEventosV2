<div class="pt-20">
  <section class="h-[70vh] flex flex-col md:flex-row overflow-hidden relative">
    
    <div class="md:w-1/2 w-full relative group overflow-hidden">
      <img src="./assets/img/eventos/inicio/graduacion.webp" 
           alt="Graduación" 
           class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
           style="clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);">
    </div>

    <!-- Fondo negro detrás (z-0) -->
    <div class="absolute right-0 top-0 h-full w-[8%] bg-black z-0"></div>

    <div class="md:w-1/2 w-full flex flex-col justify-center items-center bg-gradient-to-br from-red-500 via-red-200 to-red-400 p-12 text-center relative z-10"
        style="margin-left: -5%; clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);">
      <div class="z-10">
        <h1 class="text-5xl md:text-7xl font-black text-gray-900 mb-2 uppercase tracking-tighter">
          Graduación
        </h1>
        <div class="h-1 w-20 bg-gray-800 mx-auto mb-6"></div>
        <h2 class="text-2xl md:text-3xl font-light text-gray-700 italic mb-6">
          Celebración Inolvidable
        </h2>
        <p class="max-w-md text-lg text-gray-800 leading-relaxed">
          Celebra el cierre de una etapa inolvidable con una experiencia única diseñada a tu medida.
        </p>
      </div>
    </div>

  </section>
</div>

<!-- DESCRIPCIÓN + IMAGEN CIRCULAR -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- TEXTO -->
        <div>
            <h2 class="text-3xl font-bold text-olive-600 mb-4">
                Una noche para recordar
            </h2>
            <p class="text-gray-600 mb-4">
                La graduación es uno de los momentos más importantes en la vida académica.
                Es el resultado de esfuerzo, dedicación y sueños cumplidos.
            </p>
            <p class="text-gray-600 mb-4">
                Nosotros nos encargamos de cada detalle para que disfrutes sin preocupaciones:
                organización, ambientación, música, vestuario y recuerdos inolvidables.
            </p>
            <p class="text-gray-600 mb-4">
                Vive una celebración elegante, divertida y completamente personalizada.
            </p>
        </div>

        <!-- IMAGEN CIRCULAR -->
        <div class="flex justify-center">
            <img src="./assets/img/eventos/graduacion/inicio/evento_3.webp"
                 class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-red-200">
        </div>

    </div>
</section>

<!-- SERVICIOS DE GRADUACIÓN -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
            Nuestros Servicios 
        </h2>

        <div class="space-y-10">

            <!-- VESTUARIOS -->
            <a href="<?= BASE_URL ?>/vestuariosgrados"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <!-- Línea lateral decorativa -->
                <div class="absolute left-0 top-0 h-full w-2 bg-sky-200"></div>

                <div class="flex items-start gap-6">

                    <!-- Icono -->
                    <div class="text-4xl bg-sky-200 text-sky-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🎓
                    </div>

                    <!-- Texto -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-sky-400 transition">
                            Vestuarios
                        </h3>
                        <p class="text-gray-600">
                            Atuendos elegantes y modernos para mujer y hombre,
                            diseñados para resaltar tu estilo en una noche inolvidable.
                        </p>
                    </div>
                </div>
            </a>

            <!-- BANQUETE -->
            <a href="<?= BASE_URL ?>/platillos"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-yellow-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-yellow-200 text-yellow-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🍽️
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-yellow-400 transition">
                            Banquete
                        </h3>
                        <p class="text-gray-600">
                            Menú cuidadosamente seleccionado con sabores exquisitos
                            y presentación elegante para celebrar este gran logro.
                        </p>
                    </div>
                </div>
            </a>

            <!-- MÚSICA -->
            <a href="<?= BASE_URL ?>/musica"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-emerald-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-emerald-200 text-emerald-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🎶
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-emerald-400 transition">
                            Música
                        </h3>
                        <p class="text-gray-600">
                            DJ profesional, sonido e iluminación para crear
                            el ambiente perfecto en una noche mágica.
                        </p>
                    </div>
                </div>
            </a>

            <!-- FOTOGRAFÍA -->
            <a href="<?= BASE_URL ?>/fotografia"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-lime-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-lime-200 text-lime-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        📸
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 -2 group-hover:text-lime-400 transition">
                            Fotografía
                        </h3>
                        <p class="text-gray-600">
                            Capturamos cada emoción y sonrisa para que tengas
                            recuerdos profesionales de este día especial.
                        </p>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>
