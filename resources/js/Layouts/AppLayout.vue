<template>
    <div class="min-h-screen flex flex-col">
      <!-- Header -->
      <header class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
          <h1 class="text-2xl font-bold text-primary">Miss Intello-Citoyenne</h1>
          <nav class="space-x-4">
            <Link href="/" class="text-green-700 hover:text-primary">Accueil</Link>
            <Link href="/menu" class="text-green-700 hover:text-primary">Nos Miss</Link>
            <Link href="/galerie" class="text-green-700 hover:text-primary">galerie</Link>
            <Link href="/evenement" class="text-green-700 hover:text-primary">Événement</Link>
            <Link href="/inscription" class="text-green-700 hover:text-primary">Inscription</Link>
            <Link href="/evenement" class="text-green-700 hover:text-primary">Blog</Link>
            <Link href="/about" class="text-green-700 hover:text-primary">    A propos</Link>
            <Link href="/evenement" class="text-green-700 hover:text-primary">ee</Link>
          </nav>
        </div>
      </header>

      <!-- Main Content -->
      <main class="">
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
        <p>© 2024 Miss Intello-Citoyenne</p>
      </footer>
    </div>
  </template>

  <script>
  import { Link } from '@inertiajs/vue3';

  export default {
    name: 'AppLayout',
    components: {
      Link,
    },
  };
  </script>

  <style>
  /* Ajouter vos styles ici */
  </style>
