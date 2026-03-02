<body class="bg-light">

<div class="container py-4">

    <!-- IMAGEN SUPERIOR FIJA (sin carrusel) -->
    <div class="mb-5">
        <img src="https://i.pinimg.com/1200x/44/b4/30/44b430bce2940a18113bfc68e9811f02.jpg"
             class="img-fluid w-100 rounded shadow"
             style="height:280px; object-fit:cover;">
    </div>


    <!-- CONTENIDO PRINCIPAL -->
    <div class="row g-4 align-items-center mb-5">

        <!-- Imagen principal -->
        <div class="col-md-5">
            <img id="imagen-principal"
                 src="https://i.pinimg.com/1200x/75/2d/d0/752dd003966e759728bb23f903af2110.jpg"
                 class="img-fluid rounded-4 mb-3">
        </div>

        <!-- Texto y precio -->
        <div class="col-md-7 d-flex flex-column">

            <h2 class="fw-semibold mb-4">
                Copas de mousse de chocolate y vainilla con fresa
            </h2>

            <p class="text-muted mb-4">
                Capas de mousse ligera servidas en copas, decoradas con crema y fresas frescas.
                Un postre elegante, cremoso y perfecto para ocasiones especiales.
            </p>

            <label class="fw-semibold text-muted">Cantidad de porciones</label>
            <input type="number" class="form-control mb-4" placeholder="Ej: 50">

            <h3 class="fw-bold">$380.000</h3>

            <div class="d-flex justify-content-start">
                <a href="<?= BASE_URL ?>module=platillos&view=principal"
                   class="btn btn-dark px-5 py-3 rounded-pill mt-4">
                    Añadir al carrito
                </a>
            </div>

        </div>
    </div>


    <!-- MINIATURAS (8 COMPLETAS) -->
    <div class="mt-20">

        <h2 class="text-2xl font-light mb-8">
            Más diseños de postres
        </h2>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">

            <img src="./assets/img/banquete/postre/06_postre/01_vainilla.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/06_postre/02_vainilla.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/06_postre/03_vainilla.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/06_postre/04_vainilla.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/06_postre/05_vainilla.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/06_postre/06_vainilla.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/06_postre/07_vainilla.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">

            <img src="./assets/img/banquete/postre/06_postre/08_vainilla.webp"
                 class="w-full h-64 object-cover rounded-2xl cursor-pointer hover:scale-105 transition"
                 onclick="cambiarImagen(this)">
        </div>
    </div>

</div>

<!-- SCRIPT -->
<script>
function cambiarImagen(imagenPequena) {
    document.getElementById("imagen-principal").src = imagenPequena.src;
}
</script>

</body>
</html>