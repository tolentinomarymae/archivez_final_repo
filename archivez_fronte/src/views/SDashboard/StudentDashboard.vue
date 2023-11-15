<template>
    <PurpleStyle />
    <StudentDash />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import StudentDash from '../../components/StudentDashboard/StudentDash.vue';
  
  export default defineComponent({
    name: 'StudentDashboard',
  
    components: {
      PurpleStyle,
    StudentDash,
},
  });
  </script>