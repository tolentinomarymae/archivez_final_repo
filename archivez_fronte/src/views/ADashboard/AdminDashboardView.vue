<template>
    <PurpleStyle />
    <AdminDash />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import AdminDash from '../../components/AdminDashboard/AdminDash.vue';
  
  export default defineComponent({
    name: 'AdminDashboardView',
  
    components: {
        PurpleStyle, AdminDash,
},
  });
  </script>
