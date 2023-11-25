import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'
import axios from 'axios'

loadFonts()
axios.defaults.baseURL="http://archivez_final_repo.test/archivez_be/public/"

createApp(App)
  .use(router)
  .use(vuetify)
  .mount('#app')
