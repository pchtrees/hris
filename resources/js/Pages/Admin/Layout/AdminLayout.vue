<template>
  <div class="flex h-screen">
    <Sidebar />
      
        <slot name="header"></slot>
        <Navbar />
        
        <main>
          <slot></slot>
        </main>
      </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue';
import Navbar from '../components/Navbar.vue';

export default {
  components: {
    Sidebar,
    Navbar
  }
};
</script>
