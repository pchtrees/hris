<template>
  <aside class="bg-white dark:border-strokedark dark:bg-boxdark text-blue-900 dark:text-white w-64 flex-none">
    <div class="pt-4 p-4 flex items-center justify-center">
      <h1 class="font-bold text-gray-700">HRIS</h1>
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
import CustomDashboardIcon from './CustomDashboardIcon.vue';
import { BuildingOfficeIcon, BriefcaseIcon, UsersIcon } from '@heroicons/vue/24/outline';

export default {
  components: {
    SidebarMenu,
  },
  data() {
    return {
      menuItems: [
        { label: 'Dashboard', route: 'admin.dashboard.index', icon: CustomDashboardIcon }, 
        { label: 'Employees', route: 'admin.employees.index', icon: UsersIcon },
        {
          label: 'Employee Management',
          children: [
            { label: 'Offices', route: 'admin.office.index', icon: BuildingOfficeIcon }, 
            { label: 'Positions', route: 'admin.position.create', icon: BriefcaseIcon },
            { label: 'Plantillas', route: 'admin.plantilla.index', icon: BriefcaseIcon },
          ],
        },
        {
          label: 'Leave Management',
          children: [
            { label: 'Leave Credits', route: 'admin.leave.credits', icon: BriefcaseIcon },
          ],
        },
        {
          label: 'Payroll Management',
          children: [
            { label: 'Attendance Logs', route: 'admin.payroll.dtr', icon: BriefcaseIcon },
            { label: 'Salary Grade', route: 'admin.salaryGrade.index', icon: BriefcaseIcon },
          ],
        },
      ],
    };
  },
};
</script>
