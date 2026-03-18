<script setup lang="ts">
import { onMounted } from 'vue';
import LayoutView from '../../layout/LayoutView.vue';
import { useAuthStore } from '../../stores/auth';
import Shopping1 from '../../assets/about/shopping.avif';

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
            <div class="flex flex-row items-center justify-center w-full">
                <div class="w-1/2 flex flex-col items-center">
                    <h2 class="mb-4 text-4xl font-semibold tracking-tight text-heading md:text-5xl lg:text-6xl">
                        Our Story
                    </h2>
                    <p class="text-justify w-150">
                        Launced in 2015, Exclusive is South Asia’s premier online shopping makterplace with an active
                        presense in Bangladesh. Supported by wide range of tailored marketing, data and service
                        solutions,
                        Exclusive has 10,500 sallers and 300 brands and serves 3 millioons customers across the region.
                    </p>
                    <br />
                    <p class="text-justify w-150">
                        Exclusive has more than 1 Million products to offer, growing at a very fast. Exclusive offers a
                        diverse assotment in categories ranging from consumer.
                    </p>
                </div>
                <div class="w-1/2">
                    <img :src="Shopping1" alt="">
                </div>
            </div>
        </div>
        <div class="flex flex-row items-center justify-center min-w-max gap-10">
            <div
                class="flex flex-col justify-center items-center border border-solid h-45 w-45 rounded p-1 cursor-pointer">
                <v-icon name="fa-store" scale="3.80" />
                <p class="mb-4 text-3xl tracking-tight text-heading">10.5k</p>
                <p class="text-xs ">Annual gross sale in our site</p>

            </div>
            <div
                class="flex flex-col justify-center items-center border border-solid h-45 w-45 rounded p-1 cursor-pointer">
                <v-icon name="fa-shopping-bag" scale="3.80" />
                <p class="mb-4 text-3xl tracking-tight text-heading">33k</p>
                <p class="text-xs ">Annual gross sale in our site</p>

            </div>
            <div
                class="flex flex-col justify-center items-center border border-solid h-45 w-45 rounded p-1 cursor-pointer">
                <v-icon name="fa-shopping-bag" scale="3.80" />
                <p class="mb-4 text-3xl tracking-tight text-heading">45.5k</p>
                <p class="text-xs ">Annual gross sale in our site</p>

            </div>
            <div
                class="flex flex-col justify-center items-center border border-solid h-45 w-45 rounded p-1 cursor-pointer">
                <v-icon name="fa-regular-money-bill-alt" scale="3.80" />
                <p class="mb-4 text-3xl tracking-tight text-heading">25k</p>
                <p class="text-xs ">Annual gross sale in our site</p>
            </div>
        </div>
    </LayoutView>
</template>