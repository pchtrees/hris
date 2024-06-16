<template>
    <div v-if="currentModal === 'edit'" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
      <div class="bg-white rounded-lg p-4 max-w-md mx-auto">
        <h2 class="text-xl font-bold mb-4">Update Employee</h2>
        <!-- Your existing update employee form -->
        <button @click="updateEmployee(selectedEmployee.id)" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          Save Changes
        </button>
        <button @click="hideModal" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
          Cancel
        </button>
      </div>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  
  export default {
    props: {
      currentModal: String,
      selectedEmployee: Object,
      officeNames: Object,
    },
    setup(props) {
      const updateEmployee = async (employeeId) => {
        // Implement your updateEmployee function here
        // This function should update the employee using the selectedEmployee object
      };
  
      const hideModal = () => {
        // Hide the modal by emitting the 'close' event
        emit('close');
      };
  
      return {
        updateEmployee,
        hideModal,
      };
    }
  };
  </script>
  