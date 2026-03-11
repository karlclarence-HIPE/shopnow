<script setup lang="ts">
import { ref } from 'vue';
import carousel1 from '../assets/carousel/carousel-1.svg';
import carousel2 from '../assets/carousel/carousel-2.svg';
import carousel3 from '../assets/carousel/carousel-3.svg';
import carousel4 from '../assets/carousel/carousel-4.svg';
import carousel5 from '../assets/carousel/carousel-5.svg';

const images = [carousel1, carousel2, carousel3, carousel4, carousel5]
const index = ref(0);

const next = () => {
    index.value = (index.value + 1) % images.length;
}

const prev = () => {
    index.value = (index.value - 1 + images.length) % images.length;
}

</script>

<template>
    <div id="indicators-carousel" class="relative w-full h-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-base md:h-80">
            <div v-for="(img, i) in images" :key="i" v-show="index === i" class="duration-700 inset-0 ease-in-out">
                <img :src="img" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" />
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-base" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-base" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-base" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-base" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-base" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" @click="prev"
            class="absolute top-0 start-0 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-base bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" @click="next"
            class="absolute top-0 end-0 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-base bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</template>