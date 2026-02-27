<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CotiEventos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- ================= NAVBAR ================= -->
<nav class="bg-white shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <img src="<?= BASE_URL ?>/assets/img/logo/logo_negro.svg" 
        alt="logo-cotieventos" 
        class="h-20">
        <div class="space-x-6 hidden md:flex">
            <a href="<?= BASE_URL ?>" class="hover:text-pink-500">Inicio</a>
            <a href="<?= BASE_URL ?>/eventos" class="hover:text-pink-500">Servicios</a>
            <a href="<?= BASE_URL ?>/galeria" class="hover:text-pink-500">Galería</a>
            <a href="<?= BASE_URL ?>/contactos" class="hover:text-pink-500">Contacto</a>
        </div>
        <!-- ICONOS DERECHA -->
<div class="flex items-center space-x-6">

    <!-- MI CUENTA -->
    <div class="relative group">

        <button class="flex items-center space-x-1 text-gray-700 hover:text-pink-500 transition">
            <!-- Icono -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="w-6 h-6" 
                 fill="none" 
                 viewBox="0 0 24 24" 
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M5.121 17.804A9 9 0 1118.364 4.56 9 9 0 015.12 17.804z"/>
            </svg>

            <?php if (isset($_SESSION['user_id'])): ?>
                <span class="text-sm font-medium">
                    <?= htmlspecialchars($_SESSION['nombre']) ?>
                </span>
            <?php else: ?>
                <span class="text-sm font-medium">Mi Cuenta</span>
            <?php endif; ?>
        </button>

        <!-- Dropdown -->
        <div class="absolute right-0 mt-3 w-48 bg-white rounded-xl shadow-lg 
                    opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                    transition duration-200 z-50">

            <ul class="py-2 text-sm text-gray-700">

                <?php if (!isset($_SESSION['user_id'])): ?>
                    <li>
                        <a href="<?= BASE_URL ?>module=usuarios&view=login"
                           class="block px-4 py-2 hover:bg-gray-100">
                           Iniciar sesión
                        </a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?= BASE_URL ?>module=usuarios&view=perfil"
                           class="block px-4 py-2 hover:bg-gray-100">
                           Ver mi perfil
                        </a>
                    </li>

                    <li>
                        <hr class="my-2">
                    </li>

                    <li>
                        <a href="<?= BASE_URL ?>module=usuarios&action=logout"
                           class="block px-4 py-2 text-red-500 hover:bg-gray-100">
                           Cerrar sesión
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>

    <!-- CARRITO -->
    <a href="<?= BASE_URL ?>module=carrito&view=cotizar"
       class="relative flex items-center text-gray-700 hover:text-pink-500 transition">

        <!-- Icono carrito -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-6 h-6" 
             fill="none" 
             viewBox="0 0 24 24" 
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7H19M7 13L5.4 5M16 16a2 2 0 11-4 0 2 2 0 014 0zM9 16a2 2 0 11-4 0 2 2 0 014 0z"/>
        </svg>

        <!-- Contador -->
        <span class="ml-1 text-sm font-medium">
            0
        </span>
    </a>

</div>
    </div>
</nav>