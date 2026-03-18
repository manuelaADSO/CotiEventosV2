<main class="flex-grow">

<!-- HERO -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-orange-400 via-orange-200 to-orange-300 py-20">
        <div class="max-w-6xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                Paquete Efectos Básico
            </h1>
            <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                Luces, humo y efectos simples para animar tu evento de manera profesional.
            </p>
        </div>
    </section>
</div>

<!-- DESCRIPCIÓN + SERVICIOS -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div class="flex justify-center order-1 md:order-2 animate-fadeIn delay-200">
            <img src="/cotieventosV2/assets/img/musica/efectos/inicio/01_efecto.webp"
                 class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-orange-200">
        </div>

        <div class="order-2 md:order-1 animate-fadeIn delay-400">
            <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
                Qué incluye este paquete
            </h2>

            <p class="text-gray-600 mb-4">
                Nuestro paquete básico de efectos especiales incluye lo necesario para crear un ambiente dinámico y atractivo en tu evento.
            </p>

            <ul class="list-none space-y-3 text-gray-600">
                <li class="flex items-center gap-3 animate-fadeIn delay-500">
                    <span class="text-orange-600 text-xl">💡</span> Iluminación básica para pista de baile
                </li>

                <li class="flex items-center gap-3 animate-fadeIn delay-600">
                    <span class="text-orange-600 text-xl">🎉</span> Máquina de confeti o burbujas
                </li>

                <li class="flex items-center gap-3 animate-fadeIn delay-700">
                    <span class="text-orange-600 text-xl">💨</span> Humo ligero para efectos
                </li>

                <li class="flex items-center gap-3 animate-fadeIn delay-800">
                    <span class="text-orange-600 text-xl">🔊</span> Coordinación con la música del evento
                </li>

                <li class="flex items-center gap-3 animate-fadeIn delay-900">
                    <span class="text-orange-600 text-xl">🎆</span> Supervisión del equipo por técnico profesional
                </li>
            </ul>

        </div>

    </div>
</section>

<!-- GALERÍA -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-olive-600 mb-8 animate-fadeIn delay-200">
            Galería del Paquete
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <img src="/cotieventosV2/assets/img/musica/efectos/paquetes/basico/burbujas.webp" 
            class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-300">
            <img src="/cotieventosV2/assets/img/musica/efectos/paquetes/basico/humo.webp"
             class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-400">
            <img src="/cotieventosV2/assets/img/musica/efectos/paquetes/basico/confeti.webp" 
            class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-500">
        </div>
         <!-- TEXTO CENTRADO -->
        <div class="flex justify-center mt-10">
            <p class="text-xs text-gray-500 text-center max-w-xl">
                *Algunas imágenes son de referencia y pertenecen a sus respectivos autores. 
                Se utilizan únicamente con fines demostrativos.
            </p>
        </div>
    </div>
</section>

<!-- BOTONES -->
<section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center flex flex-col md:flex-row justify-center gap-4">

        <a href="<?= BASE_URL ?>/musica/efectosespeciales"
           class="inline-block bg-orange-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-orange-300 transition animate-fadeIn delay-600">
           Volver a Paquetes de Efectos
        </a>

        <a href="<?= BASE_URL ?>/carrito"
           class="inline-block bg-orange-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-orange-400 transition animate-fadeIn delay-700">
           Reserva tu Paquete
        </a>

    </div>
</section>

</main>