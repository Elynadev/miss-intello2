<template>
    <div>
      <h1 class="text-2xl font-bold mb-6">Catégories</h1>
      <a href="/categories/create" class="btn btn-primary mb-4">Ajouter une catégorie</a>
      <table class="table-auto w-full">
        <thead>
          <tr>
            <th class="px-4 py-2">Nom</th>
            <th class="px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="category in categories" :key="category.id">
            <td class="border px-4 py-2">{{ category.name }}</td>
            <td class="border px-4 py-2">
              <a :href="`/categories/${category.id}/edit`" class="text-blue-500 hover:underline">Modifier</a>
              <form :action="`/categories/${category.id}`" method="POST" class="inline">
                <input type="hidden" name="_method" value="DELETE" />
                <input type="hidden" name="_token" :value="csrfToken" />
                <button type="submit" class="text-red-500 hover:underline ml-2">Supprimer</button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>

  <script setup>
  import { usePage } from '@inertiajs/inertia-vue3';
  const { props } = usePage();
  const categories = props.value.categories;
  const csrfToken = props.value.csrf_token;
  </script>
