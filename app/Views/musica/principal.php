<main class="flex-grow">

<!-- HERO -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-emerald-400 via-emerald-200 to-emerald-300 py-20">
        <div class="max-w-6xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive">
                Música y Efectos Especiales
            </h1>
            <p class="text-lg text-olive/90">
                Ritmo, energía y efectos visuales que convierten cada evento en una experiencia inolvidable.
            </p>
        </div>
    </section>
</div>

<!-- DESCRIPCIÓN + IMAGEN -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- IMAGEN -->
        <div class="flex justify-center order-1 md:order-2">
            <img src="./assets/img/musica/inicio/musica.webp"
                 class="w-80 h-80 object-cover rounded-full shadow-2xl border-8 border-emerald-200"
                 alt="Música y efectos especiales">
        </div>

        <!-- TEXTO -->
        <div class="order-2 md:order-1">
            <h2 class="text-3xl font-bold text-olive-600 mb-4">
                Espectáculo Musical para tu Evento
            </h2>

            <p class="text-gray-600 mb-4">
                La combinación de música y efectos especiales transforma cualquier
                celebración en un espectáculo lleno de emoción.
            </p>

            <p class="text-gray-600 mb-4">
                Ofrecemos DJs, bandas en vivo y efectos visuales que resaltan
                los momentos más importantes de cada evento.
            </p>

            <p class="text-gray-600 mb-4">
                Nuestro objetivo es crear una experiencia llena de energía,
                diversión y entretenimiento para todos los invitados.
            </p>
        </div>

    </div>
</section>

<!-- SERVICIOS -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-olive-600 mb-4">
            Servicios de Música
        </h2>

        <div class="space-y-10">

            <!-- DJ -->
            <a href="<?= BASE_URL ?>/musica/dj"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-purple-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-purple-200 text-purple-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🎧
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-purple-400 transition">
                            DJ Profesional
                        </h3>
                        <p class="text-gray-600">
                            Mezclas musicales modernas que animan cualquier tipo de evento o celebración.
                        </p>
                    </div>
                </div>
            </a>

            <!-- BANDA -->
            <a href="<?= BASE_URL ?>/musica/banda"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-blue-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-blue-200 text-blue-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        🎸
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-blue-400 transition">
                            Banda en Vivo
                        </h3>
                        <p class="text-gray-600">
                            Música en vivo con gran energía para hacer de tu evento una experiencia inolvidable.
                        </p>
                    </div>
                </div>
            </a>

            <!-- EFECTOS ESPECIALES -->
            <a href="<?= BASE_URL ?>/musica/efectosespeciales"
               class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

                <div class="absolute left-0 top-0 h-full w-2 bg-amber-200"></div>

                <div class="flex items-start gap-6">
                    <div class="text-4xl bg-amber-200 text-amber-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
                        ✨
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-amber-800 mb-2 group-hover:text-amber-400 transition">
                            Efectos Especiales
                        </h3>
                        <p class="text-gray-600">
                            Chispas frías, humo bajo y otros efectos visuales que resaltan
                            los momentos más importantes del evento.
                        </p>
                    </div>
                </div>

           <!-- PERSONALIZA TU EVENTO -->
<a href="<?= BASE_URL ?>/musica/personalizar"
   class="relative block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

    <div class="absolute left-0 top-0 h-full w-2 bg-green-200"></div>

    <div class="flex items-start gap-6">
        <div class="text-4xl bg-green-200 text-green-400 p-4 rounded-full shadow-md group-hover:scale-110 transition">
            🛠️
        </div>

        <div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-green-400 transition">
                Personaliza tu Evento
            </h3>
            <p class="text-gray-600">
                Combina DJ, Banda en Vivo y Efectos Especiales para crear el espectáculo que siempre has imaginado.
            </p>
        </div>
    </div>
</a>

        </div>

    </div>
</section>

</main>