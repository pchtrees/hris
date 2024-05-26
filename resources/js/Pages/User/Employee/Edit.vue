<template>
  <UserLayout>
    <div class="flex justify-center w-screen-3 items-center h-full">
  <div class="max-w-screen-2xl bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Personal Information</h1>
        <!-- Your form inputs here -->
        <form @submit.prevent="submit">
          <!-- First Name -->
          <div class="mb-4">
            <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" id="fname" v-model="employee.fname" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
          </div>
          <!-- Middle Name -->
          <div class="mb-4">
            <label for="mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
            <input type="text" id="mname" v-model="employee.mname" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
          </div>
          <!-- Last Name -->
          <div class="mb-4">
            <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" id="lname" v-model="employee.lname" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
          </div>
          <!-- Save button -->
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        </form>
      </div>
    </div>
  </UserLayout>
</template>

<script setup>
import UserLayout from '../Layout/UserLayout.vue';
import { ref } from 'vue'; 
import { Inertia } from '@inertiajs/inertia';

const employee = {
  fname: 'John',
  mname: 'Doe',
  lname: 'Smith',
};

const submit = () => {
  Inertia.put(route('user.employee.update'), employee);
};
</script>
