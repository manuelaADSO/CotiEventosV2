<!-- HERO -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-sky-300 via-emerald-300 to-yellow-300 text-olive py-20">
        <div class="max-w-6xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Graduación 
            </h1>
            <p class="text-lg opacity-90">
                Celebra el cierre de una etapa inolvidable con una experiencia única.
            </p>
        </div>
    </section>
</div>

<!-- DESCRIPCIÓN + IMAGEN CIRCULAR -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- TEXTO -->
        <div>
            <h2 class="text-3xl font-bold text-pink-600 mb-4">
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
            <p class="text-gray-600">
                Vive una celebración elegante, divertida y completamente personalizada.
            </p>
        </div>

        <!-- IMAGEN CIRCULAR -->
        <div class="flex justify-center">
            <img src="./assets/img/eventos/graduacion/inicio/evento_3.webp"
                 class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-sky-200">
        </div>

    </div>
</section>

<!-- SERVICIOS DE GRADUACIÓN -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-pink-600 mb-12">
            Nuestros Servicios 
        </h2>

        <div class="space-y-10">

            <!-- VESTUARIOS -->
            <a href="<?= BASE_URL ?>/vestuarios"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <!-- Línea lateral decorativa -->
                <div class="absolute left-0 top-0 h-full w-2 bg-pink-500"></div>

                <div class="flex items-start gap-6">

                    <!-- Icono -->
                    <div class="text-4xl bg-pink-100 text-pink-600 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🎓
                    </div>

                    <!-- Texto -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-pink-600 transition">
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

                <div class="absolute left-0 top-0 h-full w-2 bg-yellow-400"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-yellow-100 text-yellow-600 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🍽️
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-yellow-500 transition">
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

                <div class="absolute left-0 top-0 h-full w-2 bg-blue-500"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-blue-100 text-blue-600 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🎶
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition">
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

                <div class="absolute left-0 top-0 h-full w-2 bg-green-500"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-green-100 text-green-600 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        📸
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 -2 group-hover:text-green-600 transition">
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
