require('./bootstrap');
import { createApp } from 'vue';
import Home from './components/ExampleComponent.vue';
const app = createApp({});

//register the component
app.component('Home', Home);

//..HTML element to mount the Vue application
app.mount('#app');
