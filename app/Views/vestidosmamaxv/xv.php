<!-- ===== HERO ===== -->
<div class="pt-20">
    <section class="bg-gradient-to-r from-rose-600 via-rose-400 to-rose-500 py-24">
        <div class="max-w-6xl mx-auto text-center px-6">

            <h1 class="text-5xl md:text-6xl font-extrabold tracking-wide text-gray-800 mb-6">
               Vestidos y Trajes para XV Años
            </h1>

            <div class="w-24 h-1 bg-rose-500 mx-auto mb-6 rounded-full"></div>

            <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-3xl mx-auto">
                Celebra tus XV años con un look espectacular.
                Diseños modernos, elegantes y llenos de estilo para que seas la protagonista
                en tu día más especial.
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

        <span class="inline-block text-4xl font-bold text-gray-800 mb-4">
        XV Años
        </span>
    </div>

    <!-- SELECT -->
    <div class="mb-14 max-w-md">
        <label class="block text-lg font-semibold mb-3 text-gray-700">
            Seleccionar género
        </label>

        <select id="genero"
            class="w-full border border-gray-300 rounded-xl px-5 py-4 text-lg focus:outline-none focus:ring-2 focus:ring-rose-400">
            <option value="mama" selected>Mama</option>
            <option value="femenino">Femenino</option>
            <option value="nina">Niña</option>
            <option value="masculino">Masculino</option>
            <option value="nino">Niño</option>
        </select>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-12">

        <!-- ================= MAMA ================= -->
        <div class="producto" data-genero="mama">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/mama/elegante.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Elegancia Clásica</h3>
                    <p class="text-2xl font-bold mb-6">$449.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/mama/elegante" class="inline-block bg-rose-400 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto" data-genero="mama">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/mama/moderno.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Glamour Moderno</h3>
                    <p class="text-2xl font-bold mb-6">$429.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/mama/moderno" class="inline-block bg-rose-400 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto" data-genero="mama">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/mama/floral.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Encanto Floral</h3>
                    <p class="text-2xl font-bold mb-6">$479.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/mama/floral" class="inline-block bg-rose-400 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto" data-genero="mama">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/mama/brillo.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Clásico con Brillo</h3>
                    <p class="text-2xl font-bold mb-6">$459.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/mama/brillo" class="inline-block bg-rose-400 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <!-- ================= FEMENINO ================= -->
        <div class="producto" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/vestidos/vestido_imperio.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido Imperio</h3>
                    <p class="text-2xl font-bold mb-6">$449.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/vestidos/imperio" class="inline-block bg-rose-500 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/vestidos/vestido_asimetrico.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido Asimétrico</h3>
                    <p class="text-2xl font-bold mb-6">$429.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/vestidos/asimetrico" class="inline-block bg-rose-500 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/vestidos/vestido_encaje.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido con Encaje</h3>
                    <p class="text-2xl font-bold mb-6">$479.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/vestidos/encaje" class="inline-block bg-rose-500 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto" data-genero="femenino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/vestidos/vestido_brillo.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido con Brillos o Lentejuelas</h3>
                    <p class="text-2xl font-bold mb-6">$459.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/vestidos/brillo" class="inline-block bg-rose-500 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <!-- ================= NIÑA ================= -->
   <div class="producto hidden" data-genero="nina">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/nina/princesa.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Princesita Elegante</h3>
                    <p class="text-2xl font-bold mb-6">$379.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/nina/princesa" class="inline-block bg-purple-400 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="nina">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/nina/corto.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido Corto Chic</h3>
                    <p class="text-2xl font-bold mb-6">$359.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/nina/corto" class="inline-block bg-purple-400 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="nina">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/nina/floral.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido Floral Encantador</h3>
                    <p class="text-2xl font-bold mb-6">$369.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/nina/floral" class="inline-block bg-purple-400 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="nina">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/nina/brillo.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Vestido Glamour Brillante</h3>
                    <p class="text-2xl font-bold mb-6">$399.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/nina/brillo" class="inline-block bg-purple-400 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transition">Ver más</a>
                </div>
            </div>
        </div>


        <!-- ================= MASCULINO ================= -->
       <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/trajes/traje_azul.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Traje azul rey con corbatín</h3>
                    <p class="text-2xl font-bold mb-6">$549.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/trajes/azul" class="inline-block bg-blue-300 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/trajes/traje_satinado.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Traje gris oscuro con detalles satinados</h3>
                    <p class="text-2xl font-bold mb-6">$599.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/trajes/satinado" class="inline-block bg-blue-300 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/trajes/conjunto_marfil.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Conjunto blanco o marfil</h3>
                    <p class="text-2xl font-bold mb-6">$579.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/trajes/marfil" class="inline-block bg-blue-300 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">Ver más</a>
                </div>
            </div>
        </div>

        <div class="producto hidden" data-genero="masculino">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="./assets/img/eventos/xv/vestuarios/trajes/traje_tirantes.webp" class="w-full h-[420px] object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Estilo moderno con tirantes</h3>
                    <p class="text-2xl font-bold mb-6">$559.990</p>
                    <a href="<?= BASE_URL ?>/detallesvestuarios/xv/trajes/tirantes" class="inline-block bg-blue-300 text-white px-6 py-3 rounded-xl hover:bg-gray-700 transition">Ver más</a>
                </div>
            </div>
        </div>


        <!-- ================= NIÑO ================= -->
       <div class="producto hidden" data-genero="nino">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/xv/vestuarios/nino/caballero.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Pequeño Caballero</h3>
            <p class="text-2xl font-bold mb-6">$389.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/xv/nino/caballero" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

<div class="producto hidden" data-genero="nino">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/xv/vestuarios/nino/moderno.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Traje Moderno</h3>
            <p class="text-2xl font-bold mb-6">$349.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/xv/nino/moderno" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

<div class="producto hidden" data-genero="nino">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/xv/vestuarios/nino/semiformal.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Traje Semiformal</h3>
            <p class="text-2xl font-bold mb-6">$369.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/xv/nino/semiformal" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

<div class="producto hidden" data-genero="nino">
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="./assets/img/eventos/xv/vestuarios/nino/divertido.webp"
             class="w-full h-[420px] object-cover">
        <div class="p-8 text-center">
            <h3 class="text-2xl font-semibold mb-3">Traje Temático / Divertido</h3>
            <p class="text-2xl font-bold mb-6">$429.990</p>
            <a href="<?= BASE_URL ?>/detallesvestuarios/xv/nino/divertido" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                Ver más
            </a>
        </div>
    </div>
</div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const generoSelect = document.getElementById('genero');
    const productos = document.querySelectorAll('.producto');

    productos.forEach(producto => {
        if (producto.dataset.genero !== 'mama') {
            producto.classList.add('hidden');
        }
    });

    generoSelect.addEventListener('change', function() {
        const generoSeleccionado = this.value;

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