<template>
    <DashboardStyle />
    <InstructorL />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import DashboardStyle from '../../components/DashboardStyle.vue';
  import InstructorL from '../../components/LoginFolder/InstructorL.vue';
  
  export default defineComponent({
    name: 'InstructorLogin',
  
    components: {
    DashboardStyle,
    InstructorL
},
  });
  </script>