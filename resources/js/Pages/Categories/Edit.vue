<template>
    <div>
      <h1 class="text-2xl font-bold mb-6">Modifier la catégorie</h1>
      <form :action="`/categories/${category.id}`" method="POST">
        <input type="hidden" name="_token" :value="csrfToken" />
        <input type="hidden" name="_method" value="PUT" />
        <div class="mb-4">
          <label for="name" class="block font-medium">Nom</label>
          <input
            type="text"
            id="name"
            name="name"
            class="form-input mt-1 block w-full"
            :value="category.name"
            required
          />
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </form>
    </div>
  </template>

  <script setup>
  import { usePage } from '@inertiajs/inertia-vue3';
  const { props } = usePage();
  const category = props.value.category;
  const csrfToken = props.value.csrf_token;
  </script>
