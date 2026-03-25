<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vestidos y Trajes para Cumpleaños</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

<!-- ===== HERO ===== -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-emerald-400 via-emerald-200 to-emerald-300 py-24">
        <div class="max-w-6xl mx-auto text-center px-6">
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-wide text-gray-800 mb-6">
               Vestidos y Trajes para Cumpleaños
            </h1>
            <div class="w-24 h-1 bg-emerald-500 mx-auto mb-6 rounded-full"></div>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-3xl mx-auto">
                Diseños modernos y elegantes para celebrar tu día especial.
            </p>
        </div>
    </section>
</div>

<!-- ===== CONTENIDO ===== -->
<div class="max-w-7xl mx-auto px-6 py-16">

    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-12">
        <h2 class="text-3xl md:text-4xl font-semibold text-gray-800">
            Elige Tu Outfit Ideal
        </h2>

        <span class="block text-4xl font-bold text-gray-800 mb-4">
  Cumpleaños
</span>
    </div>

    <!-- SELECT -->
    <div class="mb-14 max-w-md">
        <label class="block text-lg font-semibold mb-3 text-gray-700">
            Seleccionar género
        </label>

        <select id="genero"
            class="w-full border border-gray-300 rounded-xl px-5 py-4 text-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
            
            <option value="nino" selected>Niño</option>
            <option value="masculino">Masculino</option>
            <option value="nina">Niña</option>
            <option value="femenino">Femenino</option>
        </select>
    </div>

    <!-- GRID PRODUCTOS -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-12">

        <!-- ================= NIÑO ================= -->

<div class="producto hidden" data-genero="nino">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/cumple/vestuarios/nino/elegante.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Pequeño Caballero Elegante</h3>
            <p class="text-2xl font-bold mb-6">$389.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nino/elegante" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

<div class="producto hidden" data-genero="nino">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/cumple/vestuarios/nino/aventura.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Súper Héroe Aventurero</h3>
            <p class="text-2xl font-bold mb-6">$349.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nino/aventura" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

<div class="producto hidden" data-genero="nino">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/cumple/vestuarios/nino/vaquero.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Vaquero del Oeste</h3>
            <p class="text-2xl font-bold mb-6">$369.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nino/vaquero" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

<div class="producto hidden" data-genero="nino">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/cumple/vestuarios/nino/principe_real.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Príncipe Real</h3>
            <p class="text-2xl font-bold mb-6">$429.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nino/principe" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

        <!-- ================= MASCULINO ================= -->
        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/trajes/conjunto_casual.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">Outfit Casual Moderno</h3>
                    <p class="font-bold text-lg mb-4">$549.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/trajes/casual" class="bg-gray-900 text-white px-5 py-2 rounded-lg hover:bg-gray-700">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/trajes/conjunto_jeans.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">Outfit relajado con jeans</h3>
                    <p class="font-bold text-lg mb-4">$599.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/trajes/jeans" class="bg-gray-900 text-white px-5 py-2 rounded-lg hover:bg-gray-700">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/trajes/conjunto_moderno.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">Look semiformal moderno</h3>
                    <p class="font-bold text-lg mb-4">$579.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/trajes/semiformal" class="bg-gray-900 text-white px-5 py-2 rounded-lg hover:bg-gray-700">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/trajes/traje_sin_corbata.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">Traje contemporáneo sin corbata</h3>
                    <p class="font-bold text-lg mb-4">$559.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/trajes/comtemporaneo" class="bg-gray-900 text-white px-5 py-2 rounded-lg hover:bg-gray-700">Ver más</a>
                </div>
            </div>
        </div>

        <!-- ================= NIÑA ================= -->
        <div class="producto hidden" data-genero="nina">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/nina/princesa.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">Princesa Encantada</h3>
                    <p class="font-bold text-lg mb-4">$379.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nina/princesa" class="bg-pink-500 text-white px-5 py-2 rounded-lg hover:bg-pink-600">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="nina">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/nina/unicornio.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">Fantasía Unicornio</h3>
                    <p class="font-bold text-lg mb-4">$359.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nina/unicornio" class="bg-pink-500 text-white px-5 py-2 rounded-lg hover:bg-pink-600">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="nina">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/nina/floral.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">Jardín Floral</h3>
                    <p class="font-bold text-lg mb-4">$369.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nina/floral" class="bg-pink-500 text-white px-5 py-2 rounded-lg hover:bg-pink-600">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="nina">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/nina/brillo.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">Glamour Brillante</h3>
                    <p class="font-bold text-lg mb-4">$399.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nina/brillo" class="bg-pink-500 text-white px-5 py-2 rounded-lg hover:bg-pink-600">Ver más</a>
                </div>
            </div>
        </div>

        <!-- ================= FEMENINO ================= -->
        <div class="producto hidden" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_corto.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">Vestido fiesta o coctel</h3>
                    <p class="font-bold text-lg mb-4">$449.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/vestidos/fiesta" class="bg-orange-500 text-white px-5 py-2 rounded-lg hover:bg-orange-600">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_coctel.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2"> Vestido Corto Casual</h3>
                    <p class="font-bold text-lg mb-4">$419.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/vestidos/corto" class="bg-orange-500 text-white px-5 py-2 rounded-lg hover:bg-orange-600">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_largo.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">  Vestido Largo Elegante</h3>
                    <p class="font-bold text-lg mb-4">$479.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/vestidos/casual" class="bg-orange-500 text-white px-5 py-2 rounded-lg hover:bg-orange-600">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_capas.webp" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">  Vestido con Volantes o Capas</h3>
                    <p class="font-bold text-lg mb-4">$459.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/vestidos/capas" class="bg-orange-500 text-white px-5 py-2 rounded-lg hover:bg-orange-600">Ver más</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const generoSelect = document.getElementById('genero');
    const productos = document.querySelectorAll('.producto');

    function filtrarProductos() {
        const generoSeleccionado = generoSelect.value;

        productos.forEach(producto => {
            producto.classList.add('hidden');
            if (producto.dataset.genero === generoSeleccionado) {
                producto.classList.remove('hidden');
            }
        });
    }

    generoSelect.addEventListener('change', filtrarProductos);
    filtrarProductos();
});
</script>

</body>
</html>