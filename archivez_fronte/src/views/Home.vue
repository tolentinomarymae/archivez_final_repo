<template>
    <LandingPageStyle />
    <LandingPage />


  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import LandingPageStyle from '../components/LandingPageFolder/LandingPageStyle.vue';
  import LandingPage from '../components/LandingPageFolder/LandingPage.vue';
  
  export default defineComponent({
    name: 'Home',
  
    components: {
        LandingPageStyle, LandingPage
},
  });
  </script>
