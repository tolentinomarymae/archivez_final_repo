<template>
    <DashboardStyle />
    <StudentL />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import DashboardStyle from '../../components/DashboardStyle.vue';
  import StudentL from '../../components/LoginFolder/StudentL.vue';
  
  export default defineComponent({
    name: 'StudentLogin',
  
    components: {
    DashboardStyle,
    StudentL
},
  });
  </script>