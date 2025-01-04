<template>
    <div>
      <h1 class="text-2xl font-bold mb-6">Créer une catégorie</h1>
      <form method="POST" action="/categories">
        <input type="hidden" name="_token" :value="csrfToken" />
        <div class="mb-4">
          <label for="name" class="block font-medium">Nom</label>
          <input
            type="text"
            id="name"
            name="name"
            class="form-input mt-1 block w-full"
            required
          />
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
      </form>
    </div>
  </template>

  <script setup>
  import { usePage } from '@inertiajs/inertia-vue3';
  const csrfToken = usePage().props.value.csrf_token;
  </script>
