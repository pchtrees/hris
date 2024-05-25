<script setup>
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
</script>

<template>
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-blue-100 via-blue-300 to-blue-2700">
    <div class="flex flex-col sm:flex-row justify-evenly w-full px-6">
      <div class="my-auto flex flex-col items-center md:items-center sm:items-start">
        <AuthenticationCardLogo class="mx-auto" />
        <div class="text-4xl text-blue-900 font-bold my-2">INTEGRATED HUMAN RESOURCE</div>
        <div class="text-3xl block text-center font-bold text-gray-800 ">INFORMATION SYSTEM</div>
      </div>
      
      <div class="w-full sm:max-w-md mt-6 sm:mt-0 px-6 py-4 bg-white shadow-lg overflow-hidden sm:rounded-lg">
        <slot />
      </div>
    </div>
  </div>
</template>
