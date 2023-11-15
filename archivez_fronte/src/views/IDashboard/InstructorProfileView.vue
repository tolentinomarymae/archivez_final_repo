<template>
    <PurpleStyle />
    <InstructorProfile />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import InstructorProfile from '../../components/InstructorDashboard/InstructorProfile.vue';
  
  export default defineComponent({
    name: 'InstructorProfileView',
  
    components: {
        PurpleStyle, InstructorProfile,
},
  });
  </script>
