<template>
  <UserLayout>
    <template v-if="employees">
      <div>
        <div class="px-4 sm:px-0">
          <h3 class="text-base font-semibold leading-7 text-gray-900">Personal Data Sheet</h3>
          <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ employees.fname }} {{ employees.lname }}</dd>
            </div>
          </dl>
        </div>
      </div>
      <div class="mt-10 flex justify-center">
        <a :href="route('user.employee.edit')" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-lg hover:shadow-xl hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
          Update Information
        </a>
      </div>
    </template>
  </UserLayout>
</template>

<script setup>
import UserLayout from '../Layout/UserLayout.vue';
import { usePage } from '@inertiajs/inertia-vue3';

const { props: { employees }, route } = usePage();

</script>
