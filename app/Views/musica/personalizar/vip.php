<main class="flex-grow">

  <!-- HERO -->
  <div class="pt-20">
      <section class="bg-gradient-to-r from-indigo-400 via-indigo-200 to-indigo-300 py-20">
          <div class="max-w-6xl mx-auto text-center px-6">
              <h1 class="text-4xl md:text-5xl font-bold mb-4 text-olive animate-fadeIn">
                  Personaliza VIP
              </h1>
              <p class="text-lg text-olive/90 animate-fadeIn delay-200">
                  Paquete completo con todos los extras: música, banda, efectos especiales y atención personalizada para tu evento.
              </p>
          </div>
      </section>
  </div>

  <!-- DESCRIPCIÓN + SERVICIOS -->
  <section class="py-16 bg-white">
      <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

          <div class="flex justify-center order-1 md:order-2 animate-fadeIn delay-200">
              <img src="./assets/img/personalizar/personaliza5.webp"
                   class="w-full max-w-md h-80 object-cover rounded-2xl shadow-2xl border-4 border-indigo-200"
                   alt="Personaliza VIP">
          </div>

          <div class="order-2 md:order-1 animate-fadeIn delay-400">
              <h2 class="text-3xl font-bold text-olive-600 mb-4">
                  Qué incluye este paquete
              </h2>

              <p class="text-gray-600 mb-4">
                  El paquete VIP ofrece todos los beneficios del Premium Plus y agrega extras para una experiencia completamente personalizada.
              </p>

              <ul class="list-none space-y-3 text-gray-600">
                  <li class="flex items-center gap-3 animate-fadeIn delay-500">
                      <span class="text-indigo-600 text-xl">🎧</span> DJ profesional con set exclusivo
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-600">
                      <span class="text-indigo-600 text-xl">🎸</span> Banda en vivo con repertorio ampliado
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-700">
                      <span class="text-indigo-600 text-xl">✨</span> Efectos especiales completos: humo, luces, confeti
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-800">
                      <span class="text-indigo-600 text-xl">🎉</span> Animación y coordinación personalizada
                  </li>
                  <li class="flex items-center gap-3 animate-fadeIn delay-900">
                      <span class="text-indigo-600 text-xl">🔊</span> Supervisión técnica total por profesionales
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
              <img src="./assets/img/personalizar/galeria/personaliza5_1.jpg" class="rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-300" alt="Galería 1">
              <img src="./assets/img/personalizar/galeria/personaliza5_2.jpg" class="rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-400" alt="Galería 2">
              <img src="./assets/img/personalizar/galeria/personaliza5_3.jpg" class="rounded-xl shadow-lg hover:scale-105 transition animate-fadeIn delay-500" alt="Galería 3">
          </div>
      </div>
  </section>

  <!-- BOTONES -->
  <section class="py-12 bg-white">
      <div class="max-w-6xl mx-auto px-6 text-center flex flex-col md:flex-row justify-center gap-4">
          <a href="<?= BASE_URL ?>/musica/personalizar"
             class="inline-block bg-indigo-400 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-indigo-300 transition animate-fadeIn delay-600">
             Volver a Personalizar
          </a>
          <a href="<<?= BASE_URL ?>/carrito"
             class="inline-block bg-indigo-300 text-olive font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-indigo-400 transition animate-fadeIn delay-700">
             Reserva tu Paquete
          </a>
      </div>
  </section>

</main>