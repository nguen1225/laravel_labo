require('./bootstrap');
import Alpine from 'alpinejs';
import { createApp } from 'vue'
import vitalForm from "./components/vital/vitalForm.vue";

/**
 * Vueに関する記述
 */

// 身体管理のフォーム
const vital_form = createApp(vitalForm);
vital_form.mount('#vital_form')

/**
 * Breezeのログインで導入した
 */
window.Alpine = Alpine;
Alpine.start();
