<template>
  <div class="relative isolate px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl mb-8">Welcome {{ $page.props.auth.user.name }}</h1> 
        <div class="flex items-center justify-center gap-x-6 mb-4"> 
          <div class="h-0.5 w-16 bg-blue-900"></div>
          <h2 class="text-lg font-semibold text-blue-900">Daily Quotes</h2>
          <div class="h-0.5 w-16 bg-blue-900"></div>
        </div>
        <p class="mt-6 text-lg leading-8 text-gray-600">{{ currentQuote }}</p> 
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a :href="route('user.employee.pds')"
            class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-lg hover:shadow-xl hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
            Update Personal Information <span aria-hidden="true">→</span>
          </a>
          </div>    

      </div>
    </div>
  </div>
</template>



<script setup>
import { ref, onMounted } from 'vue';


const quotes = ref([]);

const fetchQuotes = async () => {
  try {
    const response = await fetch('https://api.quotable.io/random');
    if (!response.ok) {
      throw new Error('Failed to fetch quotes');
    }
    const data = await response.json();
    quotes.value = [data.content]; // assuming API response contains quote in 'content' field
  } catch (error) {
    console.error(error);
    quotes.value = ["Failed to fetch quotes"]; // handle error gracefully
  }
};

const currentQuote = ref("");

const generateQuote = () => {
  const randomIndex = Math.floor(Math.random() * quotes.value.length);
  currentQuote.value = quotes.value[randomIndex];
};

onMounted(async () => {
  await fetchQuotes();
  generateQuote();
});

{ quotes, currentQuote, generateQuote };
</script>