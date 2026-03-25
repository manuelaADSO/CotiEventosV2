<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-blue-400 via-blue-200 to-blue-300 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive">
                    Fotografía de Bautizos
                </h1>
                <p class="text-lg text-olive/90">
                    Capturamos recuerdos tiernos y llenos de amor en un día espiritual único.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + IMAGEN CIRCULAR -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- IMAGEN -->
            <div class="flex justify-center order-1 md:order-2">
                <img src="/cotieventosV2/assets/img/fotografia/inicio/bautizo.webp"
                     class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-blue-200">
            </div>

            <!-- TEXTO -->
            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-olive-600 mb-12">
                    Un día lleno de amor y ternura
                </h2>
                <p class="text-gray-600 mb-4">
                    Desde la ceremonia hasta la celebración familiar, capturamos cada instante con cuidado y delicadeza.
                </p>
                <p class="text-gray-600 mb-4">
                    Nuestro equipo profesional asegura imágenes llenas de emoción, detalles y momentos espontáneos que quedarán para siempre.
                </p>
                <p class="text-gray-600 mb-4">
                    Disfruta este día tan especial, nosotros nos encargamos de que los recuerdos perduren.
                </p>
            </div>

        </div>
    </section>

    <!-- PAQUETES DE BAUTIZO -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
            Paquetes de Bautizo
        </h2>

        <div class="flex flex-col space-y-10">

            <!-- PAQUETE BÁSICO -->
            <a href="<?= BASE_URL ?>/fotografia/bautizo/basico"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-sky-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-sky-200 text-sky-300 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        ⛪
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-sky-300 transition">
                            Paquete Básico
                        </h3>
                        <p class="text-gray-600">
                            Cobertura de la ceremonia y fotos familiares, capturando los momentos más importantes de manera natural.
                        </p>
                    </div>
                </div>
            </a>

            <!-- PAQUETE PREMIUM -->
            <a href="<?= BASE_URL ?>/fotografia/bautizo/premium"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-cyan-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-cyan-200 text-cyan-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        👶
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-cyan-400 transition">
                            Paquete Premium
                        </h3>
                        <p class="text-gray-600">
                            Cobertura completa del bautizo y celebración, fotos de detalles, familiares y momentos espontáneos con estilo profesional.
                        </p>
                    </div>
                </div>
            </a>

            <!-- PAQUETE VIP -->
            <a href="<?= BASE_URL ?>/fotografia/bautizo/vip"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-blue-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-blue-200 text-blue-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🌟
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-blue-400 transition">
                            Paquete VIP
                        </h3>
                        <p class="text-gray-600">
                            Cobertura total de la ceremonia y celebración, sesión de retratos adicional, álbum digital y acceso a todas las fotos en alta resolución.
                        </p>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>
</main>