<template>
    <section id="blog" class="py-16 bg-gray-50">
      <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-4xl font-bold text-center mb-12">Notre Blog</h2>

        <!-- Liste des articles -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Article 1 -->
          <article class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img
              src="path/to/image1.jpg"
              alt="Image de l'article 1"
              class="w-full h-48 object-cover"
            />
            <div class="p-6">
              <span class="text-sm text-blue-500 font-medium">#Catégorie</span>
              <h3 class="text-xl font-semibold my-3">Titre de l'article 1</h3>
              <p class="text-gray-600 mb-4">
                Aperçu de l'article. Limitez le texte à 2-3 lignes pour inciter les visiteurs à en lire davantage.
              </p>
              <a
                href="#"
                class="text-blue-500 hover:underline font-medium"
                >Lire la suite &rarr;</a
              >
            </div>
          </article>

          <!-- Article 2 -->
          <article class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img
              src="path/to/image2.jpg"
              alt="Image de l'article 2"
              class="w-full h-48 object-cover"
            />
            <div class="p-6">
              <span class="text-sm text-blue-500 font-medium">#Catégorie</span>
              <h3 class="text-xl font-semibold my-3">Titre de l'article 2</h3>
              <p class="text-gray-600 mb-4">
                Aperçu de l'article. Limitez le texte à 2-3 lignes pour inciter les visiteurs à en lire davantage.
              </p>
              <a
                href="#"
                class="text-blue-500 hover:underline font-medium"
                >Lire la suite &rarr;</a
              >
            </div>
          </article>

          <!-- Ajouter d'autres articles ici -->
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
          <nav class="flex space-x-2">
            <a
              href="#"
              class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300"
              >Précédent</a
            >
            <a
              href="#"
              class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
              >1</a
            >
            <a
              href="#"
              class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300"
              >2</a
            >
            <a
              href="#"
              class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300"
              >Suivant</a
            >
          </nav>
        </div>
      </div>
    </section>
  </template>
  <script setup>
  // Logic for the accueil page (if necessary)
  import AppLayoutVue from '../Layouts/AppLayout.vue';
</script>
