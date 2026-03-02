<body class="bg-white">

<div class="max-w-7xl mx-auto px-6 py-12">

    <div class="grid lg:grid-cols-2 gap-10">

        <!-- GALERÍA PRINCIPAL -->
        <div>
            <img id="imagen-principal"
                 src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_manga.webp"
                 alt="Vestido de Una Sola Manga"
                 class="w-full rounded-3xl shadow-md">
        </div>

        <!-- INFORMACIÓN -->
        <div class="flex flex-col justify-center">

            <span class="inline-block bg-gray-100 text-gray-800 px-6 py-2 rounded-full text-sm font-medium mb-4 w-fit">
                Graduación
            </span>

            <h1 class="text-4xl lg:text-5xl font-light leading-tight mt-2">
                Vestido de Una Sola Manga
            </h1>

            <p class="text-gray-500 mt-4 text-lg leading-relaxed">
                Vestido con solo un hombro descubierto, creando un look moderno y elegante.
                Puede ser corto o largo, ideal para graduadas que desean un estilo sofisticado
                y diferente, destacando la silueta de forma sutil.
            </p>

            <h2 class="text-3xl font-bold my-6">
                $499.900
            </h2>

            <!-- TALLAS -->
            <div class="flex gap-3 mt-4">
                <button class="w-12 h-12 border border-gray-300 rounded-full hover:bg-black hover:text-white transition">S</button>
                <button class="w-12 h-12 border border-gray-300 rounded-full hover:bg-black hover:text-white transition">M</button>
                <button class="w-12 h-12 border border-gray-300 rounded-full hover:bg-black hover:text-white transition">L</button>
                <button class="w-12 h-12 border border-gray-300 rounded-full hover:bg-black hover:text-white transition">XL</button>
            </div>

            <div class="mt-8">
                <a href="index.php?module=bodas&view=principal"
                   class="inline-block bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">
                    Añadir al carrito
                </a>
            </div>

        </div>
    </div>

    <!-- MINIATURAS -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/una_manga/01_una_manga.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/una_manga/02_una_manga.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/una_manga/03_una_manga.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/una_manga/04_una_manga.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/una_manga/05_una_manga.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/una_manga/06_una_manga.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/una_manga/07_una_manga.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/una_manga/08_una_manga.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">
    </div>

</div>

<script>
function cambiarImagen(imagenPequena) {
    document.getElementById("imagen-principal").src = imagenPequena.src;
}
</script>

</body>