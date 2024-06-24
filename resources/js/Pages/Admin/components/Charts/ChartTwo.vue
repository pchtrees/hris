<script setup>
import { ref } from 'vue';
import VueApexCharts from 'vue3-apexcharts';

const chartData = {
  series: [
    {
      name: 'Absences',
      data: [44, 55, 41, 67, 22, 43, 65]
    },
    {
      name: 'Present',
      data: [13, 23, 20, 8, 13, 27, 15]
    }
  ],
  labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S']
}

const chart = ref(null)

const apexOptions = {
  colors: ['#3056D3', '#80CAEE'],
  chart: {
    type: 'bar',
    height: 335,
    stacked: true,
    toolbar: {
      show: false
    },
    zoom: {
      enabled: false
    }
  },
  responsive: [
    {
      breakpoint: 1536,
      options: {
        plotOptions: {
          bar: {
            borderRadius: 0,
            columnWidth: '25%'
          }
        }
      }
    }
  ],
  plotOptions: {
    bar: {
      horizontal: false,
      borderRadius: 0,
      columnWidth: '25%',
      borderRadiusApplication: 'end',
      borderRadiusWhenStacked: 'last'
    }
  },
  dataLabels: {
    enabled: false
  },
  xaxis: {
    type: 'category',
    categories: chartData.labels
  },
  legend: {
    position: 'top',
    horizontalAlign: 'left',
    fontFamily: 'Satoshi',
    fontWeight: 500,
    fontSize: '14px',

    markers: {
      radius: 99
    }
  },
  fill: {
    opacity: 1
  }
}
</script>

<template>
  <div
    class="col-span-12 rounded-lg border border-stroke bg-white p-10 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4"
  >
    <div class="mb-4 justify-between gap-4 sm:flex">
      <div>
        <h4 class="text-xl font-bold text-black dark:text-white p-2">Chart Two</h4>
      </div>
      <div>
        <div class="relative z-20 inline-block">
          <select
            name="#"
            id="#"
            class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 text-sm font-medium outline-none dark:text-white"
          >
            <option value="">This Week</option>
            <option value="">Last Week</option>
          </select>
          <span class="absolute top-1/2 right-3 z-10 -translate-y-1/2">
          </span>
        </div>
      </div>
    </div>

    <div>
      <div id="chartTwo" class="-ml-5 -mb-9">
        <VueApexCharts
          type="bar"
          height="335"
          :options="apexOptions"
          :series="chartData.series"
          ref="chart"
        />
      </div>
    </div>
  </div>
</template>
