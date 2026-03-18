<!-- ===== HERO ===== -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-purple-500 via-purple-200 to-purple-400 py-24">
        <div class="max-w-6xl mx-auto text-center px-6">

            <h1 class="text-5xl md:text-6xl font-extrabold tracking-wide text-gray-800 mb-6">
               Vestidos y Trajes para Cumpleaños
            </h1>

            <div class="w-24 h-1 bg-purple-500 mx-auto mb-6 rounded-full"></div>

            <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-3xl mx-auto">
                Celebra tu cumpleaños con un look espectacular.
                Diseños modernos, elegantes y llenos de estilo para que seas el centro de todas las miradas
                en tu día más especial.
            </p>

        </div>
    </section>
</div>


<!-- ===== CONTENIDO ===== -->
<div class="max-w-7xl mx-auto px-6 py-16">

    <!-- Encabezado + botón decorativo -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-12">

        <h2 class="text-3xl md:text-4xl font-semibold text-gray-800">
            Elige Tu Outfit Ideal
        </h2>

 <span class="block text-4xl font-bold text-gray-800 mb-4">
  Cumpleaños
</span>
    </div>

    <!-- Selector de género -->
    <div class="mb-14 max-w-md">
        <label class="block text-lg font-semibold mb-3 text-gray-700">
            Seleccionar género
        </label>

        <select id="genero"
    class="w-full border border-gray-300 rounded-xl px-5 py-4 text-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
    <option value="femenino" selected>Femenino</option>
    <option value="nina">Niña</option>
    <option value="masculino">Masculino</option>
    <option value="nino">Niño</option>
</select>
        </select>
    </div>


    <!-- GRID PRODUCTOS -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-12">

        <!-- ================= FEMENINO ================= -->

        <!-- 1 -->
        <div class="producto" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_corto.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido fiesta o coctel</h3>
                    <p class="text-2xl font-bold mb-6">$449.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/vestidos/fiesta" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-xl hover:bg-orange-600 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 2 -->
        <div class="producto" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_coctel.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido Corto Casual</h3>
                    <p class="text-2xl font-bold mb-6">$429.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/vestidos/corto" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-xl hover:bg-orange-600 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 3 -->
        <div class="producto" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_largo.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3"> Vestido Largo Elegante</h3>
                    <p class="text-2xl font-bold mb-6">$479.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/vestidos/largo" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-xl hover:bg-orange-600 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 4 -->
        <div class="producto" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_capas.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">  Vestido con Volantes o Capas</h3>
                    <p class="text-2xl font-bold mb-6">$459.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/vestidos/capas" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-xl hover:bg-orange-600 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- ================= NIÑA ================= -->

<div class="producto hidden" data-genero="nina">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/cumple/vestuarios/nina/princesa.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Princesa Encantada</h3>
            <p class="text-2xl font-bold mb-6">$379.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nina/princesa" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

<div class="producto hidden" data-genero="nina">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/cumple/vestuarios/nina/unicornio.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Fantasía Unicornio</h3>
            <p class="text-2xl font-bold mb-6">$359.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nina/unicornio" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

<div class="producto hidden" data-genero="nina">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/cumple/vestuarios/nina/floral.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Jardín Floral</h3>
            <p class="text-2xl font-bold mb-6">$369.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nina/floral" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

<div class="producto hidden" data-genero="nina">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/cumple/vestuarios/nina/brillo.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Glamour Brillante</h3>
            <p class="text-2xl font-bold mb-6">$399.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/nina/brillo" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

        <!-- ================= MASCULINO ================= -->

        <!-- 5 -->
        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/trajes/conjunto_casual.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Outfit Casual Moderno</h3>
                    <p class="text-2xl font-bold mb-6">$549.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/trajes/casual" class="inline-block bg-gray-900 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 6 -->
        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/trajes/conjunto_jeans.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Outfit relajado con jeans</h3>
                    <p class="text-2xl font-bold mb-6">$599.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/trajes/jeans" class="inline-block bg-gray-900 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 7 -->
        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/trajes/conjunto_moderno.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Look semiformal moderno</h3>
                    <p class="text-2xl font-bold mb-6">$579.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/trajes/semiformal" class="inline-block bg-gray-900 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 8 -->
        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/cumple/vestuarios/trajes/traje_sin_corbata.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Traje contemporáneo sin corbata</h3>
                    <p class="text-2xl font-bold mb-6">$559.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/cumple/trajes/comtemporaneo" class="inline-block bg-gray-900 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

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



    </div>
</div>


<!-- ===== SCRIPT SELECTOR ===== -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const generoSelect = document.getElementById('genero');

    generoSelect.addEventListener('change', function() {
        const generoSeleccionado = this.value;
        const productos = document.querySelectorAll('.producto');

        productos.forEach(producto => {
            if (producto.dataset.genero === generoSeleccionado) {
                producto.classList.remove('hidden');
            } else {
                producto.classList.add('hidden');
            }
        });
    });
});
</script>