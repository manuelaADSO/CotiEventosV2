<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-cyan-500 via-cyan-200 to-cyan-400 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive">
                    Fotografía de Grados
                </h1>
                <p class="text-lg text-olive/90">
                    Celebra tu logro con recuerdos que durarán toda la vida.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + IMAGEN CIRCULAR -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- IMAGEN -->
            <div class="flex justify-center order-1 md:order-2">
                <img src="/cotieventosV2/assets/img/fotografia/inicio/grado.webp"
                     class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-cyan-200">
            </div>

            <!-- TEXTO -->
            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-olive-600 mb-12">
                    Un logro que merece ser inmortalizado
                </h2>
                <p class="text-gray-600 mb-4">
                    La graduación marca el cierre de una etapa importante y el inicio
                    de nuevos sueños. Nuestro equipo captura cada emoción,
                    sonrisa y orgullo de este momento inolvidable.
                </p>
                <p class="text-gray-600 mb-4">
                    Desde la ceremonia hasta la sesión formal,
                    cuidamos cada detalle para que tus recuerdos
                    reflejen el esfuerzo y dedicación invertidos.
                </p>
                <p class="text-gray-600 mb-4">
                    Vive tu graduación con tranquilidad,
                    nosotros nos encargamos de conservar cada instante.
                </p>
            </div>

        </div>
    </section>

    <!-- PAQUETES DE GRADOS -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-4xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
                Nuestros Paquetes de Grado
            </h2>

            <div class="flex flex-col space-y-10">

                <!-- TRADICIONAL -->
                <a href="<?= BASE_URL ?>/fotografia/grados/tradicional"
                   class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                    <div class="absolute left-0 top-0 h-full w-2 bg-emerald-200"></div>

                    <div class="flex items-start gap-6">
                        <div class="text-4xl bg-emerald-200 text-emerald-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                            📘
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-emerald-400 transition">
                                Tradicional
                            </h3>
                            <p class="text-gray-600">
                                Cobertura de ceremonia con fotografías editadas y entrega digital.
                            </p>
                        </div>
                    </div>
                </a>

                <!-- PROFESIONAL -->
                <a href="<?= BASE_URL ?>/fotografia/grados/profesional"
                   class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                    <div class="absolute left-0 top-0 h-full w-2 bg-teal-200"></div>

                    <div class="flex items-start gap-6">
                        <div class="text-4xl bg-teal-200 text-teal-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                            🎓
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-teal-400 transition">
                                Profesional
                            </h3>
                            <p class="text-gray-600">
                                Ceremonia completa más sesión individual con álbum digital.
                            </p>
                        </div>
                    </div>
                </a>

                <!-- ÉLITE -->
                <a href="<?= BASE_URL ?>/fotografia/grados/elite"
                   class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                    <div class="absolute left-0 top-0 h-full w-2 bg-cyan-200"></div>

                    <div class="flex items-start gap-6">
                        <div class="text-4xl bg-cyan-200 text-cyan-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                            🏆
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-cyan-400 transition">
                                Élite
                            </h3>
                            <p class="text-gray-600">
                                Evento + sesión formal + álbum premium + ampliación impresa.
                            </p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

</main>