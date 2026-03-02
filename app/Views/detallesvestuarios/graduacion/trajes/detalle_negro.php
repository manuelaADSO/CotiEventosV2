<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Traje clásico negro</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
.fade {
    transition: opacity 0.3s ease-in-out;
}
</style>

</head>
<body class="bg-white text-gray-900">

<div class="max-w-7xl mx-auto px-6 py-12">

    <!-- CONTENIDO PRINCIPAL -->
    <div class="grid lg:grid-cols-2 gap-12 items-start">

        <!-- GALERÍA -->
        <div>
            <img id="imagen-principal"
                src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_negro.webp"
                alt="Traje clásico negro"
                class="w-full rounded-3xl shadow-md fade">
        </div>

        <!-- INFORMACIÓN -->
        <div>

            <span class="inline-block bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm mb-4">
                Graduación
            </span>

            <h1 class="text-4xl md:text-5xl font-light leading-tight mb-6">
                Traje clásico negro
            </h1>

            <p class="text-gray-500 text-lg mb-6">
                Conjunto de saco y pantalón en color negro, acompañado de camisa blanca y corbata sobria.
                Es la opción más elegante y segura para ceremonias formales y fotografías de graduación.
            </p>

            <h2 class="text-3xl font-bold mb-8">
                $699.900
            </h2>

            <!-- TALLAS -->
            <div class="flex gap-4 mb-8">
                <button class="talla w-12 h-12 border rounded-full hover:bg-black hover:text-white transition">S</button>
                <button class="talla w-12 h-12 border rounded-full hover:bg-black hover:text-white transition">M</button>
                <button class="talla w-12 h-12 border rounded-full hover:bg-black hover:text-white transition">L</button>
                <button class="talla w-12 h-12 border rounded-full hover:bg-black hover:text-white transition">XL</button>
            </div>

            <button class="bg-black text-white px-8 py-4 rounded-full hover:bg-gray-800 transition">
                Añadir al carrito
            </button>

        </div>
    </div>

    <!-- MINIATURAS -->
    <div class="mt-16 grid grid-cols-2 sm:grid-cols-4 gap-6">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/negro/01_negro.webp"
            class="miniatura rounded-2xl cursor-pointer hover:scale-105 transition">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/negro/02_negro.webp"
            class="miniatura rounded-2xl cursor-pointer hover:scale-105 transition">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/negro/03_negro.webp"
            class="miniatura rounded-2xl cursor-pointer hover:scale-105 transition">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/negro/04_negro.webp"
            class="miniatura rounded-2xl cursor-pointer hover:scale-105 transition">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/negro/05_negro.webp"
            class="miniatura rounded-2xl cursor-pointer hover:scale-105 transition">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/negro/06_negro.webp"
            class="miniatura rounded-2xl cursor-pointer hover:scale-105 transition">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/negro/07_negro.webp"
            class="miniatura rounded-2xl cursor-pointer hover:scale-105 transition">

        <img src="./assets/img/eventos/graduacion/vestuarios/trajes/miniaturas/negro/08_negro.webp"
            class="miniatura rounded-2xl cursor-pointer hover:scale-105 transition">

    </div>

</div>

<script>
// Cambio de imagen con efecto fade
const principal = document.getElementById("imagen-principal");
const miniaturas = document.querySelectorAll(".miniatura");

miniaturas.forEach(img => {
    img.addEventListener("click", () => {
        principal.style.opacity = 0;
        setTimeout(() => {
            principal.src = img.src;
            principal.style.opacity = 1;
        }, 200);
    });
});

// Activar talla seleccionada
const tallas = document.querySelectorAll(".talla");

tallas.forEach(btn => {
    btn.addEventListener("click", () => {
        tallas.forEach(b => b.classList.remove("bg-black","text-white"));
        btn.classList.add("bg-black","text-white");
    });
});
</script>

</body>
</html>