<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lasaña de carne</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="max-w-7xl mx-auto px-4 py-10">

        <div class="grid md:grid-cols-2 gap-12">

            <!-- Imagen principal -->
            <div>
                <img id="imagen-principal"
                     src="./assets/img/banquete/menu/lasaña.webp" 
                     class="w-full h-[500px] object-cover rounded-3xl shadow-lg">
            </div>

            <!-- Texto -->
            <div>
                <h1 class="text-4xl md:text-5xl font-light leading-tight">
                    Lasaña de carne con queso gratinado
                </h1>

                <p class="text-gray-600 mt-6 text-lg">
                    Capas de pasta, carne en salsa de tomate y abundante queso derretido, horneadas hasta dorar.
                    Clásica, cremosa y perfecta para compartir.
                </p>

                <label class="block mt-6 text-gray-500">Cantidad de porciones</label>
                <input type="number" 
                       class="w-full mt-2 px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-black" 
                       placeholder="0">

                <h3 class="text-2xl font-semibold mt-8">
                    $380.000
                </h3>

                <a href="index.php?module=platillos&view=principal" 
                   class="inline-block mt-6 bg-black text-white px-8 py-3 rounded-full hover:bg-gray-800 transition">
                    Añadir al carrito
                </a>
            </div>

        </div>

        <!-- Miniaturas -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mt-16">

            <img src="./assets/img/banquete/menu/05_menu/01_carne.webp" 
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition" 
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/05_menu/02_carne.webp" 
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition" 
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/05_menu/03_carne.webp" 
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition" 
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/05_menu/04_carne.webp" 
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition" 
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/05_menu/05_carne.webp" 
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition" 
                 onclick="cambiarImagen(this)">

           <img src="./assets/img/banquete/menu/05_menu/06_carne.webp" 
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition" 
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/menu/05_menu/07_carne.webp" 
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition" 
                 onclick="cambiarImagen(this)">
         
            <img src="./assets/img/banquete/menu/05_menu/08_carne.webp" 
                 class="w-full h-[250px] object-cover rounded-2xl cursor-pointer hover:scale-105 transition" 
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

