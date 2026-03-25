<div class="pt-20">
  <section class="h-[70vh] flex flex-col md:flex-row overflow-hidden relative">
    
    <div class="md:w-1/2 w-full relative group overflow-hidden">
      <img src="./assets/img/eventos/inicio/cumple.webp" 
           alt="Cumpleaños" 
           class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
           style="clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);">
    
    </div>

    <!-- Fondo negro detrás -->
    <div class="absolute right-0 top-0 h-full w-[8%] bg-black z-0"></div>

  <div class="md:w-1/2 w-full flex flex-col justify-center items-center bg-gradient-to-br from-yellow-400 via-yellow-200 to-yellow-300 p-12 text-center relative z-10"
     style="margin-left: -5%; clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);">
  
  <div class="z-10">
    <h1 class="text-5xl md:text-7xl font-black text-gray-900 mb-2 uppercase tracking-tighter">
      Cumpleaños
    </h1>
    <div class="h-1 w-20 bg-gray-800 mx-auto mb-6"></div>
    <h2 class="text-2xl md:text-3xl font-light text-gray-700 italic mb-6">
      Celebración Inolvidable
    </h2>
    <p class="max-w-md text-lg text-gray-800 leading-relaxed">
      Un cumpleaños inolvidable comienza aquí. Diseñamos cada detalle para que sea único y especial.
    </p>
  </div>
</div>

  </section>
</div>

<!-- DESCRIPCIÓN + IMAGEN CIRCULAR -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- IMAGEN CIRCULAR -->
        <div class="flex justify-center order-1 md:order-2">
            <img src="./assets/img/eventos/cumple/inicio/evento_3.webp"
                 class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-yellow-200">
        </div>

        <!-- TEXTO -->
        <div class="order-2 md:order-1">
            <h2 class="text-3xl font-bold text-olive-600 mb-12">
                Celebra la vida con alegría
            </h2>
            <p class="text-gray-600 mb-4">
                Tu cumpleaños merece mucho más que una fiesta: merece convertirse
                en un recuerdo lleno de emoción, risas y momentos especiales.
            </p>
            <p class="text-gray-600 mb-4">
                Creamos una atmósfera única donde cada detalle celebra tu historia,
                reuniendo amigos, familia y sorpresas inolvidables.
            </p>
            <p class="text-gray-600">
                Vive una celebración divertida, colorida y completamente personalizada.
            </p>
        </div>

    </div>
</section>

<!-- SERVICIOS DE CUMPLEAÑOS -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
            Nuestros Servicios
        </h2>

        <div class="space-y-10">

            <!-- VESTUARIOS -->
            <a href="<?= BASE_URL ?>/vestuarioscumple"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-red-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-red-200 text-red-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🎉
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-red-400 transition">
                            Vestuarios
                        </h3>
                        <p class="text-gray-600">
                            Atuendos divertidos y coloridos para adultos que quieren
                            brillar en su día especial.
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
                        🍰
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-yellow-400 transition">
                            Banquete Personalizado
                        </h3>
                        <p class="text-gray-600">
                            Bocadillos, dulces y menús especiales para celebrar
                            cada año de vida con sabor y estilo.
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
                            Música y Diversión
                        </h3>
                        <p class="text-gray-600">
                            DJ, animación y sonido profesional para que todos
                            bailen y disfruten la celebración.
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
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-lime-400 transition">
                            Fotografía y Recuerdos
                        </h3>
                        <p class="text-gray-600">
                            Capturamos los momentos más felices para que
                            tengas recuerdos profesionales de tu gran día.
                        </p>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>