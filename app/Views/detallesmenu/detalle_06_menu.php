<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Plato</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-7xl mx-auto px-4 py-10">

    <!-- CONTENIDO PRINCIPAL -->
    <div class="grid md:grid-cols-2 gap-12 items-start">

        <!-- Imagen principal -->
        <div>
            <img id="imagen-principal"
                 src="./assets/img/banquete/menu/carne_pasta.webp"
                 class="w-full h-[500px] object-cover rounded-3xl shadow-lg">
        </div>

        <!-- Texto del plato -->
        <div class="flex flex-col justify-between h-full">
            <div>
                <h1 class="text-4xl md:text-5xl font-light leading-tight">
                    Carne a la parrilla con pasta cremosa de camarones
                </h1>

                <p class="text-gray-600 mt-6 text-lg">
                    Corte de carne jugoso y bien sellado, acompañado de pasta en salsa cremosa con camarones. 
                    Un plato elegante que combina sabores intensos del mar y la parrilla.
                </p>

                <label class="block mt-6 text-gray-500 text-lg">
                    Cantidad de porciones
                </label>
                <input type="number" class="w-full mt-2 px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-black" placeholder="0">

                <h3 class="text-2xl font-semibold mt-8">
                    $380.000
                </h3>
            </div>

            <!-- Botón -->
            <div class="mt-8">
                <a href="<?= BASE_URL ?>module=platillos&view=principal"
                   class="inline-block mt-6 bg-black text-white px-8 py-3 rounded-full hover:bg-gray-800 transition">
                    Añadir al carrito
                </a>
            </div>
        </div>
    </div>

    <!-- MINIATURAS COMPLETAS -->
    <div class="mt-16">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">

            <img src="./assets/img/banquete/menu/06_menu/01_pasta.webp"
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/06_menu/02_pasta.webp"
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/06_menu/03_pasta.webp"
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/06_menu/04_pasta.webp"
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/06_menu/05_pasta.webp"
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/06_menu/06_pasta.webp"
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/06_menu/07_pasta.webp"
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/06_menu/08_pasta.webpg"
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
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