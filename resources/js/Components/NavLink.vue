<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() =>
    props.active
        ? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-blue-700 focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out'

        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-blue-700 dark:hover:text-blue-700  focus:outline-none focus:text-blue-700  transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
