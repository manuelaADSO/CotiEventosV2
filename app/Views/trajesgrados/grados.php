<!-- ===== HERO ===== -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-blue-400 via-blue-300 to-blue-400 py-24">
        <div class="max-w-6xl mx-auto text-center px-6">

            <h1 class="text-5xl md:text-6xl font-extrabold tracking-wide text-gray-800 mb-6">
               Vestidos y Trajes 
            </h1>

            <div class="w-24 h-1 bg-blue-500 mx-auto mb-6 rounded-full"></div>

            <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-3xl mx-auto">
                Descubre vestidos y trajes diseñados para destacar en tu graduación.
                Cada detalle refleja elegancia, carácter y distinción,
                para que elijas el look perfecto en el día que marca un nuevo comienzo.
            </p>

        </div>
    </section>
</div>


<!-- ===== CONTENIDO ===== -->
<div class="max-w-7xl mx-auto px-6 py-16">

    <!-- Encabezado + botón -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-12">

        <h2 class="text-3xl md:text-4xl font-semibold text-gray-800">
            Elige Tu Vestido o Traje Ideal
        </h2>

                <span class="inline-block text-4xl font-bold text-gray-800 mb-4">
Graduación
</span>

    </div>

    <!-- Selector -->
    <div class="mb-14 max-w-md">
        <label class="block text-lg font-semibold mb-3 text-gray-700">
            Seleccionar género
        </label>

        <select id="genero"
            class="w-full border border-gray-300 rounded-xl px-5 py-4 text-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
            <option value="masculino" selected>Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
    </div>


    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-12">

        <!-- ================= TRAJES ================= -->

        <!-- 1 -->
        <div class="producto" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_azul.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Traje Azul Oscuro Moderno</h3>
                    <p class="text-2xl font-bold mb-6">$649.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/grados/trajes/azul" class="inline-block bg-gray-900 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 2 -->
        <div class="producto" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_gris.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Traje Gris Elegante</h3>
                    <p class="text-2xl font-bold mb-6">$699.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/grados/trajes/gris" class="inline-block bg-gray-900 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 3 -->
        <div class="producto" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_negro.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Traje Clásico Negro</h3>
                    <p class="text-2xl font-bold mb-6">$649.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/grados/trajes/negro" class="inline-block bg-gray-900 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 4 -->
        <div class="producto" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_semiformal.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Estilo Semiformal con Blazer</h3>
                    <p class="text-2xl font-bold mb-6">$649.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/grados/trajes/blazer" class="inline-block bg-gray-900 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>


        <!-- ================= VESTIDOS ================= -->

        <!-- 5 -->
        <div class="producto hidden" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_largo.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido Largo Elegante</h3>
                    <p class="text-2xl font-bold mb-6">$499.990</p>
                <a href="<?= BASE_URL ?>/detallesvestuarios/grados/vestidos/largo" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 6 -->
        <div class="producto hidden" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_corto.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido Corto o Cóctel</h3>
                    <p class="text-2xl font-bold mb-6">$499.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/grados/vestidos/corto" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 7 -->
        <div class="producto hidden" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_straple.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido Straples</h3>
                    <p class="text-2xl font-bold mb-6">$499.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/grados/vestidos/straple" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        <!-- 8 -->
        <div class="producto hidden" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_manga.webp"
                     class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido de Una Sola Manga</h3>
                    <p class="text-2xl font-bold mb-6">$499.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/grados/vestidos/una_manga" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- ===== SCRIPT ===== -->
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