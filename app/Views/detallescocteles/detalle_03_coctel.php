<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<title>Detalle de Plato</title>
</head>

<body class="bg-light">

<div class="container py-5">

    <!-- CONTENIDO PRINCIPAL -->
    <div class="row align-items-center mb-5">

        <!-- TEXTO PRIMERO -->
        <div class="col-md-6 mb-4 mb-md-0">

            <h1 class="display-4 fw-normal mb-4">
                Sunrise tropical
            </h1>

            <p class="text-muted fs-5 mb-4">
                Combinación de jugos frutales con efecto degradado en tonos naranja y rojo,
                decorado con cereza. Vibrante, dulce y visualmente llamativo.
            </p>

            <label class="form-label text-muted">
                Cantidad de porciones
            </label>

            <input type="number"
                   class="form-control mb-4"
                   placeholder="Ej: 50">

            <h2 class="fw-semibold mb-4">
                $380.000
            </h2>

            <a href="<?= BASE_URL ?>module=platillos&view=principal"
               class="btn btn-dark px-5 py-3 rounded-pill">
                Añadir al carrito
            </a>

        </div>

        <!-- IMAGEN PRINCIPAL DESPUÉS -->
        <div class="col-md-6">
            <img id="imagen-principal"
                 src="https://i.pinimg.com/736x/ad/8d/d1/ad8dd1ed104b30bdc9a9e26f902ded3b.jpg"
                 class="img-fluid rounded-4 shadow"
                 style="width:100%; height:450px; object-fit:cover;">
        </div>

    </div>


     <!-- MINIATURAS AL FINAL -->
    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-8 gap-4">

        <img src="./assets/img/banquete/coctel/03_coctel/01_tropical.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/03_coctel/02_tropical.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/03_coctel/03_tropical.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/03_coctel/04_tropical.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/03_coctel/05_tropical.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/03_coctel/06_tropical.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/03_coctel/07_tropical.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/03_coctel/08_tropical.webp"
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