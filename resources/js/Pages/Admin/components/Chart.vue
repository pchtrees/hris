<template>
    <div>
      <BarChart :chart-data="chartData" :options="chartOptions" />
    </div>
  </template>
  
  <script>
  import { Bar } from 'vue-chartjs';
  import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js';
  
  ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale);
  
  export default {
    name: 'LeaveChart',
    components: {
      BarChart: Bar,
    },
    props: {
      leaveData: {
        type: Array,
        required: true,
      },
    },
    data() {
      return {
        chartData: {
          labels: this.leaveData.map(data => data.label),
          datasets: [
            {
              label: 'Leave Days',
              backgroundColor: '#42A5F5',
              data: this.leaveData.map(data => data.value),
            },
          ],
        },
        chartOptions: {
          responsive: true,
          maintainAspectRatio: false,
        },
      };
    },
  };
  </script>
  
  <style scoped>
  /* Add any custom styles here */
  </style>
  