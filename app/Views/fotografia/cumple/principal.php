<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-purple-500 via-purple-200 to-purple-400 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive">
                    Fotografía de Cumpleaños
                </h1>
                <p class="text-lg text-olive/90">
                    Momentos divertidos y espontáneos, capturados con creatividad y emoción.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + IMAGEN CIRCULAR -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- IMAGEN -->
            <div class="flex justify-center order-1 md:order-2">
                <img src="/cotieventosV2/assets/img/fotografia/inicio/cumple.webp"
                     class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-purple-200">
            </div>

            <!-- TEXTO -->
            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-olive-600 mb-12">
                    Celebra cada momento
                </h2>
                <p class="text-gray-600 mb-4">
                    Desde cumpleaños infantiles hasta fiestas familiares, capturamos cada instante con alegría y estilo.
                </p>
                <p class="text-gray-600 mb-4">
                    Nuestros fotógrafos profesionales utilizan técnicas modernas para que cada sonrisa y gesto quede en un recuerdo inolvidable.
                </p>
                <p class="text-gray-600 mb-4">
                    Disfruta tu celebración con tranquilidad, nosotros nos encargamos de congelar los mejores momentos.
                </p>
            </div>

        </div>
    </section>

    <!-- PAQUETES DE CUMPLEAÑOS -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-4xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
                Paquetes de Cumpleaños
            </h2>

            <div class="space-y-10">

                <!-- PAQUETE BÁSICO -->
                <a href="<?= BASE_URL ?>/fotografia/cumple/basico" class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                    <div class="absolute left-0 top-0 h-full w-2 bg-violet-200"></div>
                    <div class="flex items-start gap-6">
                        <div class="text-4xl bg-violet-200 text-violet-300 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                            🎉
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-violet-300 transition">
                                Paquete Básico
                            </h3>
                            <p class="text-gray-600">
                                Cobertura de la fiesta hasta 2 horas, con fotografías espontáneas de los momentos más importantes.
                            </p>
                        </div>
                    </div>
                </a>

                <!-- PAQUETE PREMIUM -->
                <a href="<?= BASE_URL ?>/fotografia/cumple/premium" class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                    <div class="absolute left-0 top-0 h-full w-2 bg-fuchsia-200"></div>
                    <div class="flex items-start gap-6">
                        <div class="text-4xl bg-fuchsia-200 text-fuchsia-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                            🥳
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-fuchsia-400 transition">
                                Paquete Premium
                            </h3>
                            <p class="text-gray-600">
                                Cobertura completa del evento, fotos de grupo, detalles de la decoración y sesión de retratos creativos.
                            </p>
                        </div>
                    </div>
                </a>

                <!-- PAQUETE VIP -->
                <a href="<?= BASE_URL ?>/fotografia/cumple/vip" class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                    <div class="absolute left-0 top-0 h-full w-2 bg-pink-200"></div>
                    <div class="flex items-start gap-6">
                        <div class="text-4xl bg-pink-200 text-pink-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                            🎈
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-pink-400 transition">
                                Paquete VIP
                            </h3>
                            <p class="text-gray-600">
                                Cobertura total del evento, fotos de cada detalle, álbum digital y acceso a todas las imágenes en alta calidad.
                            </p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

</main>