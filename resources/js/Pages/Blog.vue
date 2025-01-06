<template>
    <section id="blog" class="py-16 bg-gradient-to-r from-[#2E7D32] to-[#4CAF50] min-h-screen">
      <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-4xl font-bold text-center mb-12">Notre Blog</h2>

        <!-- Liste des articles -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <article
            v-for="article in articles.data"
            :key="article.id"
            class="bg-white rounded-lg shadow-lg overflow-hidden"
          >
            <img
              :src="`/storage/${article.image}`"
              :alt="article.title"
              class="w-full h-48 object-cover"
            />
            <div class="p-6">
              <span class="text-sm text-blue-500 font-medium">
                #{{ article.category?.name || 'Sans catégorie' }}
              </span>
              <h3 class="text-xl font-semibold my-3">{{ article.title }}</h3>
              <p class="text-gray-600 mb-4">
                {{ article.content.substring(0, 100) }}...
              </p>
              <a
                :href="`/blog/${article.id}`"
                class="text-blue-500 hover:underline font-medium"
                >Lire la suite &rarr;</a
              >
            </div>
          </article>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
          <nav class="flex space-x-2">
            <button
              v-if="articles.links.prev"
              @click="changePage(articles.links.prev)"
              class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300"
            >
              Précédent
            </button>
            <button
              v-if="articles.links.next"
              @click="changePage(articles.links.next)"
              class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300"
            >
              Suivant
            </button>
          </nav>
        </div>
      </div>
    </section>
  </template>

  <script setup>
  import { ref } from "vue";
  import { Inertia } from "@inertiajs/inertia";

  const props = defineProps(["articles"]);

  const changePage = (url) => {
    Inertia.get(url);
  };
  </script>
