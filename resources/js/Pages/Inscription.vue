<template>
    <!-- Inscription Section -->
    <section id="inscription" class="py-20 bg-green-50">
      <div class="container mx-auto px-4 max-w-3xl">

        <!-- Introduction Paragraph -->
        <div class="mb-12">
          <p class="text-lg text-gray-700 leading-relaxed">
            Pourquoi s'inscrire ?
          </p>
          <ul class="list-inside list-disc text-gray-700 mt-4">
            <li>Vous développez votre leadership féminin</li>
            <li>Vous bénéficiez des formations qui feront de vous des femmes engagées à relever le défi : celui de montrer l'importance de la femme dans le monde.</li>
            <li>Vous avez la possibilité de bénéficier des opportunités une fois que vous êtes intégrée dans le cercle.</li>
          </ul>
        </div>

        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-8">Inscription</h2>

        <!-- Formulaire -->
        <form id="inscription-form" class="bg-white rounded-xl shadow-lg p-8 space-y-6">

          <div>
            <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">Nom et Prénom</label>
            <input
              type="text"
              id="nom"
              name="nom"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"
            />
          </div>

          <div>
            <label for="dateNaissance" class="block text-sm font-medium text-gray-700 mb-2">Date de Naissance</label>
            <input
              type="date"
              id="dateNaissance"
              name="dateNaissance"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"
            />
          </div>

          <div>
            <label for="region-select" class="block text-sm font-medium text-gray-700 mb-2">Région</label>
            <select
              id="region-select"
              name="region"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"
            >
              <!-- Populated by regions.js -->
            </select>
          </div>

          <div>
            <label for="education" class="block text-sm font-medium text-gray-700 mb-2">Niveau d'Études</label>
            <input
              type="text"
              id="education"
              name="education"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"
            />
          </div>

          <div>
            <label for="motivation" class="block text-sm font-medium text-gray-700 mb-2">Lettre de Motivation</label>
            <textarea
              id="motivation"
              name="motivation"
              rows="4"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"
            ></textarea>
          </div>

          <button type="submit" class="btn-primary w-full py-3 px-6 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            Soumettre ma candidature
          </button>
        </form>

      </div>
    </section>
  </template>
