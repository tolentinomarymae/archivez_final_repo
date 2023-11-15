<template>
    <PurpleStyle />
    <ResearchOutput />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import ResearchOutput from '../../components/StudentDashboard/ResearchOutput.vue';
  
  export default defineComponent({
    name: 'ResearchOutputView',
  
    components: {
        PurpleStyle, ResearchOutput
},
  });
  </script>
