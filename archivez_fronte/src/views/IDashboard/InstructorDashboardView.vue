<template>
    <PurpleStyle />
    <InstructorDashboard />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import InstructorDashboard from '../../components/InstructorDashboard/InstructorDash.vue';
  
  export default defineComponent({
    name: 'InstructorDashboardView',
  
    components: {
        PurpleStyle, InstructorDashboard,
},
  });
  </script>
