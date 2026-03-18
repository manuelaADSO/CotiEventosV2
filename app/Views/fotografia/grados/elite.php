<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-cyan-500 via-cyan-200 to-cyan-400 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                    Paquete Élite - Grados
                </h1>
                <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                    Evento completo + sesión formal + álbum premium + ampliación impresa.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + SERVICIOS -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- IMAGEN DEL PAQUETE -->
            <div class="flex justify-center order-1 md:order-2 animate-fadeIn delay-200">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/grados/elite/ceremonia.webp"
                     class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-cyan-200">
            </div>

            <!-- TEXTO + SERVICIOS -->
            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-bold text-center text-olive-600 mb-4 animate-fadeIn delay-300">
                    Qué incluye este paquete
                </h2>
                <p class="text-gray-600 mb-4 animate-fadeIn delay-400">
                    Nuestro paquete más completo, ideal para quienes quieren capturar cada detalle de su graduación de manera profesional y con recuerdos físicos y digitales.
                </p>
                <ul class="list-none space-y-3 text-gray-600">
                    <li class="flex items-center gap-3 animate-fadeIn delay-500"><span class="text-cyan-600 text-xl">🎓</span> Cobertura completa del evento</li>
                    <li class="flex items-center gap-3 animate-fadeIn delay-600"><span class="text-cyan-600 text-xl">📸</span> Sesión formal del graduado</li>
                    <li class="flex items-center gap-3 animate-fadeIn delay-700"><span class="text-cyan-600 text-xl">💾</span> Fotos digitales editadas</li>
                    <li class="flex items-center gap-3 animate-fadeIn delay-800"><span class="text-cyan-600 text-xl">📖</span> Álbum premium</li>
                    <li class="flex items-center gap-3 animate-fadeIn delay-900"><span class="text-cyan-600 text-xl">🖼️</span> Ampliación impresa de la mejor foto</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- GALERÍA DE FOTOS -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-olive-600 mb-8 animate-fadeIn delay-200">Galería del Paquete</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/grados/elite/individual.webp"
                 class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-300">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/grados/elite/ceremonia.webp" 
                class="w-full h-64 object-cover rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-400">
                <img src="/cotieventosV2/assets/img/fotografia/paquetes/grados/elite/amigos.webp" 
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

    <!-- BOTONES DE ACCIÓN -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center flex flex-col md:flex-row justify-center gap-4">
            <a href="<?= BASE_URL ?>/fotografia/grados"
               class="inline-block bg-cyan-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-cyan-300 transition animate-fadeIn delay-600">
               Volver a Paquetes de Grados
            </a>
            <a href="<?= BASE_URL ?>/carrito"
               class="inline-block bg-cyan-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-cyan-400 transition animate-fadeIn delay-700">
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
.animate-fadeIn.delay-300 { animation-delay: 0.3s; }
.animate-fadeIn.delay-400 { animation-delay: 0.4s; }
.animate-fadeIn.delay-500 { animation-delay: 0.5s; }
.animate-fadeIn.delay-600 { animation-delay: 0.6s; }
.animate-fadeIn.delay-700 { animation-delay: 0.7s; }
.animate-fadeIn.delay-800 { animation-delay: 0.8s; }
.animate-fadeIn.delay-900 { animation-delay: 0.9s; }
.animate-fadeIn.delay-1000 { animation-delay: 1s; }
</style>