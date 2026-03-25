<main class="flex-grow">

  <!-- HERO -->
  <div class="pt-20">
      <section class="bg-gradient-to-r from-green-400 via-green-200 to-green-300 py-20">
          <div class="max-w-6xl mx-auto text-center px-6">
              <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                  Personaliza Básico
              </h1>
              <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                  Paquete inicial para personalizar tu evento con música y efectos a medida.
              </p>
          </div>
      </section>
  </div>

  <!-- DESCRIPCIÓN + SERVICIOS -->
  <section class="py-16 bg-white">
      <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

          <div class="flex justify-center order-1 md:order-2 animate-fadeIn delay-200">
              <img src="./assets/img/personalizar/personaliza1.webp"
                   class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-green-400"
                   alt="Personaliza Básico">
          </div>

          <div class="order-2 md:order-1 animate-fadeIn delay-400">
              <h2 class="text-3xl font-bold text-olive-600 mb-4">
                  Qué incluye este paquete
              </h2>

              <p class="text-gray-600 mb-4">
                  Este paquete básico te permite personalizar los elementos esenciales de tu evento: música, efectos y coordinación.
              </p>

              <ul class="list-none space-y-3 text-gray-600">
                  <li class="flex items-center gap-3 animate-fadeIn delay-500">
                      <span class="text-green-600 text-xl">🎧</span> Selección de DJ con lista de canciones personalizable
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-600">
                      <span class="text-green-600 text-xl">🎸</span> Opcional: banda en vivo básica
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-700">
                      <span class="text-green-600 text-xl">✨</span> Efectos simples: humo y luces
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-800">
                      <span class="text-green-600 text-xl">📋</span> Coordinación básica del evento
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-900">
                      <span class="text-green-600 text-xl">🎆</span> Supervisión de técnico profesional
                  </li>
              </ul>
          </div>
      </div>
  </section>

  <!-- GALERÍA -->
  <section class="py-16 bg-gray-50">
      <div class="max-w-6xl mx-auto px-6">
          <h2 class="text-3xl font-bold text-center text-olive-600 mb-8 animate-fadeIn delay-200">
              Galería del Paquete
          </h2>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
              <img src="./assets/img/personalizar/galeria/personaliza1_1.jpg" class="rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-300" alt="Galería 1">
              <img src="./assets/img/personalizar/galeria/personaliza1_2.jpg" class="rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-400" alt="Galería 2">
              <img src="./assets/img/personalizar/galeria/personaliza1_3.jpg" class="rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-500" alt="Galería 3">
          </div>
      </div>
  </section>

  <!-- BOTONES -->
  <section class="py-12 bg-white">
      <div class="max-w-6xl mx-auto px-6 text-center flex flex-col md:flex-row justify-center gap-4">
          <a href="<?= BASE_URL ?>/musica/personalizar"
             class="inline-block bg-green-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-green-300 transition animate-fadeIn delay-600">
             Volver a Personalizar
          </a>
          <a href="<<?= BASE_URL ?>/carrito"
             class="inline-block bg-green-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-green-400 transition animate-fadeIn delay-700">
             Reserva tu Paquete
          </a>
      </div>
  </section>

</main>