<template>
  <div>
    <div class="flex h-screen">
      <aside class="bg-white text-blue-900 w-64 flex-none">
        <div class="pt-4 p-4 flex items-center justify-center">
          <h1 class="font-bold text-gray-700">HRIS</h1>
          <hr class="bg-blue-300 border">
        </div>
        <nav class="mt-2">
          <ul class="space-y-2">
              <li>
              <a :href="route('admin.dashboard.index')" :class="{ 'bg-blue-500': route().current('admin.dashboard.index') }"
                class="block py-2 m-2 px-4 rounded-lg transition duration-300 ease-in-out cursor-pointer border border-transparent text-gray-900 hover:text-gray-300 hover:bg-blue-500 bg-blue-500">Dashboard</a>
            </li>
            <li>
              <a :href="route('admin.employees.index')" :class="{ 'bg-blue-500': route().current('admin.employees.index') }"
                class="block py-2 m-2 px-4 rounded-lg transition duration-300 ease-in-out cursor-pointer border border-transparent text-gray-100 hover:bg-blue-500">Employees</a>
            </li>
            <li>
              <a :href="route('admin.office.create')" :class="{ 'bg-blue-500': route().current('admin.office.create') }"
                class="block py-2 m-2 px-4 rounded-lg transition duration-300 ease-in-out cursor-pointer border border-transparent text-gray-100 hover:bg-blue-500">Office</a>
            </li>
            <li>
              <a :href="route('admin.position.create')" :class="{ 'bg-blue-500': route().current('admin.position.create') }"
                class="block py-2 m-2 px-4 rounded-lg transition duration-300 ease-in-out cursor-pointer border border-transparent text-gray-100 hover:bg-blue-500">Position</a>
            </li>
            <li>
              <a :href="route('admin.plantilla.create')" :class="{ 'bg-blue-500': route().current('admin.plantilla.create') }"
                class="block py-2 m-2 px-4 rounded-lg transition duration-300 ease-in-out cursor-pointer border border-transparent text-gray-100 hover:bg-blue-500">Plantilla</a>
            </li>
          </ul>
        </nav>
      </aside>
      <div class="flex-grow flex flex-col">
        <!-- Main content here -->
      </div>
    </div>
  </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';

export default {
  components: {
    Head,
  },
  props: {
    title: {
      type: String,
      default: 'Dashboard'
    }
  },
  computed: {
    pageTitle() {
      return this.title;
    }
  },
};
</script>
