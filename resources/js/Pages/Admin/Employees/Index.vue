<template>
  <div class="flex h-screen">
    <AdminLayout>
      <template #header>
        <h1 class="text-2xl font-bold m-4 text-gray-600 dark:text-stroke">Employees</h1>
        <div class="flex justify-between m-4 mb-0">
          <Search />
          <button @click="showCreateModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create
          </button>        
        </div>
      </template>
      <div class="rounded-lg border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5  xl:pb-1">
        <div class="max-w-full overflow-x-auto">
          <table class="w-full table-auto">
            <thead>
              <tr class="bg-gray-2 dark:bg-meta-4  text-left ">
                <th class="min-w-[220px] py-4 px-4 font-medium text-black dark:text-white xl:pl-11 ">Name</th>
                <th class="min-w-[150px] py-4 px-4 font-medium text-black dark:text-white">Office</th>
                <th class="min-w-[150px] py-4 px-4 font-medium text-black dark:text-white">Contact</th>
                <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">Status</th>
                <th class="min-w-[150px] py-4 px-4 font-medium text-black dark:text-white">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="employee in employees" :key="employee.id" class="hover:bg-gray-100">
                <td class="py-5 px-4 pl-9 xl:pl-11 text-left">
                  <h5 class="font-medium text-black dark:text-white ">{{ employee.fname }} {{ employee.lname }}</h5>
                </td>
                <td class="py-5 px-4 dark:text-white">{{ officeNames[employee.office_id] }}</td>
                <td class="py-5 px-4 dark:text-white">{{ employee.mob_no }}</td>
                <td class="py-5 px-4">
                  <p class="inline-flex rounded-full bg-opacity-10 py-1 px-3 text-sm font-medium"
                    :class="{ 'text-meta-3': employee.is_active, 'text-meta-1': !employee.is_active }">
                      {{ employee.is_active ? 'Active' : 'Inactive' }}
                  </p>
                </td>
                <td class="py-5 px-4">
                  <div class="flex items-center space-x-3.5">
                    <button class="hover:text-blue-400 dark:hover:text-primary text-gray-600 dark:text-white" @click="showShowModal(employee)">
                      <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.20624 8.99981 3.20624C14.5686 3.20624 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.5562 8.99981 13.5562C13.1061 13.5562 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.44374 8.99981 4.44374C4.89356 4.44374 2.4748 7.95936 1.85605 8.99999Z" fill="" />
                          <path d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 7.875C8.38125 7.875 7.875 8.38125 7.875 9C7.875 9.61875 8.38125 10.125 9 10.125C9.61875 10.125 10.125 9.61875 10.125 9C10.125 8.38125 9.61875 7.875 9 7.875Z" fill="" />
                      </svg>
                  </button>
                    <button class="hover:text-blue-400 dark:hover:text-primary text-gray-600 dark:text-white" @click="showUpdateModal('edit', employee)">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>
                    </button>
                    <button class="hover:text-blue-400 dark:hover:text-primary text-gray-600 dark:text-white" @click="showDeleteModal('delete', employee)">
                      <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96564V4.45277C2.72852 4.70802 2.92602 4.90552 3.18127 4.90552H14.7914C15.0466 4.90552 15.2441 4.70802 15.2441 4.45277V3.96564C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.18127 1.9969C7.18127 1.70815 7.41477 1.47464 7.70352 1.47464H10.0691C10.3579 1.47464 10.5914 1.70815 10.5914 1.9969V2.47502H7.18127V1.9969ZM14.3829 5.8969H3.58977L4.19352 16.012C4.23602 16.7695 4.87477 17.3781 5.63227 17.3781H12.3398C13.0973 17.3781 13.736 16.7695 13.7785 16.012L14.3823 5.8969H14.3829ZM10.5379 7.52815C10.5608 7.2819 10.3741 7.07464 10.1279 7.0519C9.88165 7.0289 9.67438 7.21565 9.65165 7.4619L9.31577 11.4713C9.29352 11.7175 9.48027 11.9246 9.72652 11.9476C9.75015 11.9501 9.77315 11.9513 9.79552 11.9513C10.0155 11.9513 10.2079 11.7796 10.231 11.559L10.5379 7.52815ZM12.2473 7.0519C12.001 7.07464 11.8143 7.2819 11.8373 7.52815L12.1735 11.5376C12.1958 11.7838 12.009 11.991 11.7628 12.0138C11.5179 12.0368 11.3099 11.8501 11.2871 11.6039L10.9509 7.59464C10.9281 7.34839 11.1148 7.14115 11.361 7.11815C11.6073 7.09515 11.8145 7.2819 11.8373 7.52815L12.2473 7.0519ZM6.68602 7.0519C6.43977 7.07464 6.25302 7.2819 6.27577 7.52815L6.61165 11.5376C6.63438 11.7838 6.44765 11.991 6.2014 12.0138C5.97865 12.0349 5.77077 11.8543 5.74665 11.6196L5.4129 7.61815C5.39015 7.3719 5.5769 7.16464 5.82315 7.1419C6.0694 7.1189 6.27665 7.30565 6.2994 7.5519L6.68602 7.0519Z"
                          fill="" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Show Modal -->
      <Show v-if="isShowModalVisible" :employee="selectedEmployee" @close="hideShowModal" />

      <!-- Update Modal -->
      <Update v-if="isUpdateModalVisible" :employee="selectedEmployee" @close="hideUpdateModal" />

      <!-- Delete Modal -->
      <Delete v-if="isDeleteModalVisible" :employee="selectedEmployee" @close="hideDeleteModal" />

      <!-- Create Modal -->
      <Create v-if="isCreateModalVisible" @close="hideCreateModal" />
    </AdminLayout>
  </div>
</template>


<script>
import { ref } from 'vue';
import AdminLayout from '../Layout/AdminLayout.vue';
import Search from '../components/Search.vue';
import Create from './Create.vue';
import Show from './Show.vue'; 
import Update from './Update.vue';
import Delete from './Delete.vue';

export default {
  components: {
    AdminLayout,
    Search,
    Create,
    Show, 
    Update,
    Delete
  },
  props: {
    employees: Array,
    officeNames: Object,
  },
  data() {
    return {
      selectedEmployee: null,
      isShowModalVisible: false,
      isUpdateModalVisible: false,
      isDeleteModalVisible: false,
      isCreateModalVisible: false, 
    };
  },
  methods: {
    showShowModal(employee) {
      this.selectedEmployee = employee;
      this.isShowModalVisible = true;
    },
    showUpdateModal(employee) {
      this.selectedEmployee = employee;
      this.isUpdateModalVisible = true;
    },
    showDeleteModal(employee) {
      console.log("Delete modal clicked");
      this.selectedEmployee = employee;
      this.isDeleteModalVisible = true;
    },
    showCreateModal() {
      this.isCreateModalVisible = true;
    },
    // Add methods to hide the modals
    hideShowModal() {
      this.isShowModalVisible = false;
    },
    hideUpdateModal() {
      this.isUpdateModalVisible = false;
    },
    hideDeleteModal() {
      this.isDeleteModalVisible = false;
    },
    hideCreateModal() {
      this.isCreateModalVisible = false;
    },
    // Other methods...
  }
};
</script>
