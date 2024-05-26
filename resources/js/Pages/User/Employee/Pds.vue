<template>
  <UserLayout>
    <div class="flex flex-col items-center justify-center h-full">
      <h1 class="text-2xl font-bold mb-4">Personal Information</h1>
      <div class="mb-4">
        <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
        <p>{{ employee.fname }}</p>
      </div>
      <div class="mb-4">
        <label for="mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
        <p>{{ employee.mname }}</p>
      </div>
      <div class="mb-4">
        <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
        <p>{{ employee.lname }}</p>
      </div>
      <!-- Use InertiaLink for routing to edit.vue -->
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a :href="route('user.employee.edit')"
          class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-lg hover:shadow-xl hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
          Update Personal Data Sheet
        </a>
      </div>
    </div>
  </UserLayout>
</template>

<script setup>
import UserLayout from '../Layout/UserLayout.vue';
import { ref } from 'vue';

// Define the employee data as a reactive ref
const employee = ref({
  fname: '',
  mname: '',
  lname: '',
});


</script>
