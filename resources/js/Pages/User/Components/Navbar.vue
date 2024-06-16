<template>
    <header class="bg-white">
      <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Logo</span>
            <ApplicationLogo />
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = true">
            <span class="sr-only">Open main menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
            <NavLink :href="route('user.home')" :active="route().current('user.home')">
              Home
            </NavLink>
          </a>
          <Dropdown align="left" width="48">
            <template #trigger>
              <div class="hidden lg:flex lg:gap-x-12">
              <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-blue-700 hover:text-blue-700  focus:outline-none focus:text-blue-700  transition duration-150 ease-in-out text-gray-600">Leave
              </a>
              </div>
            </template>
            <template #content>
              <DropdownLink :href="route('user.leave.leaveapplication')" :active="route().current('user.leave.leaveapplication')">
                Leave Application
              </DropdownLink>
              <DropdownLink :href="route('user.leave.privilegesleaves')" :active="route().current('user.leave.privilegesleaves')">
                Privileges and Forced Leaves
              </DropdownLink>
              <DropdownLink :href="route('user.leave.leaveindexcard')" :active="route().current('user.leave.leaveindexcard')">
                Leave Index Card
              </DropdownLink>
            </template>
          </Dropdown>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
            <NavLink :href="route('user.payslip')" :active="route().current('user.payslip')">
              Payslip
            </NavLink>
          </a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
            <NavLink :href="route('user.attendance')" :active="route().current('user.attendance')">
              Attendance
            </NavLink>
          </a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
            <NavLink :href="route('user.dtr')" :active="route().current('user.dtr')">
              DTR
            </NavLink>
          </a>
        </div>

        <!--manage user -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <div class="ms-3 relative">
                                <!-- Teams Dropdown -->
                                <Dropdown v-if="$page.props.jetstream.hasTeamFeatures" align="right" width="60">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.current_team.name }}

                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <div class="w-60">
                                            <!-- Team Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Manage Team
                                            </div>

                                            <!-- Team Settings -->
                                            <DropdownLink :href="route('teams.show', $page.props.auth.user.current_team)">
                                                Team Settings
                                            </DropdownLink>

                                            <DropdownLink v-if="$page.props.jetstream.canCreateTeams" :href="route('teams.create')">
                                                Create New Team
                                            </DropdownLink>

                                            <!-- Team Switcher -->
                                            <template v-if="$page.props.auth.user.all_teams.length > 1">
                                                <div class="border-t border-gray-200" />

                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    Switch Teams
                                                </div>

                                                <template v-for="team in $page.props.auth.user.all_teams" :key="team.id">
                                                    <form @submit.prevent="switchToTeam(team)">
                                                        <DropdownLink as="button">
                                                            <div class="flex items-center">
                                                                <svg v-if="team.id == $page.props.auth.user.current_team_id" class="me-2 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>

                                                                <div>{{ team.name }}</div>
                                                            </div>
                                                        </DropdownLink>
                                                    </form>
                                                </template>
                                            </template>
                                        </div>
                                    </template>
                                </Dropdown>
                            </div>

                            <!-- Settings Dropdown -->
                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                                        </button>

                                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Manage Account
                                        </div>

                                        <DropdownLink :href="route('profile.show')">
                                            Profile
                                        </DropdownLink>

                                        <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                            API Tokens
                                        </DropdownLink>

                                        <div class="border-t border-gray-200" />

                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <DropdownLink as="button">
                                                Log Out
                                            </DropdownLink>
                                        </form>
                                    </template>
                                </Dropdown>
                            </div>
        </div>
      </nav>
      <div v-if="mobileMenuOpen" class="lg:hidden">
        <!-- Mobile Menu Content -->
        <div class="fixed inset-0 bg-white">
          <div class="flex items-center justify-between p-6 lg:px-8">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Logo</span>
              <ApplicationLogo />
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = false">
              <span class="sr-only">Close menu</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <div class="pt-2 pb-3">
            <a href="#" class="block px-4 py-2 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-100">Home</a>
            <a href="#" class="block px-4 py-2 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-100">Pds</a>
            <a href="#" class="block px-4 py-2 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-100">Leave</a>
            <a href="#" class="block px-4 py-2 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-100">Payslip</a>
            <a href="#" class="block px-4 py-2 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-100">Attendance</a>
            <a href="#" class="block px-4 py-2 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-100">DTR</a>
          </div>
          <div class="border-t border-gray-200 pt-3">
            <a href="#" class="block px-4 py-2 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-100">Log in</a>
          </div>
        </div>
      </div>
    </header>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { Head, Link, router } from '@inertiajs/vue3';
  import Dropdown from '@/Components/Dropdown.vue';
  import DropdownLink from '@/Components/DropdownLink.vue';
  import ApplicationLogo from '@/Components/ApplicationLogo.vue';
  import NavLink from '@/Components/NavLink.vue';
  

  defineProps({
      title: String,
  });

  const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};
  
  const logout = () => {
      router.post(route('logout'));
  };
  
  let mobileMenuOpen = ref(false);
  </script>
  