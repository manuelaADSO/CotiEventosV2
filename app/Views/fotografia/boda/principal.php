<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-pink-400 via-pink-200 to-pink-300 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive">
                    Fotografía de Bodas
                </h1>
                <p class="text-lg text-olive/90">
                    Capturamos cada mirada, lágrima y sonrisa del día más especial.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + IMAGEN CIRCULAR -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- IMAGEN -->
            <div class="flex justify-center order-1 md:order-2">
                <img src="/cotieventosV2/assets/img/fotografia/inicio/foto.webp"
                     class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-pink-200">
            </div>

            <!-- TEXTO -->
            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-olive-600 mb-12">
                    Cada boda, una historia
                </h2>
                <p class="text-gray-600 mb-4">
                    Desde los preparativos hasta el último baile, capturamos cada instante con elegancia y sensibilidad.
                </p>
                <p class="text-gray-600 mb-4">
                    Nuestro equipo de fotógrafos profesionales utiliza técnicas modernas para garantizar imágenes llenas de emoción y detalles inolvidables.
                </p>
                <p class="text-gray-600 mb-4">
                    Disfruta tu día especial con tranquilidad, nosotros nos encargamos de conservar los recuerdos para siempre.
                </p>
            </div>

        </div>
    </section>

    <!-- PAQUETES DE BODAS -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-4xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
                Paquetes de Bodas
            </h2>

            <div class="space-y-10">

               <!-- PAQUETE BÁSICO -->
<a href="<?= BASE_URL ?>/fotografia/boda/basico" class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
    <div class="absolute left-0 top-0 h-full w-2 bg-pink-200"></div>

    <div class="flex items-start gap-6">
        <div class="text-4xl bg-pink-200 text-pink-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
            💍
        </div>

        <div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-pink-400 transition">
                Paquete Básico
            </h3>
            <p class="text-gray-600">
                Cobertura de la ceremonia y primeras horas de la celebración, fotos espontáneas y retratos familiares.
            </p>
        </div>
    </div>
</a>

<!-- PAQUETE PREMIUM -->
<a href="<?= BASE_URL ?>/fotografia/boda/premium" class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
    <div class="absolute left-0 top-0 h-full w-2 bg-rose-300"></div>

    <div class="flex items-start gap-6">
        <div class="text-4xl bg-rose-300 text-rose-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
            🥂
        </div>

        <div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-rose-400 transition">
                Paquete Premium
            </h3>
            <p class="text-gray-600">
                Cobertura completa del evento, desde preparativos hasta el último baile, fotos de grupo y detalles decorativos.
            </p>
        </div>
    </div>
</a>

<!-- PAQUETE VIP -->
<a href="<?= BASE_URL ?>/fotografia/boda/vip" class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
    <div class="absolute left-0 top-0 h-full w-2 bg-fuchsia-200"></div>

    <div class="flex items-start gap-6">
        <div class="text-4xl bg-fuchsia-200 text-fuchsia-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
            🌟
        </div>

        <div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-fuchsia-400 transition">
                Paquete VIP
            </h3>
            <p class="text-gray-600">
                Cobertura total del evento, sesión previa de retratos, álbum digital, y acceso a todas las fotos en alta resolución.
            </p>
        </div>
    </div>
</a>
            </div>
        </div>
    </section>

</main>