<template>
  <div>
    <div class="absolute inset-0 transform-gpu overflow-hidden blur-3xl" aria-hidden="true" style="pointer-events: none;">
      <div class="absolute inset-1 bg-gradient-to-br from-blue-100 via-blue-400 to-blue-700 opacity-40"></div>
    </div>
    <Navbar></Navbar>
    <slot name="header"></slot>
    <main>
      <slot></slot>
    </main>
  </div>
</template>

<script>
import Navbar from '../Components/Navbar.vue';

export default {
  components: {
    Navbar,
  },
};
</script>
