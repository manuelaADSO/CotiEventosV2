<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<title>Detalle Margarita</title>
</head>

<body class="bg-gray-50">

<div class="max-w-7xl mx-auto px-6 py-16">

    <!-- CONTENIDO PRINCIPAL -->
    <div class="grid md:grid-cols-2 gap-12 items-center mb-16">

        <!-- TEXTO -->
        <div>

            <h1 class="text-4xl md:text-5xl font-medium mb-6">
                Margarita de limón
            </h1>

            <p class="text-gray-600 text-lg leading-relaxed mb-8">
                Clásica mezcla de limón con un toque cítrico intenso,
                servida en copa escarchada.
                Ácida, refrescante y elegante.
            </p>

            <label class="block text-sm text-gray-500 mb-2">
                Cantidad de porciones
            </label>

            <input type="number"
                   placeholder="Ej: 50"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3 mb-6 focus:outline-none focus:ring-2 focus:ring-black">

            <h2 class="text-3xl font-semibold mb-6">
                $380.000
            </h2>

            <a href="<?= BASE_URL ?>module=platillos&view=principal"
               class="inline-block bg-black text-white px-8 py-4 rounded-full hover:bg-gray-800 transition">
                Añadir al carrito
            </a>

        </div>

        <!-- IMAGEN PRINCIPAL -->
        <div>
            <img id="imagen-principal"
                 src="https://i.pinimg.com/736x/d2/c3/09/d2c309a9bb2359c6595753fe10261e53.jpg"
                 class="w-full h-[450px] object-cover rounded-2xl shadow-lg">
        </div>

    </div>

    <!-- MINIATURAS (8) -->
    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-8 gap-4">

        <img src="./assets/img/banquete/coctel/06_coctel/01_limon.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/06_coctel/02_limon.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/06_coctel/03_limon.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/06_coctel/04_limon.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/06_coctel/05_limon.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/06_coctel/06_limon.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/06_coctel/07_limon.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/06_coctel/08_limon.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

    </div>

</div>

<script>
function cambiarImagen(img) {
    document.getElementById("imagen-principal").src = img.src;
}
</script>

</body>
</html>