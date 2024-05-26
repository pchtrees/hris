<template>
  <div class="absolute top-0 right-0 p-4">
    <div class="hidden sm:flex sm:items-center sm:ms-6">
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <!-- Settings Dropdown -->
        <div class="ms-3 relative">
          <Dropdown align="right" width="48">
            <template #trigger>
              <button
                v-if="$page.props.jetstream.managesProfilePhotos"
                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
              >
                <img
                  class="h-8 w-8 rounded-full object-cover"
                  :src="$page.props.auth.user.profile_photo_url"
                  :alt="$page.props.auth.user.name"
                />
              </button>

              <span v-else class="inline-flex rounded-md">
                <button
                  type="button"
                  class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150"
                >
                  {{ $page.props.auth.user.name }}

                  <svg
                    class="ms-2 -me-0.5 h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                    />
                  </svg>
                </button>
              </span>
            </template>

            <template #content>
              <!-- Account Management -->
              <div class="block px-4 py-2 text-xs text-gray-400">Manage Account</div>

              <DropdownLink :href="route('profile.show')">Profile</DropdownLink>

              <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                API Tokens
              </DropdownLink>

              <div class="border-t border-gray-200"></div>

              <!-- Authentication -->
              <form @submit.prevent="logout">
                <DropdownLink as="button">Log Out</DropdownLink>
              </form>
            </template>
          </Dropdown>
        </div>
      </div>

      <!-- Hamburger -->
      <div class="-me-2 flex items-center sm:hidden">
        <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" @click="showingNavigationDropdown = ! showingNavigationDropdown">
          <svg
            class="h-6 w-6"
            stroke="currentColor"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
            <path
              :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'; 



export default {
  components: {
    Dropdown,
    DropdownLink,
    ResponsiveNavLink, 
  },
  
  methods: {
    logout() {
      this.$inertia.post(this.route('logout'));
    },
  },
};
</script>
