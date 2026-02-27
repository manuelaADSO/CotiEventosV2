<footer class="bg-gray-900 text-gray-300 mt-20">

    <!-- Línea decorativa superior -->
    <div class="h-1 bg-gradient-to-r from-pink-500 via-fuchsia-500 to-yellow-400"></div>

    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-12">

        <!-- 1️⃣ NAVEGACIÓN -->
        <div>
            <h3 class="text-white text-lg font-semibold mb-4">
                Navegación
            </h3>

            <ul class="space-y-3 text-sm">
                <li>
                    <a href="<?= BASE_URL ?>"
                       class="hover:text-pink-400 transition">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="<?= BASE_URL ?>/eventos"
                       class="hover:text-pink-400 transition">
                        Servicios
                    </a>
                </li>
                <li>
                    <a href="<?= BASE_URL ?>/galeria"
                       class="hover:text-pink-400 transition">
                        Galería
                    </a>
                </li>
                <li>
                    <a href="<?= BASE_URL ?>module=contacto&view=index"
                       class="hover:text-pink-400 transition">
                        Contáctanos
                    </a>
                </li>
            </ul>
        </div>

        <!-- 2️⃣ CONTACTO -->
        <div>
            <h3 class="text-white text-lg font-semibold mb-4">
                Contacto
            </h3>

            <ul class="space-y-3 text-sm text-gray-400">
                <li>📍 San Luis Antioquia, Colombia</li>
                <li>📞 +57 322 546 16 97</li>
                <li>📧 contacto@cotieventos.com</li>
                <li>🕒 Lun - Sáb 9:00am - 6:00pm</li>
            </ul>
        </div>

        <!-- 3️⃣ MARCA + REDES -->
        <div class="md:text-right">
            <h3 class="text-white text-2xl font-bold mb-3">
                CotiEventos
            </h3>

            <p class="text-sm text-gray-400 mb-6 max-w-sm md:ml-auto leading-relaxed">
                Creamos experiencias inolvidables con elegancia, creatividad 
                y atención en cada detalle para que tu evento sea único.
            </p>

            <!-- Redes Sociales -->
            <div class="flex md:justify-end space-x-5">

                <!-- Instagram -->
                <a href="#" class="hover:text-pink-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-6 h-6"
                         fill="currentColor"
                         viewBox="0 0 24 24">
                        <path d="M7.75 2C4.574 2 2 4.574 2 7.75v8.5C2 19.426 4.574 22 7.75 22h8.5C19.426 22 22 19.426 22 16.25v-8.5C22 4.574 19.426 2 16.25 2h-8.5zm4.25 5.5A4.75 4.75 0 1112 17a4.75 4.75 0 010-9.5zm6-1a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
                    </svg>
                </a>

                <!-- Facebook -->
                <a href="#" class="hover:text-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-6 h-6"
                         fill="currentColor"
                         viewBox="0 0 24 24">
                        <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2.2V12h2.2V9.8c0-2.2 1.3-3.5 3.4-3.5.98 0 2 .17 2 .17v2.2h-1.1c-1.1 0-1.5.7-1.5 1.4V12h2.6l-.4 2.9h-2.2v7A10 10 0 0022 12z"/>
                    </svg>
                </a>

                <!-- WhatsApp -->
                <a href="#" class="hover:text-green-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-6 h-6"
                         fill="currentColor"
                         viewBox="0 0 24 24">
                        <path d="M20 3.5A10 10 0 003.5 20l-1 3 3-1A10 10 0 1020 3.5zM12 20a8 8 0 01-4.2-1.2l-.3-.2-2.5.8.8-2.4-.2-.3A8 8 0 1112 20z"/>
                    </svg>
                </a>

            </div>
        </div>

    </div>

    <!-- Parte inferior -->
    <div class="border-t border-gray-800 text-center text-xs text-gray-500 py-5">
        <div class="flex justify-center items-center gap-2">
            &copy;<?= date('Y') ?> <img src="<?= BASE_URL ?>/assets/img/logo/logo_blanco.svg" 
            alt="logo" 
            class="h-10"> Todos los derechos reservados
        </div>
    </div>

</footer>

</body>
</html>