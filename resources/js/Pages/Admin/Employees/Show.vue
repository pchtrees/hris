<template>
    <div v-if="currentModal === 'show'" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
      <div class="bg-white rounded-lg p-4 max-w-md mx-auto">
        <h2 class="text-xl font-bold mb-4">Employee Details</h2>
        <p class="mb-2">Name: {{ selectedEmployee.fname }} {{ selectedEmployee.lname }}</p>
        <p class="mb-2">Office: {{ officeNames[selectedEmployee.office_id] }}</p>
        <p class="mb-2">Contact: {{ selectedEmployee.mob_no }}</p>
        <p class="mb-2">Status: {{ selectedEmployee.is_active ? 'Active' : 'Inactive' }}</p>
        <button @click="hideModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Close
        </button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      currentModal: String,
      selectedEmployee: Object,
      officeNames: Object,
    },
    methods: {
      hideModal() {
        this.$emit('close'); 
      },
    },
  };
  </script>
  