
<template>
  <aside class="bg-white text-blue-900 w-64 flex-none">
    <div class="pt-4 p-4 flex items-center justify-center">
      <h1 class="font-bold text-gray-700">HRIS</h1>
      <hr class="bg-blue-300 border">
    </div>
    <nav class="mt-2">
      <ul class="space-y-2">
        <SidebarMenu v-for="item in menuItems" :key="item.route" :item="item" />
      </ul>
    </nav>
  </aside>
  
</template>

<script>
import SidebarMenu from './SidebarMenu.vue';

export default {
  components: {
    SidebarMenu,
  },
  data() {
    return {
      menuItems: [
        { label: 'Dashboard', route: 'admin.dashboard.index' },
        { label: 'Employees', route: 'admin.employees.index' },
        {
          label: 'Employee Management',
          children: [
            { label: 'Office', route: 'admin.office.index' },
            { label: 'Position', route: 'admin.position.create' },
            { label: 'Plantilla', route: 'admin.plantilla.index' },
          ],
        },
        {
          label: 'Leave Management',
          children: [
            { label: 'Leave Credits', route: 'admin.leave.credits' },
          ],
        },
        {
          label: 'Payroll Management',
          children: [
          { label: 'Attendance Logs', route: 'admin.payroll.dtr' }
         ],
        },
        
        

      ],
    };
  },
};
</script>
