<main class="flex-grow">

<!-- HERO -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-amber-400 via-amber-200 to-amber-300 py-20">
        <div class="max-w-6xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                Paquete Efectos Premium
            </h1>
            <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                Efectos especiales avanzados para que tu evento destaque con iluminación, humo y pirotecnia.
            </p>
        </div>
    </section>
</div>

<!-- DESCRIPCIÓN + SERVICIOS -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div class="flex justify-center order-1 md:order-2 animate-fadeIn delay-200">
            <img src="/cotieventosV2/assets/img/musica/efectos/inicio/03_efecto.webp"
                 class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-amber-400">
        </div>

        <div class="order-2 md:order-1 animate-fadeIn delay-400">
            <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
                Qué incluye este paquete
            </h2>

            <p class="text-gray-600 mb-4">
                El paquete Premium ofrece efectos especiales completos y coordinados, creando un ambiente espectacular durante todo tu evento.
            </p>

            <ul class="list-none space-y-3 text-gray-600">
                <li class="flex items-center gap-3 animate-fadeIn delay-500">
                    <span class="text-amber-600 text-xl">💡</span> Iluminación profesional con movimientos y colores dinámicos
                </li>

                <li class="flex items-center gap-3 animate-fadeIn delay-600">
                    <span class="text-amber-600 text-xl">🎉</span> Confeti, burbujas y cañones de efectos en momentos especiales
                </li>

                <li class="flex items-center gap-3 animate-fadeIn delay-700">
                    <span class="text-amber-600 text-xl">💨</span> Humo profesional y máquinas de niebla para pista de baile
                </li>

                <li class="flex items-center gap-3 animate-fadeIn delay-800">
                    <span class="text-amber-600 text-xl">🎆</span> Mini pirotecnia y efectos visuales para destacar momentos clave
                </li>

                <li class="flex items-center gap-3 animate-fadeIn delay-900">
                    <span class="text-amber-600 text-xl">🔊</span> Coordinación completa con música y animación del DJ
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
            <img src="/cotieventosV2/assets/img/musica/efectos/paquetes/premium/humo.webp" 
            class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-300">
            <img src="/cotieventosV2/assets/img/musica/efectos/paquetes/premium/burbujas.webp" 
            class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-400">
            <img src="/cotieventosV2/assets/img/musica/efectos/paquetes/premium/cañones.webp" 
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
           class="inline-block bg-amber-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-amber-300 transition animate-fadeIn delay-600">
           Volver a Paquetes de Efectos
        </a>

        <a href="<?= BASE_URL ?>/carrito"
           class="inline-block bg-amber-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-amber-400 transition animate-fadeIn delay-700">
           Reserva tu Paquete
        </a>

    </div>
</section>

</main>