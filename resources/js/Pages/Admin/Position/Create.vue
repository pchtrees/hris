<template>
    <div class="flex h-screen">
      <AdminLayout>
        <template #header>
          <h1 class="text-2xl font-bold m-4 text-gray-600">Position</h1>
        </template>
      </AdminLayout>
    </div>
  </template>
  
  <script>
  import AdminLayout from '../Layout/AdminLayout.vue';
  
  export default {
    components: {
      AdminLayout
    },
  };
  </script>
  
  