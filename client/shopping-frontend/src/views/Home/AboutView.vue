<script setup lang="ts">
import { onMounted } from 'vue';
import LayoutView from '../../layout/LayoutView.vue';
import { useAuthStore } from '../../stores/auth';
import Shopping1 from '../../assets/about/shopping.avif';
import Boss1 from '../../assets/bosses/boss1.png';
import Boss2 from '../../assets/bosses/boss2.png';
import Boss3 from '../../assets/bosses/boss3.png';

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
        <div class="min-h-1/2 flex flex-row items-center justify-center min-w-max gap-10 ">
            <div
                class="flex flex-col justify-center items-center border border-solid border-gray-300 h-45 w-55 rounded p-1 cursor-pointer">
                <v-icon name="fa-store" scale="3.80" />
                <p class="mb-4 text-3xl tracking-tight text-heading">10.5k</p>
                <p class="text-xs ">Annual gross sale in our site</p>
            </div>
            <div
                class="flex flex-col justify-center items-center border border-solid border-gray-300 h-45 w-55 rounded p-1 cursor-pointer">
                <v-icon name="fa-dollar-sign" scale="3.80" />
                <p class="mb-4 text-3xl tracking-tight text-heading">33k</p>
                <p class="text-xs ">Annual gross sale in our site</p>
            </div>
            <div
                class="flex flex-col justify-center items-center border border-solid border-gray-300 h-45 w-55 rounded p-1 cursor-pointer">
                <v-icon name="fa-shopping-bag" scale="3.80" />
                <p class="mb-4 text-3xl tracking-tight text-heading">45.5k</p>
                <p class="text-xs ">Annual gross sale in our site</p>
            </div>
            <div
                class="flex flex-col justify-center items-center border border-solid border-gray-300 h-45 w-55 rounded p-1 cursor-pointer">
                <v-icon name="fa-regular-money-bill-alt" scale="3.80" />
                <p class="mb-4 text-3xl tracking-tight text-heading">25k</p>
                <p class="text-xs ">Annual gross sale in our site</p>
            </div>
        </div>
        <div class="min-h-screen flex flex-row items-center justify-center min-w-max gap-5">
            <div class="h-100 w-100 bg-gray-200 flex flex-col">
                <img :src="Boss1" alt="">
                <div class="mt-5">
                    <p class="text-3xl tracking-tight text-heading ">Tom Cruise</p>
                    <p class="text-sm">Founder & Chairman</p>
                    <div class="mt-5">
                        <ul class="flex flex-row items-center gap-2 ">
                            <li><button> <v-icon name="fa-twitter" scale="1" />
                                </button></li>
                            <li><button> <v-icon name="fa-instagram" scale="1" />
                                </button></li>
                            <li><button> <v-icon name="fa-linkedin" scale="1" />
                                </button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="h-100 w-100 bg-gray-200 flex flex-col">
                <img :src="Boss2" alt="">
                <div class="mt-5">
                    <p class="text-3xl tracking-tight text-heading ">Emman Watson</p>
                    <p class="text-sm">Managing Director</p>
                    <div class="mt-5">
                        <ul class="flex flex-row items-center gap-2">
                            <li><button> <v-icon name="fa-twitter" scale="1" />
                                </button></li>
                            <li><button> <v-icon name="fa-instagram" scale="1" />
                                </button></li>
                            <li><button> <v-icon name="fa-linkedin" scale="1" />
                                </button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="h-100 w-100 bg-gray-200 flex flex-col">
                <img :src="Boss3" alt="">
                <div class="mt-5">
                    <p class="text-3xl tracking-tight text-heading ">Will Smith</p>
                    <p class="text-sm">Product Designer</p>
                    <div class="mt-5">
                        <ul class="flex flex-row items-center gap-2">
                            <li><button> <v-icon name="fa-twitter" scale="1" />
                                </button></li>
                            <li><button> <v-icon name="fa-instagram" scale="1" />
                                </button></li>
                            <li><button> <v-icon name="fa-linkedin" scale="1" />
                                </button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="min-h-[50vh] flex flex-row items-center justify-center min-w-max gap-20">
            <div class="flex flex-col items-center justify-center">
                <v-icon name="fa-truck-loading" scale="3.80" />
                <div class="flex flex-col items-center justify-center mt-10">
                    <p class="text-md tracking-tight font-bold">FREE AND FAST DELIVERY</p>
                    <p class="text-sm tracking-normal">Free delivery for all orders over $140</p>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center">
                <v-icon name="fa-headset" scale="3.80" />
                <div class="flex flex-col items-center justify-center mt-10">
                    <p class="text-md tracking-tight font-bold">24/7 CUSTOMER SERVICE</p>
                    <p class="text-sm tracking-normal">Friendly 24/7 customer support</p>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center">
                <v-icon name="fa-regular-check-circle" scale="3.80" />
                <div class="flex flex-col items-center justify-center mt-10">
                    <p class="text-md tracking-tight font-bold">MONEY BACK GUARANTEE</p>
                    <p class="text-sm tracking-normal">We return money within 30 days</p>
                </div>
            </div>
        </div>
    </LayoutView>
</template>