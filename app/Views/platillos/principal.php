<main class="flex-grow">

<!-- HERO -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-yellow-400 via-yellow-200 to-yellow-300 py-20">
        <div class="max-w-6xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive">
                Platillos Gourmet
            </h1>
            <p class="text-lg text-olive/90">
                Sabores que convierten cada celebración en una experiencia inolvidable.
            </p>
        </div>
    </section>
</div>

<!-- DESCRIPCIÓN + IMAGEN -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- IMAGEN -->
        <div class="flex justify-center order-1 md:order-2">
            <img src="./assets/img/banquete/inicio/comida_3.webp"
                 class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-yellow-200"
                 alt="Platillo elegante">
        </div>

        <!-- TEXTO -->
        <div class="order-2 md:order-1">
            <h2 class="text-3xl font-bold text-olive-600 mb-4">
                Nuestra Propuesta Gastronómica
            </h2>

            <p class="text-gray-600 mb-4">
                Cada platillo está cuidadosamente elaborado para ofrecer
                una combinación perfecta entre sabor, estética y sofisticación.
            </p>

            <p class="text-gray-600 mb-4">
                Diseñamos experiencias culinarias que elevan cada evento,
                desde celebraciones familiares hasta grandes fiestas.
            </p>

            <p class="text-gray-600 mb-4">
                Ingredientes frescos, presentaciones elegantes y una propuesta
                gastronómica pensada para sorprender a todos tus invitados.
            </p>
        </div>

    </div>
</section>

<!-- SERVICIOS -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-olive-600 mb-4">
            Opciones Gastronómicas
        </h2>

        <div class="space-y-10">

            <!-- MENÚ -->
            <a href="<?= BASE_URL ?>/menu"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-cyan-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-cyan-300 text-cyan-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🍽
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition">
                            Menú
                        </h3>
                        <p class="text-gray-600">
                            Platos principales preparados con ingredientes frescos
                            y recetas pensadas para todos los gustos.
                        </p>
                    </div>
                </div>
            </a>

            <!-- POSTRES -->
            <a href="<?= BASE_URL ?>/postres"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-violet-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-violet-200 text-violet-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🍰
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-pink-600 transition">
                            Postres
                        </h3>
                        <p class="text-gray-600">
                            Deliciosas opciones dulces para terminar cada
                            celebración con un toque especial.
                        </p>
                    </div>
                </div>
            </a>

            <!-- CÓCTELES -->
            <a href="<?= BASE_URL ?>/cocteles"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-green-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-green-100 text-green-300 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🍸
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-green-600 transition">
                            Cócteles
                        </h3>
                        <p class="text-gray-600">
                            Bebidas refrescantes y creativas ideales
                            para brindar en cualquier celebración.
                        </p>
                    </div>
                </div>
            </a>

            <!-- TORTAS -->
            <a href="<?= BASE_URL ?>/tortas"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-indigo-100"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-indigo-200 text-indigo-300 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🎂
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-yellow-500 transition">
                            Tortas
                        </h3>
                        <p class="text-gray-600">
                            Tortas personalizadas perfectas para cumpleaños,
                            eventos especiales y celebraciones únicas.
                        </p>
                    </div>
                </div>
            </a>

        </div>

    </div>
</section>

</main> 