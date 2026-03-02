<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<title>Detalle Cóctel Tropical</title>
</head>

<body class="bg-gray-50 text-gray-800">

<div class="max-w-7xl mx-auto px-6 py-16">

    <!-- CONTENIDO PRINCIPAL -->
    <div class="grid md:grid-cols-2 gap-12 items-center mb-12">

        <!-- TEXTO -->
        <div class="flex flex-col justify-center">

            <h1 class="text-4xl md:text-5xl font-semibold mb-6">
                Cóctel tropical de durazno
            </h1>

            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                Bebida refrescante a base de durazno triturado con hielo,
                decorada con una rodaja de fruta fresca.
                Dulce, suave y perfecta para climas cálidos.
            </p>

            <label class="text-sm font-medium text-gray-500 mb-2">
                Cantidad de porciones
            </label>

            <input type="number"
                   placeholder="Ej: 50"
                   class="border border-gray-300 rounded-lg px-4 py-3 mb-6 focus:outline-none focus:ring-2 focus:ring-black">

            <h2 class="text-3xl font-bold mb-6">
                $380.000
            </h2>

            <a href="<?= BASE_URL ?>module=platillos&view=principal"
               class="inline-block bg-black text-white px-8 py-4 rounded-full text-center hover:bg-gray-800 transition">
                Añadir al carrito
            </a>

        </div>

        <!-- IMAGEN PRINCIPAL -->
        <div>
            <img id="imagen-principal"
                 src="https://i.pinimg.com/736x/ac/55/8b/ac558bb2af7e2558ac1234a2ca64b4f8.jpg"
                 class="w-full rounded-2xl shadow-lg object-cover">
        </div>

    </div>


    <!-- MINIATURAS AL FINAL -->
    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-8 gap-4">

        <img src="./assets/img/banquete/coctel/01_coctel/01_durazno.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/01_coctel/02_durazno.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/01_coctel/03_durazno.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/01_coctel/04_durazno.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="a./assets/img/banquete/coctel/01_coctel/05_durazno.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/01_coctel/06_durazno.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/01_coctel/07_durazno.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/01_coctel/08_durazno.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

    </div>

</div>

<script>
function cambiarImagen(imagenPequena) {
    document.getElementById("imagen-principal").src = imagenPequena.src;
}
</script>

</body>
</html>