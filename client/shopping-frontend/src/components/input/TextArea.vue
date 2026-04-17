<script setup lang="ts">

interface TextAreaProps {
    id: string;
    name: string;
    placeholder: string;
    className: string;
    required?: boolean;
}
const model = defineModel<string>();
defineProps<TextAreaProps>();

</script>
<template>
    <textarea v-model="model" :name="name" :id="id" :placeholder="placeholder" :required="required" :class="className">

    </textarea>
</template>