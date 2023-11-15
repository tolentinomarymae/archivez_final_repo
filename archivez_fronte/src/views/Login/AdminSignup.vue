<template>
    <DashboardStyle />
    <AdminS />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import DashboardStyle from '../../components/DashboardStyle.vue';
  import AdminS from '../../components/LoginFolder/AdminS.vue';
  
  export default defineComponent({
    name: 'AdminSignup',
  
    components: {
        DashboardStyle, AdminS,
},
  });
  </script>