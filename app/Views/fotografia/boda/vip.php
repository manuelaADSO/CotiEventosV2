<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-fuchsia-400 via-fuchsia-200 to-fuchsia-300 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                    Paquete VIP - Bodas
                </h1>
                <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                    Experiencia completa y personalizada para inmortalizar cada detalle de tu boda.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + SERVICIOS -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div class="flex justify-center order-1 md:order-2 opacity-0 animate-fadeIn">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/boda/vip/pareja.webp"
                     class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-fuchsia-200">
            </div>

            <div class="order-2 md:order-1 opacity-0 animate-fadeIn delay-200">
                <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
                    Qué incluye este paquete
                </h2>
                <p class="text-gray-600 mb-4">
                    Cobertura total, personalizada y con extras para que tu boda quede registrada de manera completa y profesional.
                </p>

                <ul class="list-none space-y-3 text-gray-600">
                    <li class="flex items-center gap-3"><span class="text-fuchsia-600 text-xl">💒</span> Cobertura completa de la ceremonia y celebración</li>
                    <li class="flex items-center gap-3"><span class="text-fuchsia-600 text-xl">🎉</span> Cobertura de preparativos, ceremonia y fiesta hasta el final</li>
                    <li class="flex items-center gap-3"><span class="text-fuchsia-600 text-xl">📸</span> Fotos espontáneas, detalles y decoración con estilo profesional</li>
                    <li class="flex items-center gap-3"><span class="text-fuchsia-600 text-xl">👨‍👩‍👧‍👦</span> Retratos familiares, pareja y amigos</li>
                    <li class="flex items-center gap-3"><span class="text-fuchsia-600 text-xl">💾</span> Entrega de todas las fotos digitales en alta resolución</li>
                    <li class="flex items-center gap-3"><span class="text-fuchsia-600 text-xl">🌟</span> Galería privada en línea + álbum digital</li>
                    <li class="flex items-center gap-3"><span class="text-fuchsia-600 text-xl">✨</span> Sesión fotográfica adicional pre/post boda si lo deseas</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- GALERÍA -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-olive-600 mb-8">Galería del Paquete VIP</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/boda/vip/pareja.webp"
                 class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/boda/vip/invitados.webp" 
                class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/boda/vip/ceremonia.webp" 
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
            <a href="<?= BASE_URL ?>/fotografia/boda"
               class="inline-block bg-fuchsia-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-fuchsia-300 transition">
               Volver a Paquetes de Bodas
            </a>

            <a href="<?= BASE_URL ?>/carrito"
               class="inline-block bg-fuchsia-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-fuchsia-400 transition">
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