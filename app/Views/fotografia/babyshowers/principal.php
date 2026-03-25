<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-sky-500 via-sky-200 to-sky-400 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive">
                    Fotografía de Baby Showers
                </h1>
                <p class="text-lg text-olive/90">
                    Capturamos la dulzura y emoción antes de la llegada del bebé.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + IMAGEN CIRCULAR -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- IMAGEN -->
            <div class="flex justify-center order-1 md:order-2">
                <img src="/cotieventosV2/assets/img/fotografia/inicio/babyshowers.webp"
                     class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-sky-200">
            </div>

            <!-- TEXTO -->
            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-olive-600 mb-12">
                    Momentos llenos de ternura
                </h2>
                <p class="text-gray-600 mb-4">
                    Desde los juegos y sorpresas hasta los momentos íntimos, capturamos cada detalle con amor y sensibilidad.
                </p>
                <p class="text-gray-600 mb-4">
                    Nuestro equipo profesional asegura imágenes llenas de emoción, espontaneidad y recuerdos que durarán toda la vida.
                </p>
                <p class="text-gray-600 mb-4">
                    Disfruta la celebración con tranquilidad, nosotros nos encargamos de que los recuerdos permanezcan.
                </p>
            </div>

        </div>
    </section>

   <!-- PAQUETES DE BABY SHOWER -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
            Paquetes de Baby Shower
        </h2>

        <div class="flex flex-col space-y-10">

            <!-- PAQUETE BÁSICO -->
            <a href="<?= BASE_URL ?>/fotografia/babyshowers/basico"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-rose-300"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-rose-300 text-rose-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        👶
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-rose-500 transition">
                            Paquete Básico
                        </h3>
                        <p class="text-gray-600">
                            Cobertura de la fiesta hasta 2 horas, fotos espontáneas de los momentos más importantes y detalles decorativos.
                        </p>
                    </div>
                </div>
            </a>

            <!-- PAQUETE PREMIUM -->
            <a href="<?= BASE_URL ?>/fotografia/babyshowers/premium"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-pink-300"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-pink-300 text-pink-500 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🍼
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-pink-500 transition">
                            Paquete Premium
                        </h3>
                        <p class="text-gray-600">
                            Cobertura completa del evento, fotos de grupo, detalles de la decoración y momentos espontáneos llenos de ternura.
                        </p>
                    </div>
                </div>
            </a>

            <!-- PAQUETE VIP -->
            <a href="<?= BASE_URL ?>/fotografia/babyshowers/vip"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-fuchsia-300"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-fuchsia-300 text-fuchsia-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🌟
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-fuchsia-400 transition">
                            Paquete VIP
                        </h3>
                        <p class="text-gray-600">
                            Cobertura total del evento, sesión de retratos adicional, álbum digital y acceso a todas las fotos en alta resolución.
                        </p>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>
    </section>

</main>