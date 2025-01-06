<template>
    <section id="galerie" class="py-20 bg-gradient-to-r from-[#2E7D32] to-[#4CAF50] min-h-screen">
      <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-3xl font-semibold text-center mb-12">Nos Moments Inspirants</h2>

        <!-- Albums Photo -->
        <div class="mb-16">
          <h3 class="text-xl font-semibold mb-4">Albums Photo</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">

                <img src="image/mi.jpg" alt="Edition 2023" class="w-full h-48 object-cover">

              <div class="p-4">
                <h4 class="text-lg font-semibold">Édition 2023</h4>
                <p class="text-sm text-gray-500">Un moment inoubliable avec des candidates exceptionnelles.</p>
              </div>
            </div>


                <div class="bg-white shadow-lg rounded-lg overflow-hidden">

                    <img src="image/mi.jpg" alt="Edition 2023" class="w-full h-48 object-cover">

                  <div class="p-4">
                    <h4 class="text-lg font-semibold">Édition 2023</h4>
                    <p class="text-sm text-gray-500">Un moment inoubliable avec des candidates exceptionnelles.</p>
                  </div>
                </div>





            <!-- Add other albums here -->
          </div>
        </div>

        <!-- Vidéos -->
        <div class="mb-16">
          <h3 class="text-xl font-semibold mb-4">Vidéos</h3>
          <div class="space-y-6">
            <!-- Main Video -->
            <div class="aspect-w-16 aspect-h-9">
              <iframe src="https://www.youtube.com/embed/xyz" class="w-full h-full rounded-lg"></iframe>
            </div>
            <!-- Testimonial Videos -->
            <div>
              <h4 class="text-lg font-semibold mb-2">Témoignages des participants</h4>
              <div class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <iframe src="https://www.youtube.com/embed/abc" class="w-full h-full rounded-lg"></iframe>
                </div>
                <!-- Add other testimonial videos here -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>


  <script setup>
  // Logic for the galerie page (if necessary)
  import AppLayoutVue from '../Layouts/AppLayout.vue';
  </script>
