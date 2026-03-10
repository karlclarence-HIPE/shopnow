<script setup lang="ts">
import NavBar from '../../components/nav/NavBar.vue';
import FooterView from '../../components/global/FooterView.vue';
import { onMounted } from 'vue';
import { useAuthStore } from '../../stores/auth';
// import { useRouter } from 'vue-router';

const authStore = useAuthStore();
// const router = useRouter(); 

onMounted(async () => {
    if (!authStore.token) {
        await authStore.refresh();
    }

})

</script>
<template>
    <NavBar />
    <div class="min-h-screen flex items-center justify-center pt-10">
    </div>
    <FooterView />
</template>