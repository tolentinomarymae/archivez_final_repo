<template>
    <PurpleStyle />
    <ViewUploads />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import ViewUploads from '../../components/AdminDashboard/ViewUploads.vue';
  
  export default defineComponent({
    name: 'ViewUploadsView',
  
    components: {
        PurpleStyle, ViewUploads,
},
  });
  </script>
