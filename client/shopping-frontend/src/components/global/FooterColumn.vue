<script setup lang="ts">
defineProps<{
    title: string;
}>()
</script>
<template>
    <div class="flex flex-col items-start gap-2 text-white">
        <h2 class="text-xl mb-2">{{ title }}</h2>
        <slot></slot>
    </div>
</template>