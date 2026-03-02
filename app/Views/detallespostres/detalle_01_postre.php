<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Postre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

<div class="max-w-7xl mx-auto px-4 py-12">

    <!-- CONTENIDO PRINCIPAL -->
    <div class="grid md:grid-cols-2 gap-16 items-start">

        <!-- Imagen principal -->
        <div>
            <img id="imagen-principal"
                 src="https://i.pinimg.com/1200x/1e/92/70/1e92708d4c30a0c225cd6e2a8d6aac8b.jpg"
                 class="w-full h-[520px] object-cover rounded-3xl shadow-lg">
        </div>

        <!-- Información -->
        <div class="flex flex-col justify-between h-full">

            <div>
                <h1 class="text-4xl md:text-5xl font-light leading-tight">
                    Cheesecake de fresa
                </h1>

                <p class="text-gray-600 mt-6 text-lg leading-relaxed">
                    Suave base de galleta con una cremosa mezcla de queso,
                    cubierta con salsa y fresas frescas.
                    Dulce, ligeramente ácida y muy refrescante.
                </p>

                <!-- Input -->
                <label class="block mt-8 text-gray-500 text-lg">
                    Cantidad de porciones
                </label>
                <input type="number"
                       class="w-full mt-2 px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-gray-900 focus:outline-none"
                       placeholder="0">
            </div>

            <!-- Precio y botón -->
            <div class="mt-10">
                <h3 class="text-3xl font-semibold">
                    $380.000
                </h3>

                <a href="<?= BASE_URL ?>module=platillos&view=principal"
                   class="inline-block mt-6 bg-black text-white px-8 py-3 rounded-full hover:bg-gray-800 transition">
                    Añadir al carrito
                </a>
            </div>

        </div>

    </div>


    <!-- MINIATURAS (LAS 8 ORIGINALES) -->
    <div class="mt-20">

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">

            <img src="./assets/img/banquete/postre/01_postre/01_fresa.webp"
                 class="w-full h-[300px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/01_postre/02_fresa.webp"
                 class="w-full h-[300px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/01_postre/03_fresa.webp"
                 class="w-full h-[300px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/01_postre/04_fresa.webp"
                 class="w-full h-[300px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/01_postre/05_fresa.webp"
                 class="w-full h-[300px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/01_postre/06_fresa.webp"
                 class="w-full h-[300px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/01_postre/07_fresa.webp"
                 class="w-full h-[300px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/01_postre/08_fresa.webp"
                 class="w-full h-[300px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
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