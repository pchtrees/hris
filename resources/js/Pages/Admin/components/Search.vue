<template>
    <div class="flex items-center space-x-2">
      <input
        type="text"
        v-model="searchQuery"
        placeholder="Search..."
        class="border border-gray-300 rounded-md px-3 py-1.5 focus:outline-none focus:border-blue-500"
      />
      <button
        @click="search"
        class="bg-blue-500 hover:bg-blue-600 text-white py-1.5 px-4 rounded-md focus:outline-none"
      >
        Search
      </button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        searchQuery: '', // Store the search query
      };
    },
    methods: {
      search() {
        // Implement your search logic here
        console.log('Searching for:', this.searchQuery);
        // You can emit an event or perform an action based on the search query
      },
    },
  };
  </script>
  