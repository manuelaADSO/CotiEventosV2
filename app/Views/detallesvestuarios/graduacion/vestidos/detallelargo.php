<body class="bg-white">

<div class="max-w-7xl mx-auto px-6 py-12">

    <div class="grid lg:grid-cols-2 gap-10">

        <!-- GALERÍA PRINCIPAL -->
        <div>
            <img id="imagen-principal"
                 src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_largo.webp"
                 alt="Vestido principal"
                 class="w-full rounded-3xl shadow-md">
        </div>

        <!-- INFORMACIÓN -->
        <div class="flex flex-col justify-center">

            <span class="inline-block bg-gray-100 text-gray-800 px-6 py-2 rounded-full text-sm font-medium mb-4 w-fit">
                Graduación
            </span>

            <h1 class="text-4xl lg:text-5xl font-light leading-tight mt-2">
                Vestido Largo Elegante
            </h1>

            <p class="text-gray-500 mt-4 text-lg leading-relaxed">
                Vestido hasta el suelo, generalmente de telas suaves como chiffon, seda o satén.
                Ideal para ceremonias formales, elegante y sofisticado. Puede tener detalles como encaje,
                pedrería o abertura lateral.
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

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/largo/01_largo.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/largo/02_largo.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/largo/03_largo.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/largo/04_largo.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/largo/05_largo.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/largo/06_largo.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/largo/07_largo.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/miniaturas/largo/08_largo.webp"
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