<!-- HERO -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-rose-200 via-pink-200 to-amber-100 py-24">
        <div class="max-w-5xl mx-auto text-center px-6">

            <h1 class="text-5xl md:text-6xl font-extrabold tracking-wide text-gray-800 mb-6">
                Vestuarios de Graduación 
            </h1>

            <div class="w-24 h-1 bg-pink-500 mx-auto mb-6 rounded-full"></div>

            <p class="text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto">
                Diseños exclusivos pensados para brillar en tu gran noche.
                Elegancia, estilo y sofisticación para celebrar el cierre
                de una etapa inolvidable.
            </p>

        </div>
    </section>
</div>


<!-- CONTENIDO PRINCIPAL -->
<main class="pb-20 bg-gradient-to-b from-gray-50 to-white min-h-screen">

    <div class="max-w-6xl mx-auto px-6">

        <!-- Imagen circular + texto -->
        <div class="grid md:grid-cols-2 gap-12 items-center my-20">

            <!-- Imagen circular -->
            <div class="flex justify-center">
                <div class="w-80 h-80 rounded-full overflow-hidden shadow-2xl border-8 border-pink-200">
                    <img src="./assets/img/eventos/graduacion/vestuarios/01_grados.webp"
                         class="w-full h-full object-cover"
                         alt="Vestuario graduación">
                </div>
            </div>

            <!-- Texto -->
            <div>
                <h2 class="text-3xl font-light mb-4 text-gray-800">
                    Estilo que marca la diferencia
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed">
                    Nuestra colección de vestuarios combina tendencias modernas
                    con detalles sofisticados. Cada prenda está pensada para
                    resaltar tu personalidad y hacerte sentir seguro,
                    elegante y único en tu celebración.
                </p>
            </div>

        </div>

        <!-- Servicios decorados -->
        <div class="space-y-8">

            <!-- Vestidos Damas -->
            <a href="<?= BASE_URL ?>/vestidos"
               class="flex items-center bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition duration-300 group border-l-8 border-pink-500">

                <div class="text-4xl bg-pink-100 text-pink-600 p-4 rounded-full mr-6 group-hover:scale-110 transition">
                    👗
                </div>

                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-pink-600 transition">
                        Vestidos Damas
                    </h3>
                    <p class="text-gray-600">
                        Diseños elegantes y modernos para brillar en tu gran noche.
                    </p>
                </div>

                <span class="ml-auto text-pink-500 text-2xl group-hover:translate-x-2 transition">
                    →
                </span>
            </a>

            <!-- Trajes Caballeros -->
            <a href="<?= BASE_URL ?>/trajes"
               class="flex items-center bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition duration-300 group border-l-8 border-blue-500">

                <div class="text-4xl bg-blue-100 text-blue-600 p-4 rounded-full mr-6 group-hover:scale-110 transition">
                    🤵
                </div>

                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-blue-600 transition">
                        Trajes Caballeros
                    </h3>
                    <p class="text-gray-600">
                        Trajes sofisticados y modernos para una presentación impecable.
                    </p>
                </div>

                <span class="ml-auto text-blue-500 text-2xl group-hover:translate-x-2 transition">
                    →
                </span>
            </a>

        </div>

    </div>
</main>