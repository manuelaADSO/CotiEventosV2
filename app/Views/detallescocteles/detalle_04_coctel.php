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
                Piña colada clásica
            </h1>

            <p class="text-muted fs-5 mb-4">
                Suave mezcla cremosa de piña y coco, servida fría y decorada con fruta tropical.
                Exótica, dulce y muy refrescante.
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
                 src="https://i.pinimg.com/736x/b5/54/8a/b5548a3474bce8eccf1c7d73d9431fd0.jpg"
                 class="img-fluid rounded-4 shadow"
                 style="width:100%; height:450px; object-fit:cover;">
        </div>

    </div>


    <!-- MINIATURAS AL FINAL -->
    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-8 gap-4">

        <img src="./assets/img/banquete/coctel/04_coctel/01_colada.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/04_coctel/02_colada.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/04_coctel/03_colada.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/04_coctel/04_colada.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/04_coctel/05_colada.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/04_coctel/06_colada.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/04_coctel/07_colada.webp"
             class="h-24 w-full object-cover rounded-xl cursor-pointer hover:scale-105 transition"
             onclick="cambiarImagen(this)">

        <img src="./assets/img/banquete/coctel/04_coctel/08_colada.webp"
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