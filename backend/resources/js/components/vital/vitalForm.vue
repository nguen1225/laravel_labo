<template>
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">記録</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="text" name="title" id="title" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" />
        </div>
    </div>
    <div class="mb-4">
        <label for="registered_at" class="block text-sm font-medium text-gray-700">登録日</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="date" name="registered_at" id="registered_at" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" />
        </div>
    </div>
    <div class="mb-4">
        <label for="height" class="block text-sm font-medium text-gray-700">身長</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="text" name="height" id="height" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="cm" />
        </div>
    </div>
    <div class="mb-4">
        <label for="body_weight" class="block text-sm font-medium text-gray-700">体重</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="text" name="body_weight" id="body_weight" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="kg" />
        </div>
    </div>
    <div class="mb-4">
        <label for="heart_rate" class="block text-sm font-medium text-gray-700">心拍</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="text" name="heart_rate" id="heart_rate" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="" />
        </div>
    </div>
    <div class="mb-4">
        <label for="min_blood_pressure" class="block text-sm font-medium text-gray-700">最低血圧</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="text" name="min_blood_pressure" id="min_blood_pressure" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="" />
        </div>
    </div>
    <div class="mb-4">
        <label for="max_blood_pressure" class="block text-sm font-medium text-gray-700">最高血圧</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="text" name="max_blood_pressure" id="max_blood_pressure" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="" />
        </div>
    </div>
    <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700">備考</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <textarea name="content" id="content" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" rows="5" placeholder=""></textarea>
        </div>
    </div>
</template>

<script>

</script>

<style scoped>

</style>
