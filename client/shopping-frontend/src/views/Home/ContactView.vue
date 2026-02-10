<script setup lang="ts">
import FooterView from '../../components/global/FooterView.vue';
import NavBar from '../../components/nav/NavBar.vue';

</script>
<template>
    <NavBar />
    <div class="min-h-screen flex flex-col items-center justify-center pt-10">
        <div class="flex flex-col items-center justify-center border gap-2">
            <div class="flex flex-col items-start justify-center ">
                <div class="w-full flex flex-row gap-2 items-center justify-cente border-2">
                    <div class="bg-red-500">
                        <i class="fi fi-ss-phone-call text-3xl"></i>
                    </div>
                    <p class="text-base">Call To Us</p>
                </div>
                <p>We are available 24/7, 7 days a week.</p>
                <p>Phone: +8801611112222</p>
            </div>
        </div>
        <div class="flex flex-col"></div>
    </div>
    <FooterView />
</template>