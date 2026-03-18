<main class="flex-grow">

    <!-- HERO SIN FOTO DE FONDO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-pink-400 via-pink-200 to-pink-300 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                    Paquete Básico - Bodas
                </h1>
                <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                    Capturamos los momentos más importantes de tu día especial.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + LISTA DE SERVICIOS -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- IMAGEN DEL PAQUETE -->
            <div class="flex justify-center order-1 md:order-2 opacity-0 animate-fadeIn">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/boda/basico/pareja.webp"
                     class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-pink-200">
            </div>

            <!-- TEXTO + SERVICIOS -->
            <div class="order-2 md:order-1 opacity-0 animate-fadeIn delay-200">
                <h2 class="text-3xl font-bold  text-center text-olive-600 mb-12">
                    Qué incluye este paquete
                </h2>
                <p class="text-gray-600 mb-4">
                    Este paquete está pensado para cubrir los momentos esenciales de tu boda, asegurando recuerdos naturales y emotivos.
                </p>

                <ul class="list-none space-y-3 text-gray-600">
                    <li class="flex items-center gap-3"><span class="text-pink-600 text-xl">💒</span> Cobertura de la ceremonia</li>
                    <li class="flex items-center gap-3"><span class="text-pink-600 text-xl">🕒</span> Primeras horas de la celebración</li>
                    <li class="flex items-center gap-3"><span class="text-pink-600 text-xl">📸</span> Fotos espontáneas de los invitados</li>
                    <li class="flex items-center gap-3"><span class="text-pink-600 text-xl">👨‍👩‍👧‍👦</span> Retratos familiares y de pareja</li>
                    <li class="flex items-center gap-3"><span class="text-pink-600 text-xl">💾</span> Entrega de fotografías digitales en alta resolución</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- GALERÍA DE FOTOS -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-olive-600 mb-8">Galería del Paquete</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/boda/basico/ceremonia.webp" 
                class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/boda/basico/invitados.webp" 
                class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/boda/basico/pareja.webp" 
                class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition">
            </div>

             <div class="flex justify-center mt-10">
            <p class="text-xs text-gray-500 text-center max-w-xl">
                *Algunas imágenes son de referencia y pertenecen a sus respectivos autores. 
                Se utilizan únicamente con fines demostrativos.
            </p>
        </div>
        </div>
    </section>

    <!-- BOTONES DE ACCIÓN -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center flex flex-col md:flex-row justify-center gap-4">
            <a href="<?= BASE_URL ?>/fotografia/boda"
               class="inline-block bg-pink-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-300 transition">
               Volver a Paquetes de Bodas
            </a>

            <a href="<?= BASE_URL ?>/carrito"
               class="inline-block bg-pink-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-400 transition">
               Reserva tu Paquete
            </a>
        </div>
    </section>

</main>

<!-- ANIMACIONES TAILWIND -->
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn { animation: fadeIn 0.8s forwards; }
    .animate-fadeIn.delay-200 { animation-delay: 0.2s; }
</style>