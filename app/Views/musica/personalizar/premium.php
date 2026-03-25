<main class="flex-grow">

  <!-- HERO -->
  <div class="pt-20">
      <section class="bg-gradient-to-r from-teal-400 via-teal-200 to-teal-300 py-20">
          <div class="max-w-6xl mx-auto text-center px-6">
              <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                  Personaliza Premium
              </h1>
              <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                  Paquete completo con música, efectos y animación avanzada para un evento inolvidable.
              </p>
          </div>
      </section>
  </div>

  <!-- DESCRIPCIÓN + SERVICIOS -->
  <section class="py-16 bg-white">
      <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

          <div class="flex justify-center order-1 md:order-2 animate-fadeIn delay-200">
              <img src="./assets/img/personalizar/personaliza3.webp"
                   class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-teal-200"
                   alt="Personaliza Premium">
          </div>

          <div class="order-2 md:order-1 animate-fadeIn delay-400">
              <h2 class="text-3xl font-bold text-olive-600 mb-12">
                  Qué incluye este paquete
              </h2>

              <p class="text-gray-600 mb-4">
                  El paquete Premium ofrece todos los elementos de los paquetes anteriores, con extras que elevan la experiencia musical y visual.
              </p>

              <ul class="list-none space-y-3 text-gray-600">
                  <li class="flex items-center gap-3 animate-fadeIn delay-500">
                      <span class="text-teal-600 text-xl">🎧</span> DJ profesional con mezcla personalizada
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-600">
                      <span class="text-teal-600 text-xl">🎸</span> Banda en vivo completa con repertorio variado
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-700">
                      <span class="text-teal-600 text-xl">✨</span> Efectos de iluminación avanzados
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-800">
                      <span class="text-teal-600 text-xl">🎉</span> Animación y coordinación de cada momento especial
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-900">
                      <span class="text-teal-600 text-xl">🔊</span> Supervisión técnica completa de sonido y efectos
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
              <img src="./assets/img/personalizar/galeria/personaliza3_1.jpg" class="rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-300" alt="Galería 1">
              <img src="./assets/img/personalizar/galeria/personaliza3_2.jpg" class="rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-400" alt="Galería 2">
              <img src="./assets/img/personalizar/galeria/personaliza3_3.jpg" class="rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-500" alt="Galería 3">
          </div>
      </div>
  </section>

  <!-- BOTONES -->
  <section class="py-12 bg-white">
      <div class="max-w-6xl mx-auto px-6 text-center flex flex-col md:flex-row justify-center gap-4">
          <a href="<?= BASE_URL ?>/musica/personalizar"
             class="inline-block bg-teal-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-teal-300 transition animate-fadeIn delay-600">
             Volver a Personalizar
          </a>
          <a href="<?= BASE_URL ?>/carrito"
             class="inline-block bg-teal-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-teal-400 transition animate-fadeIn delay-700">
             Reserva tu Paquete
          </a>
      </div>
  </section>

</main>