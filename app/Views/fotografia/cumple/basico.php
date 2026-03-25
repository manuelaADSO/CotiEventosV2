<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-violet-400 via-violet-200 to-violet-300 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                    Paquete Básico - Cumpleaños
                </h1>
                <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                    Cobertura esencial para capturar los momentos más divertidos de tu fiesta.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + SERVICIOS -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div class="flex justify-center order-1 md:order-2 opacity-0 animate-fadeIn">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/cumple/basico/individual.webp"
                     class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-violet-200">
            </div>

            <div class="order-2 md:order-1 opacity-0 animate-fadeIn delay-200">
                <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
                    Qué incluye este paquete
                </h2>
                <p class="text-gray-600 mb-4">
                    Cobertura de los momentos más importantes de la fiesta, para que tengas recuerdos llenos de diversión y alegría.
                </p>

                <ul class="list-none space-y-3 text-gray-600">
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">🎂</span> Cobertura del pastel y brindis</li>
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">🎉</span> Fotos espontáneas de invitados y juegos</li>
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">📸</span> Retratos con amigos y familiares</li>
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">💾</span> Entrega digital de todas las fotos en alta resolución</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- GALERÍA -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-olive-600 mb-8">Galería del Paquete Básico</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/cumple/basico/solo.webp" 
                class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/cumple/basico/individual.webp" 
                class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/cumple/basico/familia.webp" 
                class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition">
            </div>
                  <div class="flex justify-center mt-10">
            <p class="text-xs text-gray-500 text-center max-w-xl">
                *Algunas imágenes son de referencia y pertenecen a sus respectivos autores. 
                Se utilizan únicamente con fines demostrativos.
            </p>
        </div>
    </section>

    <!-- BOTONES -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center flex flex-col md:flex-row justify-center gap-4">
            <a href="<?= BASE_URL ?>/fotografia/cumple"
               class="inline-block bg-violet-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-violet-300 transition">
               Volver a Paquetes Cumpleaños
            </a>

            <a href="<?= BASE_URL ?>/carrito"
               class="inline-block bg-violet-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-violet-400 transition">
               Reserva tu Paquete
            </a>
        </div>
    </section>

</main>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn { animation: fadeIn 0.8s forwards; }
    .animate-fadeIn.delay-200 { animation-delay: 0.2s; }
</style>