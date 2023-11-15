<template>
    <PurpleStyle />
    <AddNewPaper />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import AddNewPaper from '../../components/StudentDashboard/AddNewPaper.vue';
  
  export default defineComponent({
    name: 'AddNewPaperView',
  
    components: {
      PurpleStyle, AddNewPaper
},
  });
  </script>
