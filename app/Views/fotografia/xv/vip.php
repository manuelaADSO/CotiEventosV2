<main class="flex-grow">

    <!-- HERO -->
    <div class="pt-20">
        <section class="bg-gradient-to-r from-violet-400 via-violet-200 to-violet-300 py-20">
            <div class="max-w-6xl mx-auto text-center px-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                    Paquete VIP - XV Años
                </h1>
                <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                    Experiencia completa y personalizada para capturar cada detalle de tu gran noche.
                </p>
            </div>
        </section>
    </div>

    <!-- DESCRIPCIÓN + SERVICIOS -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div class="flex justify-center order-1 md:order-2 opacity-0 animate-fadeIn">
                <img src="./assets/img/fotografia/xv_vip.jpg"
                     class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-violet-200">
            </div>

            <div class="order-2 md:order-1 opacity-0 animate-fadeIn delay-200">
                <h2 class="text-3xl font-bold text-center text-olive-600 mb-12">
                    Qué incluye este paquete
                </h2>
                <p class="text-gray-600 mb-4">
                    Cobertura total y personalizada de tu fiesta de XV años, incluyendo todos los momentos especiales y detalles de lujo.
                </p>

                <ul class="list-none space-y-3 text-gray-600">
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">👑</span> Cobertura completa de ceremonia y baile</li>
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">📸</span> Retratos profesionales de la quinceañera, familiares y amigos</li>
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">🎀</span> Cobertura de detalles: decoración, pastel y ambientación</li>
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">🎬</span> Video corto con los mejores momentos de la fiesta</li>
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">💾</span> Entrega de todas las fotos digitales en alta resolución</li>
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">🌟</span> Galería privada en línea + álbum digital personalizado</li>
                    <li class="flex items-center gap-3"><span class="text-violet-600 text-xl">✨</span> Sesión fotográfica pre-fiesta opcional (vestido de ensayo o sesión temática)</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- GALERÍA -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-olive-600 mb-8">Galería del Paquete VIP</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <img src="./assets/img/fotografia/xv_v1.jpg" class="rounded-xl shadow-lg hover:scale-105 transition">
                <img src="./assets/img/fotografia/xv_v2.jpg" class="rounded-xl shadow-lg hover:scale-105 transition">
                <img src="./assets/img/fotografia/xv_v3.jpg" class="rounded-xl shadow-lg hover:scale-105 transition">
            </div>
        </div>
    </section>

    <!-- BOTONES -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center flex flex-col md:flex-row justify-center gap-4">
            <a href="<?= BASE_URL ?>/fotografia/xv"
               class="inline-block bg-violet-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-violet-400 transition">
               Volver a Paquetes XV Años
            </a>

            <a href="<?= BASE_URL ?>/contacto"
               class="inline-block bg-violet-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-violet-300 transition">
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