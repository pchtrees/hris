<template>
  <ul>
    <li class="m-2 cursor-pointer text-gray-700 py-2 px-4 font-bold" v-if="item.children && item.children.length">
      <div class="flex items-center justify-between" @click="toggleSubMenu">
        <span>{{ item.label }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" :class="{ 'transform rotate-90': isSubMenuOpen }" stroke="currentColor" class="w-6 h-6 transition-transform duration-300 ease-in-out">
          <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
      </div>
      <ul v-show="isSubMenuOpen">
        <SidebarMenu v-for="child in item.children" :key="child.route" :item="child" @click.stop />
      </ul>
    </li>
    <li v-else>
      <a :href="route(item.route)" :class="{ 'bg-blue-500 text-white': route().current(item.route) }"
        class="block py-2 m-2 px-4 rounded-lg text-gray-700 transition duration-300 ease-in-out cursor-pointer font-bold border border-transparent hover:bg-blue-500 hover:text-white">
        {{ item.label }} 
      </a>
    </li>
  </ul>
</template>

<script>
export default {
  name: 'SidebarMenu',
  props: {
    item: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      isSubMenuOpen: false,
    };
  },
  watch: {
    $route(to, from) {
      this.checkSubMenuOpen();
    },
  },
  created() {
    this.checkSubMenuOpen();
  },
  methods: {
    toggleSubMenu() {
      this.isSubMenuOpen = !this.isSubMenuOpen;
    },
    checkSubMenuOpen() {
      if (this.item.children) {
        this.isSubMenuOpen = this.item.children.some(child => this.route().current(child.route));
      }
    },
  },
  mounted() {
    if (this.item.children) {
      this.isSubMenuOpen = this.item.children.some(child => this.route().current(child.route));
    }
  },
};
</script>
