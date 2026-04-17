<script setup lang="ts">

interface BaseButtonProps {
    type?: 'submit' | 'reset' | 'button' | undefined;
    name: string;
    className: string;
}

defineProps<BaseButtonProps>();
defineEmits(['click']);
</script>
<template>
    <button :type="type" :class="className" @click="$emit('click', $event)">{{ name }}</button>
</template>