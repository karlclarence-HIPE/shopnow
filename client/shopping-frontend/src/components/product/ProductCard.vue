<script setup lang="ts">

interface ProductCardProps {
    id?: string;
    image: string;
    productName: string;
    price: string;
    prevPrice?: string;
    starCount: number;
    ratings: string;
}

defineProps<ProductCardProps>();

</script>
<template>
    <div class="flex flex-col h-75 w-55 cursor-pointer">
        <div class="flex items-center justify-center bg-[#F2F2F2] w-full h-50">
            <img :src="image" alt="" class="max-w-full max-h-full object-contain" />
        </div>
        <div class="p-2">
            <h2 class="text-lg font-semibold truncate">{{ productName }}</h2>
            <p class="text-red-500">&#x20B1;{{ price }}
                <span class="line-through text-gray-400">&#x20B1;{{ prevPrice }}</span>
            </p>
            <!-- Star -->
            <div class="flex items-center space-x-1">
                <svg v-for="n in starCount" :key="n" class="w-5 h-5 text-yellow-500" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                </svg>
                <svg v-for="n in Math.max(0, 5 - starCount)" :key="n" class="w-5 h-5 text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                </svg>
                <p class="text-gray-400">({{ ratings }})</p>
            </div>
        </div>
    </div>
</template>