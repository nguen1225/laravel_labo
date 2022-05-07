require('./bootstrap');
window.Vue = require('vue');
import Alpine from 'alpinejs';
import { createApp } from 'vue'
import vitalForm from "./components/vital/vitalForm.vue";
import vitalRecords from "./components/vital/vitalRecords.vue";

/**
 * Vueに関する記述
 */

// 身体管理のフォーム
const vital_form = createApp(vitalForm);
const vital_records = Vue.createApp({vitalRecords});

vital_records.component('vital-records', vitalRecords)

vital_form.mount('#vital_form');
vital_records.mount('#vital_records');
/**
 * Breezeのログインで導入した
 */
window.Alpine = Alpine;
Alpine.start();
