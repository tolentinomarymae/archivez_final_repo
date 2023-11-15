<template>
    <PurpleStyle />
    <SubmittedFiles />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import SubmittedFiles from '../../components/InstructorDashboard/SubmittedFiles.vue';
  
  export default defineComponent({
    name: 'SubmittedFilesView',
  
    components: {
        PurpleStyle, SubmittedFiles,
},
  });
  </script>
