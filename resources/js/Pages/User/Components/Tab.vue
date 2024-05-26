<template>
  <div>
    <div class="flex justify-center" role="tablist">
      <a
        v-for="(tab, index) in tabs"
        :key="index"
        :class="['py-2 px-4 rounded-lg transition duration-300 ease-in-out mr-2 cursor-pointer border border-transparent', activeTab === index ? 'bg-blue-600 text-white text-sm' : 'hover:bg-gray-200']"
        @click="selectTab(index)"
        href="#"
        role="tab"
        :aria-selected="activeTab === index ? 'true' : 'false'">
        {{ tab }}
      </a>
    </div>
    <div class="mt-4 flex justify-center">
      <div v-show="activeTab === 0" class="p-4 bg-white rounded-lg shadow w-full max-w-3xl">
        <div>
          <p>Oersonal content goes here.</p>
        </div>      
      </div>
      <div v-show="activeTab === 1" class="p-4 bg-white rounded-lg shadow w-full max-w-3xl">
        <p>Family Background content goes here.</p>
      </div>
      <div v-show="activeTab === 2" class="p-4 bg-white rounded-lg shadow w-full max-w-3xl">
        <p>Educational Background content goes here.</p>
      </div>
      <div v-show="activeTab === 3" class="p-4 bg-white rounded-lg shadow w-full max-w-3xl">
        <p>Civil Service Eligibility content goes here.</p>
      </div>
      <div v-show="activeTab === 4" class="p-4 bg-white rounded-lg shadow w-full max-w-3xl">
        <p>Work Experience content goes here.</p>
      </div>
      <div v-show="activeTab === 5" class="p-4 bg-white rounded-lg shadow w-full max-w-3xl">
        <p>Voluntary Work content goes here.</p>
      </div>
      <div v-show="activeTab === 6" class="p-4 bg-white rounded-lg shadow w-full max-w-3xl">
        <p>Training Programs Attended content goes here.</p>
      </div>
      <div v-show="activeTab === 7" class="p-4 bg-white rounded-lg shadow w-full max-w-3xl">
        <p>Other Information content goes here.</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      tabs: [
        'Personal Information', 
        'Family Background', 
        'Educational Background', 
        'Civil Service Eligibility', 
        'Work Experience', 
        'Voluntary Work', 
        'Training Programs Attended', 
        'Other Information'
      ],
      activeTab: 0,
    };
  },
  methods: {
    selectTab(index) {
      this.activeTab = index;
    }
  }
};
</script>

