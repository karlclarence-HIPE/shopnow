<script setup lang="ts">
interface BannerFlagProps {
    title: string;
}

defineProps<BannerFlagProps>();
</script>
<template>
    <p class="text-gray-800 px-4 py-2 rounded-lg border-l-10 border-red-400 font-bold">{{ title }}</p>
</template>