<template>
    <DashboardStyle />
    <InstructorS />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import DashboardStyle from '../../components/DashboardStyle.vue';
  import InstructorS from '../../components/LoginFolder/InstructorS.vue';
  
  export default defineComponent({
    name: 'InstructorSignup',
  
    components: {
    DashboardStyle,
    InstructorS
},
  });
  </script>