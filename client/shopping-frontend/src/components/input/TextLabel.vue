<script setup lang="ts">
interface TextLabelProps {
    for: string;
    className: string;
    title: string;
    required: boolean;
    spanClassName: string;
}

defineProps<TextLabelProps>();
</script>
<template>
    <label :for="for" :class="className">{{ title }} <span :class="spanClassName"> {{ required ? "*" : " "
    }}</span></label>
</template>