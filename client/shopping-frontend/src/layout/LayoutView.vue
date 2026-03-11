<script setup lang="ts">
import NavBar from '../components/nav/NavBar.vue';
import FooterView from '../components/global/FooterView.vue';
</script>
<template>
    <div class="min-h-screen flex flex-col ">
        <NavBar />
        <main class="flex-1 flex flex-col justify-center h-full">
            <slot />
        </main>
        <FooterView />
    </div>
</template>