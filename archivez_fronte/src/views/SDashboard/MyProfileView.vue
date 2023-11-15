<template>
    <PurpleStyle />
    <MyProfile />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import PurpleStyle from '../../components/PurpleStyle.vue';
  import MyProfile from '../../components/StudentDashboard/MyProfile.vue';
  
  export default defineComponent({
    name: 'MyProfileView',
  
    components: {
        PurpleStyle, MyProfile
},
  });
  </script>
