<template>
    <PurpleStyle />
    <Archive />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import Archive from '../../components/StudentDashboard/Archive.vue';
  
  export default defineComponent({
    name: 'ArchiveView',
  
    components: {
      PurpleStyle, Archive
},
  });
  </script>
