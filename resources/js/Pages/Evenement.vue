<template>
    <section id="evenements-a-venir" class="py-16 bg-gray-100">
      <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">Événements à Venir</h2>

        <!-- Liste des événements -->
        <div class="space-y-10">
          <!-- Événement 1 -->
          <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col md:flex-row items-start md:items-center gap-6">
            <div class="w-full md:w-1/3">
              <img src="path/to/event1.jpg" alt="Événement 1" class="w-full h-48 object-cover rounded-lg">
            </div>
            <div class="w-full md:w-2/3">
              <h3 class="text-xl font-semibold mb-2">Nom de l'Événement</h3>
              <p class="text-gray-500 mb-4">Description courte de l'événement. Par exemple : "Une rencontre pour célébrer les talents locaux et promouvoir les initiatives innovantes."</p>
              <p class="text-sm text-gray-400 mb-2"><strong>Date :</strong> 15 janvier 2024</p>
              <p class="text-sm text-gray-400 mb-4"><strong>Lieu :</strong> Palais des Congrès, Cotonou</p>
              <div class="flex gap-4">
                <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">S'inscrire</a>
                <a href="#" class="px-4 py-2 border border-blue-500 text-blue-500 rounded-lg hover:bg-blue-500 hover:text-white">En savoir plus</a>
              </div>
            </div>
          </div>

          <!-- Événement 2 -->
          <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col md:flex-row items-start md:items-center gap-6">
            <div class="w-full md:w-1/3">
              <img src="path/to/event2.jpg" alt="Événement 2" class="w-full h-48 object-cover rounded-lg">
            </div>
            <div class="w-full md:w-2/3">
              <h3 class="text-xl font-semibold mb-2">Nom de l'Événement 2</h3>
              <p class="text-gray-500 mb-4">Une courte description pour captiver l'intérêt des visiteurs.</p>
              <p class="text-sm text-gray-400 mb-2"><strong>Date :</strong> 25 février 2024</p>
              <p class="text-sm text-gray-400 mb-4"><strong>Lieu :</strong> Centre Culturel, Porto-Novo</p>
              <div class="flex gap-4">
                <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">S'inscrire</a>
                <a href="#" class="px-4 py-2 border border-blue-500 text-blue-500 rounded-lg hover:bg-blue-500 hover:text-white">En savoir plus</a>
              </div>
            </div>
          </div>

          <!-- Ajouter d'autres événements ici -->
        </div>
      </div>
    </section>
  </template>
  <script setup>
  // Logic for the galerie page (if necessary)
  import AppLayoutVue from '../Layouts/AppLayout.vue';
  </script>
