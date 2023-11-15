<template>
    <DashboardStyle />
    <StudentS />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import DashboardStyle from '../../components/DashboardStyle.vue';
  import StudentS from '../../components/LoginFolder/StudentS.vue';
  
  export default defineComponent({
    name: 'StudentSignup',
  
    components: {
    DashboardStyle,
    StudentS
},
  });
  </script>