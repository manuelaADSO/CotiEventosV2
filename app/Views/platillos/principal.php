<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-amber-100 via-orange-100 to-rose-100 py-24">
            <div class="max-w-5xl mx-auto text-center px-6">

                <h1 class="text-5xl md:text-6xl font-extrabold tracking-wide text-gray-800 mb-6">
                    Platillos Gourmet
                </h1>

                <div class="w-24 h-1 bg-orange-500 mx-auto mb-6 rounded-full"></div>

                <p class="text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto">
                    Una experiencia gastronómica diseñada para sorprender.
                    Presentaciones elegantes, sabores auténticos y una propuesta
                    culinaria que transforma cada celebración en un momento inolvidable.
                </p>

            </div>
        </section>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <section class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- IMAGEN CIRCULAR -->
            <div class="flex justify-center">
                <div class="w-80 h-80 rounded-full overflow-hidden shadow-2xl">
                    <img src="./assets/img/banquete/inicio/comida_3.webp"
                        class="w-full h-full object-cover"
                        alt="Platillo elegante">
                </div>
            </div>

            <!-- TEXTO Y OPCIONES -->
            <div>

                <h2 class="text-4xl font-light mb-6 text-gray-800">
                    Nuestra Propuesta
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-10">
                    Cada platillo está cuidadosamente elaborado para ofrecer
                    una combinación perfecta entre sabor, estética y sofisticación.
                    Iluminación cálida, detalles florales y una presentación moderna
                    elevan la experiencia culinaria en cada evento.
                </p>

                <!-- OPCIONES -->
                <div class="space-y-6">

                    <!-- MENÚ -->
                    <a href="<?= BASE_URL ?>/menu"
                        class="flex items-center bg-blue-50 hover:bg-blue-100 transition p-6 rounded-2xl shadow-md">

                        <div class="w-14 h-14 flex items-center justify-center bg-white rounded-full shadow text-blue-600 text-2xl">
                            🍽
                        </div>

                        <div class="ml-6">
                            <span class="text-xl font-semibold text-blue-600 block">
                                Menú
                            </span>
                            <small class="text-gray-500">
                                Platos principales preparados con sabor casero y variedad para todos los gustos.
                            </small>
                        </div>

                        <span class="ml-auto text-blue-600 text-xl">
                            →
                        </span>
                    </a>

                    <!-- POSTRES -->
                    <a href="<?= BASE_URL ?>/postres"
                        class="flex items-center bg-pink-50 hover:bg-pink-100 transition p-6 rounded-2xl shadow-md">

                        <div class="w-14 h-14 flex items-center justify-center bg-white rounded-full shadow text-pink-600 text-2xl">
                            🍰
                        </div>

                        <div class="ml-6">
                            <span class="text-xl font-semibold text-pink-600 block">
                                Postres
                            </span>
                            <small class="text-gray-500">
                                Deliciosas opciones dulces para cerrar tu experiencia con un toque especial.
                            </small>
                        </div>

                        <span class="ml-auto text-pink-600 text-xl">
                            →
                        </span>
                    </a>

                    <!-- CÓCTELES -->
                    <a href="<?= BASE_URL ?>/cocteles"
                        class="flex items-center bg-green-50 hover:bg-green-100 transition p-6 rounded-2xl shadow-md">

                        <div class="w-14 h-14 flex items-center justify-center bg-white rounded-full shadow text-green-600 text-2xl">
                            🍸
                        </div>

                        <div class="ml-6">
                            <span class="text-xl font-semibold text-green-600 block">
                                Cócteles
                            </span>
                            <small class="text-gray-500">
                                Bebidas refrescantes y creativas ideales para cualquier celebración.
                            </small>
                        </div>

                        <span class="ml-auto text-green-600 text-xl">
                            →
                        </span>
                    </a>

                    <!-- TORTAS -->
                    <a href="<?= BASE_URL ?>/tortas"
                        class="flex items-center bg-yellow-50 hover:bg-yellow-100 transition p-6 rounded-2xl shadow-md">

                        <div class="w-14 h-14 flex items-center justify-center bg-white rounded-full shadow text-yellow-600 text-2xl">
                            🎂
                        </div>

                        <div class="ml-6">
                            <span class="text-xl font-semibold text-yellow-600 block">
                                Tortas
                            </span>
                            <small class="text-gray-500">
                                Tortas personalizadas perfectas para cumpleaños, eventos y momentos únicos.
                            </small>
                        </div>

                        <span class="ml-auto text-yellow-600 text-xl">
                            →
                        </span>
                    </a>

                </div>

            </div>
        </div>

    </section>

</main>