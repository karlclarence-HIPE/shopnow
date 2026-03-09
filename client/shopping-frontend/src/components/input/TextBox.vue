<script setup lang="ts">

interface TextBoxProps {
    id: string;
    name: string;
    type: string;
    className: string;
    placeholder?: string;
    required: boolean;
}

defineProps<TextBoxProps>();

</script>
<template>
    <input :type="type" :id="id" :name="name" :placeholder="placeholder" :required="required" :class="className" />
</template>