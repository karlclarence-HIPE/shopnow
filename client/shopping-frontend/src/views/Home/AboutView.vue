<script setup lang="ts">
import { onMounted } from 'vue';
import LayoutView from '../../layout/LayoutView.vue';
import { useAuthStore } from '../../stores/auth';

const authStore = useAuthStore();

onMounted(() => {
    if (!authStore.token) {
        authStore.refresh();
    }
})
</script>
<template>
    <LayoutView>
        <div class="min-h-screen flex flex-col items-center justify-center pt-10">

        </div>
    </LayoutView>
</template>