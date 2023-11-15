<template>
    <PurpleStyle />
    <AdminProfile />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import AdminProfile from '../../components/AdminDashboard/AdminProfile.vue';
  
  export default defineComponent({
    name: 'AdminProfileView',
  
    components: {
        PurpleStyle, AdminProfile,
},
  });
  </script>
