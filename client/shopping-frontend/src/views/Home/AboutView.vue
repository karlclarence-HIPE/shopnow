<script setup lang="ts">
import FooterView from '../../components/global/FooterView.vue';
import NavBar from '../../components/nav/NavBar.vue';
import { onMounted } from 'vue';

onMounted(() => {
    sessionStorage.removeItem("accessToken")
})
</script>
<template>
    <NavBar />
    <div class="min-h-screen flex items-center justify-center pt-10">

    </div>
    <FooterView />
</template>