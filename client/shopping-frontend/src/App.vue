<script setup lang="ts">
import { useAuthStore } from './stores/auth';
import { onMounted } from 'vue';
import { useRouter } from 'vue-router';

const authStore = useAuthStore();
const router = useRouter();

onMounted(async () => {
  if (!authStore.token) return;

  try {
    await authStore.refresh();
    router.push('/home');
  } catch {
    authStore.logout();
  }
})
</script>

<template>
  <router-view />
</template>