<template>
  <div class="flex h-screen">
    <AdminLayout>
      <template #header>
        <h1 class="text-2xl font-bold m-4 text-gray-700">Dashboard</h1>
      </template>
      <div v-if="data" class="grid grid-cols-1 md:grid-cols-4 gap-4 p-2">
        <!-- Cards -->
        <CardComponent
          title="Total Employees"
          :value="data.totalEmployees"
        />
        <CardComponent
          title="Total Offices"
          :value="data.totalOffices"
        />
        <CardComponent
          title="Total Positions"
          :value="data.totalPosition"
        />
        <CardComponent
          title="Total Leaves"
          :value="data.totalLeaveApplication"
        />
      </div>
      <!-- Charts -->
      <div class="md:flex md:space-x-4 mt-4 p-2">
        <div class="flex-1">
          <ChartOne />
        </div>
        <div class="flex-2 ">
          <ChartTwo />
        </div>
      </div>
    </AdminLayout>
  </div>
</template>

<script>
import AdminLayout from '../Layout/AdminLayout.vue';
import CardComponent from '../components/Card.vue'; 
import ChartOne from '../components/Charts/ChartOne.vue';
import ChartTwo from '../components/Charts/ChartTwo.vue';

export default {
  props: {
    data: {
      type: Object,
      required: true,
    },
  },
  components: {
    AdminLayout,
    CardComponent,
    ChartOne,
    ChartTwo
  },
};
</script>

<style scoped>
/* Add any additional styles you need here */
</style>
