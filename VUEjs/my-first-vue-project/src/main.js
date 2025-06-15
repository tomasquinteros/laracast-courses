import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import { createPinia } from 'pinia';

// Aca generamos nuestra app y la montamos despues de declarar el ruteo.
const app = createApp(App)

// Aca declaramos las rutas que va a tener nuestra Aplicacion
app.use(router)
// Aca le decimos que en app vamos a usar createPinia() // Dependencia en todo el proyecto.
app.use(createPinia());
app.mount('#app')



// Por CDN
/*
Vue.createApp({
  template: ``,
  data () {},
  etc...
}).mount('#app');
 */
