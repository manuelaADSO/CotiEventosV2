<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detalle de Plato</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-5xl mx-auto px-6 py-12">

    <!-- IMAGEN PRINCIPAL -->
    <div>
        <img id="imagen-principal"
             src="./assets/img/banquete/menu/pollo_cremoso.webp"
             class="w-full h-[520px] object-cover rounded-3xl shadow-xl">
    </div>

    <!-- CONTENIDO -->
    <div class="mt-12 text-center md:text-left">

        <h1 class="text-4xl md:text-5xl font-light text-gray-900 leading-tight">
            Pollo en salsa cremosa con pasta fusilli
        </h1>

        <p class="text-gray-600 mt-6 text-lg leading-relaxed">
            Trozos de pollo dorado bañados en una suave salsa cremosa,
            servidos sobre pasta fusilli. Una combinación cremosa y delicada,
            perfecta para quienes aman la pasta.
        </p>

        <!-- Cantidad y Precio -->
        <div class="mt-8 flex flex-col md:flex-row md:items-center md:gap-8">

            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Cantidad de porciones
                </label>

                <input type="number"
                       min="1"
                       placeholder="1"
                       class="w-40 px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-amber-400">
            </div>

            <div class="mt-6 md:mt-0">
                <h3 class="text-3xl font-semibold text-gray-900">
                    $380.000
                </h3>
            </div>
        </div>

        <!-- Botón -->
        <div class="mt-8">
            <a href="<?= BASE_URL ?>module=platillos&view=principal"
               class="inline-block bg-gray-900 text-white px-10 py-4 rounded-full text-lg hover:bg-gray-700 transition duration-300 shadow-lg">
                Añadir al carrito
            </a>
        </div>

    </div>

    <!-- MINIATURAS COMPLETAS -->
    <div class="mt-16">

        <h3 class="text-2xl font-semibold text-center mb-8 text-gray-800">
            Más imágenes del platillo
        </h3>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">

            <img src="./assets/img/banquete/menu/02_menu/01_salsa.webp"
                 class="w-full h-48 object-cover rounded-2xl cursor-pointer hover:scale-105 transition duration-300 shadow"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/02_menu/02_salsa.webp"
                 class="w-full h-48 object-cover rounded-2xl cursor-pointer hover:scale-105 transition duration-300 shadow"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/02_menu/03_salsa.web"
                 class="w-full h-48 object-cover rounded-2xl cursor-pointer hover:scale-105 transition duration-300 shadow"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/02_menu/04_salsa.web"
                 class="w-full h-48 object-cover rounded-2xl cursor-pointer hover:scale-105 transition duration-300 shadow"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/02_menu/05_salsa.web"
                 class="w-full h-48 object-cover rounded-2xl cursor-pointer hover:scale-105 transition duration-300 shadow"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/02_menu/06_salsa.web"
                 class="w-full h-48 object-cover rounded-2xl cursor-pointer hover:scale-105 transition duration-300 shadow"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/02_menu/07_salsa.web"
                 class="w-full h-48 object-cover rounded-2xl cursor-pointer hover:scale-105 transition duration-300 shadow"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/02_menu/08_salsa.web"
                 class="w-full h-48 object-cover rounded-2xl cursor-pointer hover:scale-105 transition duration-300 shadow"
                 onclick="cambiarImagen(this)">
        </div>

    </div>

</div>

<script>
function cambiarImagen(imagenPequena) {
    document.getElementById("imagen-principal").src = imagenPequena.src;
}
</script>

</body>
</html>