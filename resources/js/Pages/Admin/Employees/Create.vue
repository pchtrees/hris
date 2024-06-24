<template>
  <div>
    <h2 class="text-xl font-bold mb-4">Create New Employee</h2>
    <form @submit.prevent="createEmployee">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="fname">First Name</label>
        <input v-model="newEmployee.fname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fname" type="text" placeholder="First Name">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="lname">Last Name</label>
        <input v-model="newEmployee.lname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lname" type="text" placeholder="Last Name">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="mob_no">Contact</label>
        <input v-model="newEmployee.mob_no" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mob_no" type="text" placeholder="Contact">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="office_id">Office</label>
        <select v-model="newEmployee.office_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="office_id">
          <option v-for="(office, id) in officeNames" :value="id" :key="id">{{ office }}</option>
        </select>
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Save
        </button>
        <button @click="cancelCreate" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Cancel
        </button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  props: {
    officeNames: Object, // Assuming you pass office names as a prop
  },
  data() {
    return {
      newEmployee: {
        fname: '',
        lname: '',
        mob_no: '',
        office_id: null,
      },
    };
  },
  methods: {
    createEmployee() {
      // Emit an event to notify the parent component to create the employee
      this.$emit('create-employee', this.newEmployee);
    },
    cancelCreate() {
      // Emit an event to notify the parent component to cancel employee creation
      this.$emit('cancel-create');
    },
  },
};
</script>
