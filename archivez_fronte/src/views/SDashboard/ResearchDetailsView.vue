<template>
    <PurpleStyle />
    <ResearchDetails />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import ResearchDetails from '../../components/StudentDashboard/ResearchDetails.vue';
  
  export default defineComponent({
    name: 'ResearchDetailsView',
  
    components: {
        PurpleStyle, ResearchDetails
},
  });
  </script>
