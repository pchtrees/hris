<template>
  <div class="bg-white rounded-lg shadow-md p-4 dark:border-strokedark dark:bg-boxdark flex justify-between items-center">
    <div>
      <div class="flex items-center mb-2">
        <p class="text-lg text-blue-800 font-bold dark:text-white">{{ title }}</p>
      </div>
      <p class="text-gray-600 text-lg dark:text-white">{{ value }}</p>
    </div>
    <div>
      <component :is="icon" class="w-8 h-8 text-blue-800 dark:text-white"></component>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true,
    },
    value: {
      type: Number,
      required: true,
    },
    icon: {
      type: Object,
      required: true,
    },
  },
};
</script>
