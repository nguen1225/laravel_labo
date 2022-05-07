<template>
    <div v-for="vital_record in vital_records">
        「{{ vital_record.title }}」<span>登録日：</span>{{ formatDate(vital_record.registered_at) }}
    </div>
</template>

<script setup>
const props = defineProps({
    vital_records: Array
})

/**
 * 日付フォーマット処理
 */
function formatDate(dt) {
    const registered_at = new Date(dt);
    const y = registered_at.getFullYear();
    const m = ('00' + (registered_at.getMonth()+1)).slice(-2);
    const d = ('00' + registered_at.getDate()).slice(-2);
    return (y + '/' + m + '/' + d);
}
</script>

<style scoped>

</style>
