<template>
    <!-- Hero Section -->
    <main class="bg-gradient-to-r from-[#2E7D32] to-[#4CAF50] min-h-screen">
      <!-- Navigation -->

      <!-- Hero Section -->
      <section
        id="accueil"
        class="min-h-screen gradient-bg flex items-center pt-16 "
      >
        <div class="container mx-auto px-4 text-white m-[200px]  ">
          <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
            <h1 class="hero-title text-5xl md:text-6xl font-bold mb-6">
              Miss Intello-Citoyenne Engagée du Bénin
            </h1>
            <p class="text-xl mb-8">
              Célébrons l'intelligence, l'engagement et le leadership de la femme
              béninoise
            </p>

            <br />
            <section
              class="text-center py-16 bg-gradient-to-b from-primary-100 to-primary-50"
            >
              <div
                class="max-w-2xl mx-auto px- aos-init aos-animate"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <p class="text-xl text-white-700 mb-6">
                  Bienvenue sur le site officiel de Miss Intello-Citoyenne Engagée
                  du Bénin !
                </p>
                <p class="text-gray-300 leading-relaxed">
                  Ce concours célèbre l'intelligence, l'engagement et le
                  leadership de la femme béninoise. Plus qu'un simple événement,
                  c'est une opportunité unique de promouvoir le développement
                  personnel et l'impact communautaire. Rejoignez-nous dans cette
                  aventure inspirante !
                </p>
              </div>
            </section>

            <div
              class="relative h-[600px] overflow-hidden rounded-xl shadow-2xl mb-12 aos-init aos-animate"
              data-aos="fade-up"
            >
              <!-- Background animation with gradient overlay -->

              <br>   <br>   <br>
              <div
                class="absolute inset-0 bg-gradient-to-b from-primary-900/70 to-transparent px-10 animate-pulse"
              >
                <img
                  src="/final.jpg "
                  alt="Crown Background"
                  class="w-full h-full object-cover opacity-50"
                />
              </div>
              <!-- Floating crown animation -->
              <div
                class="absolute top-12 left-1/2 -translate-x-1/2 text-6xl animate-bounce"
              >

              </div>
              <!-- Central question -->
              <div
                class="absolute inset-0 flex flex-col items-center justify-center text-center p-8"
              >
                <h2
                  class="text-5xl font-bold text-white mb-6 transform transition-all duration-700 hover:scale-110 aos-init aos-animate"
                  data-aos="zoom-in"
                  data-aos-delay="300"
                >
                  Qui sera la Reine ?
                </h2>
                <!-- <p
                  class="text-2xl text-black-800 text-primary-800 max-w-2xl mx-auto aos-init aos-animate"
                  data-aos="fade-up"
                  data-aos-delay="600"
                >
                  Découvrez qui sera couronnée Miss Intello-Citoyenne 2024 lors de
                  notre grande finale
                </p> -->
                <!-- Date -->
                <div
                  class="mt-8 bg-primary-900/50 backdrop-blur-sm px-8 py-4 rounded-full aos-init aos-animate"
                  data-aos="fade-up"
                  data-aos-delay="900"
                >
                  <p class="text-xl text-white font-light">
                    14 Décembre 2024 - Maison des jeunes, Agla- Cotonou
                  </p>
                </div>
              </div>
              <!-- Decorative elements -->
              <div
                class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-primary-900/70 to-transparent"
              ></div>
            </div>

            <a href="#inscription" class="btn-primary">S'inscrire maintenant</a>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer -->
  </template>

  <script setup>
    // Logic for the accueil page (if necessary)
    import AppLayoutVue from '../Layouts/AppLayout.vue';
  </script>
