<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Plato</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-8 px-4">

        <!-- Imagen principal -->
        <div class="md:flex md:gap-8">
            <div class="md:w-5/12 mb-6 md:mb-0">
                <img id="imagen-principal" 
                     src="./assets/img/banquete/torta/grado/inicio/01_torta.webp" 
                     alt="Torta Baby Showers" 
                     class="rounded-2xl w-full h-auto object-cover shadow-lg">
            </div>

            <!-- Texto y precio -->
            <div class="md:w-7/12 flex flex-col justify-between">

                <div>
                    <h1 class="text-4xl md:text-5xl font-normal mb-4">Torta de Graduación Lila con Birrete</h1>
                    <p class="text-gray-600 text-lg md:text-xl mb-4">
                       Torta en tono lila decorada con birrete en la parte superior y detalles florales delicados. 
                       Ideal para celebrar un logro académico con un estilo dulce y elegante.
                    </p>

                    <!-- Input -->
                    <label class="block text-gray-500 text-lg font-medium mb-2">Cantidad de porciones</label>
                    <input type="text" placeholder="Value" 
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-gray-400">
                </div>

                <!-- Precio y botón -->
                <div class="flex flex-col md:flex-row md:items-center md:gap-6 mt-4">
                    <h2 class="text-3xl md:text-4xl font-semibold mb-4 md:mb-0">$388.800</h2>
                    <a href="<?= BASE_URL ?>module=platillos&view=principal" 
                       class="bg-gray-900 text-white px-8 py-3 rounded-full hover:bg-gray-800 transition">
                        Añadir al carrito
                    </a>
                </div>

            </div>
        </div>

 <!-- MINIATURAS (8 COMPLETAS) -->
    <div class="mt-16">

        <h2 class="text-2xl font-light mb-6">
            Más diseños de tortas
        </h2>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">

            <img src="./assets/img/banquete/torta/grado/01_torta/01_birrete.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/torta/grado/01_torta/02_birrete.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/torta/grado/01_torta/03_birrete.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/torta/grado/01_torta/04_birrete.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/torta/grado/01_torta/05_birrete.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/torta/grado/01_torta/06_birrete.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/torta/grado/01_torta/07_birrete.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/torta/grado/01_torta/08_birrete.webp"
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
    </div>

</body>
</html>