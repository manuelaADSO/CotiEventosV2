<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Postre</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

<div class="max-w-7xl mx-auto px-6 py-10">

    <!-- CONTENIDO PRINCIPAL -->
    <div class="grid md:grid-cols-2 gap-12 items-start">

        <!-- Imagen principal -->
        <div>
            <img id="imagen-principal"
                 src="https://i.pinimg.com/1200x/a9/5a/e1/a95ae145802d9c053abe032f6904a505.jpg"
                 class="w-full h-[520px] object-cover rounded-3xl shadow-lg">
        </div>

        <!-- Información -->
        <div class="flex flex-col justify-between h-full">

            <div>
                <h1 class="text-4xl md:text-5xl font-light leading-tight">
                    Cheesecake de cereza y chocolate
                </h1>

                <p class="text-gray-600 mt-6 text-lg leading-relaxed">
                    Base de galleta de chocolate con relleno cremoso
                    y cobertura de cerezas en salsa brillante.
                    Intenso, dulce y con un toque frutal irresistible.
                </p>

                <!-- Cantidad -->
                <div class="mt-6">
                    <label class="block text-gray-500 text-lg mb-2">
                        Cantidad de porciones
                    </label>
                    <input type="number"
                           class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                           placeholder="Ej: 50">
                </div>
            </div>

            <!-- Precio y botón -->
            <div class="mt-10">
                <h2 class="text-3xl font-semibold">$380.000</h2>

                <a href="<?= BASE_URL ?>?module=postres&view=principal"
                   class="inline-block mt-6 bg-black text-white px-8 py-4 rounded-full hover:bg-gray-800 transition">
                    Añadir al carrito
                </a>
            </div>

        </div>
    </div>

    <!-- MINIATURAS (8 COMPLETAS) -->
    <div class="mt-20">

        <h2 class="text-2xl font-light mb-8">
            Más diseños de postres
        </h2>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">

            <img src="./assets/img/banquete/postre/04_postre/01_cereza.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/04_postre/02_cereza.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/04_postre/03_cereza.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/04_postre/04_cereza.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/04_postre/05_cereza.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/04_postre/06_cereza.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/04_postre/07_cereza.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/04_postre/08_cereza.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">
        </div>
    </div>

</div>

<!-- SCRIPT -->
<script>
function cambiarImagen(imagenPequena) {
    document.getElementById("imagen-principal").src = imagenPequena.src;
}
</script>

</body>
</html>