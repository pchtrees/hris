<template>
    <div v-if="currentModal === 'delete'" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
      <div class="bg-white rounded-lg p-4 max-w-md mx-auto">
        <h2 class="text-xl font-bold mb-4">Delete Employee</h2>
        <p class="mb-4">Are you sure you want to delete this employee?</p>
        <div class="flex items-center justify-between">
          <button @click="deleteEmployee(selectedEmployee.id)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Yes, Delete
          </button>
          <button @click="hideModal" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Cancel
          </button>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  
  export default {
    props: {
      currentModal: String,
      selectedEmployee: Object,
    },
    setup(props, { emit }) {
      const deleteEmployee = async (employeeId) => {
        // Implement your deleteEmployee function here
        // This function should delete the employee using the selectedEmployee object
      };
  
      const hideModal = () => {
        // Hide the modal by emitting the 'close' event
        emit('close');
      };
  
      return {
        deleteEmployee,
        hideModal,
      };
    }
  };
  </script>
  