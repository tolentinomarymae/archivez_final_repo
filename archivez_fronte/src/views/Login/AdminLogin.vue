<template>
    <DashboardStyle />
    <AdminL />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import DashboardStyle from '../../components/DashboardStyle.vue';
  import AdminL from '../../components/LoginFolder/AdminL.vue';
  
  export default defineComponent({
    name: 'AdminLogin',
  
    components: {
        DashboardStyle, AdminL,
},
  });
  </script>