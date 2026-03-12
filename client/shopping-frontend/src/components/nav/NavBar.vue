<script setup lang="ts">
import router from '../../router';
import { computed } from 'vue';
import { useAuthStore } from '../../stores/auth';

const authStore = useAuthStore();
const hasToken = computed(() => !!authStore.token);

const goToCart = () => {
    if (!authStore.token) {
        router.push("/auth/login");
    }
    router.push("/cart");
}

const goToProfile = () => {
    if (!authStore.token) {
        router.push("/auth/login");
    }
    router.push("/profile");
}

const goToHome = () => {
    router.push("/home")
}

const goToContact = () => {
    router.push("/contact")
}

const goToSignUp = () => {
    router.push("/auth/sign-up")
}

const goToAbout = () => {
    router.push("/about")
}

</script>
<template>
    <div
        class="hidden md:flex fixed justify-between items-center w-full h-[10vh] border-b border-gray-300 bg-white z-20 px-10">
        <div class="flex items-center w-1/3">
            <h2 class="text-2xl font-bold">ShopNow</h2>
        </div>
        <div class="flex justify-center items-center w-1/3">
            <ul class="flex items-center gap-10 ">
                <li><a @click="goToHome" class="text-base cursor-pointer">Home</a></li>
                <li><a @click="goToContact" class="text-base cursor-pointer">Contact</a></li>
                <li><a @click="goToAbout" class="text-base cursor-pointer">About</a></li>
                <li v-if="!hasToken"><a @click="goToSignUp" class="text-base cursor-pointer">Sign
                        Up</a></li>
            </ul>
        </div>
        <div class="flex justify-end items-center w-1/3 gap-5">
            <div class="relative w-56">
                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                    <svg class="w-4 h-4 text-body" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search" placeholder="Search" required
                    class="block w-full p-3 ps-9 text-sm text-heading bg-transparent border-0 border-b-2 border-black focus:border-b-2 placeholder:text-body rounded-none outline-none" />
                <button type="button"
                    class="absolute end-1.5 bottom-1.5 text-white bg-brand hover:bg-brand-strong border border-transparent focus:ring-4 focus:ring-brand-medium font-medium text-xs px-3 py-1.5 rounded focus:outline-none cursor-pointer">
                </button>
            </div>
            <button class="" @click="goToCart">
                <v-icon name="fa-regular-heart" scale="1.2" />
            </button>
            <button class="" @click="goToCart">
                <v-icon name="fa-shopping-cart" scale="1.2" />
            </button>
            <button class="" @click="goToProfile" v-if="hasToken">
                <v-icon name="fa-regular-user" scale="1.2" />
            </button>
        </div>
    </div>
</template>