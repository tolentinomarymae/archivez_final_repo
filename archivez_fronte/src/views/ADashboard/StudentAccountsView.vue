<template>
    <PurpleStyle />
    <StudentAccounts />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import StudentAccounts from '../../components/AdminDashboard/StudentAccounts.vue';
  
  export default defineComponent({
    name: 'StudentAccountsView',
  
    components: {
        PurpleStyle, StudentAccounts,
},
  });
  </script>
