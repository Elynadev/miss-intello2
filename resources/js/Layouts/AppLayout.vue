<template>
    <div class="min-h-screen flex flex-col">
      <!-- Header -->
      <header class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
          <!-- Logo / Titre -->
          <h1 class="text-2xl font-bold text-primary">Miss Intello-Citoyenne</h1>

          <!-- Bouton Burger -->
          <button
            @click="menuOpen = !menuOpen"
            class="sm:hidden text-green-700 hover:text-primary focus:outline-none"
          >
            <!-- Icône Burger -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>

          <!-- Navigation Desktop -->
          <nav class="hidden sm:flex space-x-4">
            <Link href="/" class="text-green-700 hover:text-primary">Accueil</Link>
            <Link href="/menu" class="text-green-700 hover:text-primary">Nos Miss</Link>
            <Link href="/galerie" class="text-green-700 hover:text-primary">Galerie</Link>
            <Link href="/evenement" class="text-green-700 hover:text-primary">Événement</Link>
            <Link href="/inscription" class="text-green-700 hover:text-primary">Inscription</Link>
            <Link href="/blog" class="text-green-700 hover:text-primary">Blog</Link>
            <Link href="/about" class="text-green-700 hover:text-primary">À propos</Link>
          </nav>
        </div>

        <!-- Navigation Mobile -->
        <div
          v-if="menuOpen"
          class="sm:hidden bg-white shadow-md transition-transform duration-300 ease-in-out"
        >
          <nav class="flex flex-col space-y-2 p-4">
            <Link href="/" class="block text-green-700 hover:text-primary">Accueil</Link>
            <Link href="/menu" class="block text-green-700 hover:text-primary">Nos Miss</Link>
            <Link href="/galerie" class="block text-green-700 hover:text-primary">Galerie</Link>
            <Link href="/evenement" class="block text-green-700 hover:text-primary">Événement</Link>
            <Link href="/inscription" class="block text-green-700 hover:text-primary">Inscription</Link>
            <Link href="/blog" class="block text-green-700 hover:text-primary">Blog</Link>
            <Link href="/about" class="block text-green-700 hover:text-primary">À propos</Link>
          </nav>
        </div>
      </header>

      <!-- Main Content -->
      <main class="flex-1">
        <slot />
      </main>

      <!-- Footer -->
      <footer class="bg-gray-800 text-white py-4 text-center">
        <div class="container mx-auto px-4">
          <div class="grid md:grid-cols-3 gap-8">
            <div>
              <h4 class="text-xl font-semibold mb-4">Contact</h4>
              <p>Email: contact@missintello.bj</p>
              <p>Téléphone: (+229) 00 00 00 00</p>
            </div>
            <div>
              <h4 class="text-xl font-semibold mb-4">Suivez-nous</h4>
              <div class="space-x-4">
                <a href="#" class="hover:text-primary">Facebook</a>
                <a href="#" class="hover:text-primary">Instagram</a>
                <a href="#" class="hover:text-primary">Twitter</a>
              </div>
            </div>
            <div>
              <h4 class="text-xl font-semibold mb-4">Newsletter</h4>
              <div class="flex">
                <input
                  type="email"
                  placeholder="Votre email"
                  class="flex-1 px-4 py-2 rounded-l bg-gray-800 border border-gray-700 focus:outline-none focus:border-primary"
                />
                <button
                  class="bg-primary px-4 py-2 rounded-r hover:bg-secondary transition-colors"
                >
                  S'abonner
                </button>
              </div>
            </div>
          </div>
          <div class="mt-8 pt-8 border-t border-gray-800 text-center">
            <p>&copy; 2024 Miss Intello-Citoyenne. Tous droits réservés.</p>
          </div>
        </div>
      </footer>
    </div>
  </template>

  <script>
  import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

  export default {
    name: "AppLayout",
    components: { Link },
    setup() {
      const menuOpen = ref(false);
      return { menuOpen };
    },
  };
  </script>

  <style>
  /* Ajoutez vos styles personnalisés ici */
  </style>
