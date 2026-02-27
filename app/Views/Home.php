<!-- ================= HERO ================= -->
<section class="h-screen bg-cover bg-center flex items-center justify-center"
style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622');">

    <div class="bg-black/50 absolute inset-0"></div>

    <div class="relative text-center text-white max-w-3xl px-6">
        <h2 class="text-5xl font-extrabold mb-6">
            Celebra tus momentos con estilo 🎉
        </h2>
        <p class="mb-8 text-lg">
            Organización de eventos y cotizaciones personalizadas en minutos.
        </p>
        <div class="space-x-4">
            <a href="#" class="bg-pink-600 px-8 py-3 rounded-xl shadow-lg hover:scale-105 transition">
                Reservar Ahora
            </a>
            <a href="<?= BASE_URL ?>/eventos" class="bg-yellow-400 text-black px-8 py-3 rounded-xl shadow-lg hover:scale-105 transition">
                Ver Servicios
            </a>
        </div>
    </div>
</section>

<!-- ================= SERVICIOS ================= -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-12">Nuestros Servicios</h3>

        <div class="grid md:grid-cols-4 gap-8">

            <?php
            $services = [
                "Decoración de Fiestas",
                "Alquiler de Equipos",
                "Eventos Infantiles",
                "Diseños Personalizados"
            ];
            ?>

            <?php foreach ($services as $service): ?>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                    <img src="https://source.unsplash.com/400x300/?party" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold"><?= $service ?></h4>
                        <p class="text-sm text-gray-600 mt-2">
                            Servicio profesional y personalizado.
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- ================= GALERÍA ================= -->
<section class="bg-gray-100 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h3 class="text-3xl font-bold text-center mb-12">Galería</h3>

        <div class="grid md:grid-cols-3 gap-6">
            <?php for($i=0;$i<6;$i++): ?>
                <img src="https://i.pinimg.com/736x/ce/ce/20/cece20ab32d912872314cda596ae1c26.jpg"
                     class="rounded-2xl shadow-md hover:scale-105 transition">
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- ================= CTA PRESUPUESTO ================= -->
<section class="py-20 text-center bg-gradient-to-r from-pink-500 to-yellow-400 text-white">
    <div class="max-w-3xl mx-auto px-6">
        <h3 class="text-3xl font-bold mb-6">
            Solicita tu Presupuesto
        </h3>
        <p class="mb-8">
            Contáctanos y empieza a planear tu evento ideal.
        </p>
        <a href="<?= BASE_URL ?>/contactos" class="bg-white text-pink-600 font-semibold px-8 py-3 rounded-xl shadow-lg hover:scale-105 transition">
            Enviar Mensaje
        </a>
    </div>
</section>