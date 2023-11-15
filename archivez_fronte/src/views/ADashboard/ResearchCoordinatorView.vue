<template>
    <PurpleStyle />
    <ResearchCoordinator />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import ResearchCoordinator from '../../components/AdminDashboard/ResearchCoordinator.vue';
  
  export default defineComponent({
    name: 'ResearchCoordinatorView',
  
    components: {
        PurpleStyle, ResearchCoordinator,
},
  });
  </script>
