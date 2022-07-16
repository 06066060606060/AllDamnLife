import './bootstrap';
import '../css/app.css';
import { createApp } from 'vue/dist/vue.esm-bundler';
import AddToCart from './components/AddToCart.vue'

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

const app = createApp()

app.component('AddToCart', AddToCart)
app.mount('#app')
