<template>
    <div v-if="isVisible" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50">
      <div class="bg-white p-6 rounded-lg shadow-lg w-3/4 max-w-lg">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-xl font-semibold">{{ title }}</h2>
          <button @click="$emit('close')" class="text-gray-600 hover:text-gray-900">
            &times;
          </button>
        </div>
        <div>
          <slot></slot>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      title: {
        type: String,
        required: true
      },
      isVisible: {
        type: Boolean,
        default: false
      }
    }
  };
  </script>
  