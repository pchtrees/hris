<template>
  <UserLayout>
    <div>
    <h1>Edit Personal Data</h1>
    <!-- Form to edit employee's information -->
    <!-- Example: -->
    <form @submit.prevent="submitForm">
      <input type="text" v-model="formData.fname" placeholder="First Name">
      <!-- Other input fields for editing -->
      <button type="submit">Save</button>
    </form>
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
