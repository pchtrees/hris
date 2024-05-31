<template>
  <div class="flex h-screen bg-blue-100 w-screen">
    <Sidebar />
    <div class="flex-grow flex flex-col">
      <slot name="header"></slot>
      <Navbar />
      <main class="p-4 flex-grow">
        <slot></slot> 
      </main>
    </div>
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue';
import Navbar from '../components/Navbar.vue';


export default {
  components: {
    Sidebar,
    Navbar,
  },
};
</script>
