<body class="bg-white">

<div class="max-w-7xl mx-auto px-6 py-12">

    <div class="grid lg:grid-cols-2 gap-10">

        <!-- GALERÍA PRINCIPAL -->
        <div>
            <img id="imagen-principal"
                 src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_semiformal.webp"
                 alt="Estilo semiformal con blazer"
                 class="w-full rounded-3xl shadow-md">
        </div>

        <!-- INFORMACIÓN -->
        <div class="flex flex-col justify-center">

            <span class="inline-block bg-gray-100 text-gray-800 px-6 py-2 rounded-full text-sm font-medium mb-4 w-fit">
                Graduación
            </span>

            <h1 class="text-4xl lg:text-5xl font-light leading-tight mt-4">
                Estilo semiformal con blazer
            </h1>

            <p class="text-gray-500 mt-6 text-lg leading-relaxed">
                Blazer en color neutro como gris, azul o beige, acompañado de pantalón
                de vestir oscuro y camisa lisa. Brinda comodidad y frescura,
                perfecto para graduaciones diurnas o celebraciones posteriores.
            </p>

            <h2 class="text-3xl font-bold my-6">
                $649.900
            </h2>

            <!-- TALLAS -->
            <div class="flex gap-3 mt-4">
                <button class="w-14 h-14 border border-gray-300 rounded-full text-lg hover:bg-black hover:text-white transition">S</button>
                <button class="w-14 h-14 border border-gray-300 rounded-full text-lg hover:bg-black hover:text-white transition">M</button>
                <button class="w-14 h-14 border border-gray-300 rounded-full text-lg hover:bg-black hover:text-white transition">L</button>
                <button class="w-14 h-14 border border-gray-300 rounded-full text-lg hover:bg-black hover:text-white transition">XL</button>
            </div>

            <div class="mt-8">
                <a href="#"
                   class="block text-center bg-black text-white py-4 rounded-full text-lg hover:bg-gray-800 transition">
                    Añadir al carrito
                </a>
            </div>

        </div>
    </div>

    <!-- MINIATURAS -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/semiformal/01_semiformal.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/semiformal/02_semiformal.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/semiformal/03_semiformal.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/semiformal/04_semiformal.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/semiformal/05_semiformal.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/semiformal/06_semiformal.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/semiformal/07_semiformal.webp"
             class="rounded-3xl object-cover w-full h-[420px] cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/semiformal/08_semiformal.webp"
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