<template>
    <form @submit.prevent="updateEmployee">
      <!-- Form fields for updating an employee -->
      <div>
        <label for="fname">First Name</label>
        <input type="text" v-model="form.fname" id="fname" />
      </div>
      <!-- Add more fields as needed -->
  
      <button type="submit">Save Changes</button>
    </form>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/inertia-vue3';
  
  // Assuming you pass the employee data as props
  props: {
    employee: {
      type: Object,
      required: true,
    },
  },
  
  const { data, put } = useForm({
    // Initialize form data with the employee's data
    fname: props.employee.fname,
    // Add other form fields and initialize them with employee data
  });
  
  const updateEmployee = () => {
    put(`/employees/${props.employees.id}`, {
      data: data.value,
    }).then(() => {
      // Redirect to the employee details or appropriate page after successful update
      // For example:
      // $inertia.visit(route('employees.show', props.employee.id));
    });
  };
  </script>
  